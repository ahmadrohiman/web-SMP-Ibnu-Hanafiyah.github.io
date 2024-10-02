<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

use App\Repositories\RegistrationRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    protected $_RegistrationRepository;
    protected $module;

    public function __construct()
    {
        $this->_RegistrationRepository = new RegistrationRepository;
        $this->module               = "registration";
    }

    public function index()
    {
        $registration = $this->_RegistrationRepository->getAll();

        return view('layouts.admin.pages.registration.index', compact('registration'));
    }

    public function create()
    {
        return view('layouts.admin.pages.registration.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->_validationRules(''));

        if ($validator->fails()) {
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['schoolyears_id', 'name_student', 'date_of_birth', 'gender',
        'elementary_of_origin', 'phone_number', 'home_address']);

        DB::beginTransaction();
        $this->_RegistrationRepository->insert($data);
        DB::commit();

        return redirect('registration')->with('message', 'Pendaftaran berhasil tersimpan');
    }

    public function storesiswa(Request $request)
    {
        $validator = Validator::make($request->all(), $this->_validationRules(''));

        if ($validator->fails()) {
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        $this->_RegistrationRepository->insert($request->all());
        DB::commit();

        return redirect('registration')->with('message', 'Tahun ajaran berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('layouts.pages.registration.show');
    }

    public function edit($id)
    {
        $detail  = $this->_RegistrationRepository->getById($id);

        return view('layouts.admin.pages.registration.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->_validationRules($id));

        if ($validator->fails()) {
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        $this->_RegistrationRepository->update($request->all(), $id);
        DB::commit();

        return redirect('registration')->with('message', 'Tahun ajaran berhasil diubah');
    }

    public function destroy($id)
    {
        // Check detail to db
        $detail  = $this->_RegistrationRepository->getById($id);

        if (!$detail) {
            return redirect('registration');
        }

        DB::beginTransaction();

        $this->_RegistrationRepository->delete($id);

        DB::commit();

        return redirect('registration')->with('message', 'Tahun ajaran berhasil dihapus');
    }

    public function getdata($id)
    {

        $response   = array('status' => 0, 'result' => array());
        $getDetail  = $this->_RegistrationRepository->getById($id);

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
                'name_student' => 'required',
            ];
        } else {
            return [
                'name_student' => 'required',
            ];
        }
    }
}


