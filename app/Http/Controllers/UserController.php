<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $module;
    protected $_UserRepository;
    public function __construct()
    {
        $this->_UserRepository = new UserRepository;
        $this->module               = "User";
    }

    public function index()
    {
        $user = $this->_UserRepository->getAll();

        return view('layouts.admin.pages.user.index', compact('user'));
    }

    public function create()
    {
        return view('layouts.admin.pages.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->_validationRules(''));

        if ($validator->fails()) {
            return redirect('user')
                ->withErrors($validator)
                ->withInput();
        }

        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5|max:225',
        ]);

        $dataUser = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ];

        DB::beginTransaction();
        $this->_UserRepository->insert($dataUser);
        DB::commit();

        return redirect('user')->with('message', 'User berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('layouts.admin.pages.user.show');
    }

    public function edit($id)
    {
        $detail  = $this->_UserRepository->getById($id);

        return view('layouts.admin.pages.user.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->_validationRules($id));

        if ($validator->fails()) {
            return redirect('user')
                ->withErrors($validator)
                ->withInput();
        }

        $dataUser = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ];

        DB::beginTransaction();
        $this->_UserRepository->update($dataUser, $id);
        DB::commit();

        return redirect('user')->with('message', 'user berhasil diubah');
    }

    public function destroy($id)
    {
        // Check detail to db
        $detail  = $this->_UserRepository->getById($id);

        if (!$detail) {
            return redirect('user');
        }

        DB::beginTransaction();

        $this->_UserRepository->delete($id);

        DB::commit();

        return redirect('user')->with('message', 'user berhasil dihapus');
    }

    public function getdata($id)
    {

        $response   = array('status' => 0, 'result' => array());
        $getDetail  = $this->_UserRepository->getById($id);

        if ($getDetail) {
            $response['status'] = 1;
            $response['result'] = $getDetail;
        }

        return $response;
    }

    private function _validationRules($id = '')
    {
        if ($id == '') {
            return [
                'name' => 'required',
            ];
        } else {
            return [
                'name' => 'required',
            ];
        }
    }

}
