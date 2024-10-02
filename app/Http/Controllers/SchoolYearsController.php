<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

use App\Repositories\SchoolYearsRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolYearsController extends Controller
{
    protected $_SchoolYearsRepository;
    protected $module;

    public function __construct()
    {
        $this->_SchoolYearsRepository = new SchoolYearsRepository;
        $this->module               = "schoolyears";
    }

    public function index()
    {
        $schoolyears = $this->_SchoolYearsRepository->getAll();
        $prediction = $this->_SchoolYearsRepository->predictNextYearRegistration();

        return view('layouts.admin.pages.schoolyears.index', compact('schoolyears', 'prediction'));
    }

    public function create()
    {
        return view('layouts.admin.pages.schoolyears.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->_validationRules(''));

        if ($validator->fails()) {
            return redirect('schoolyears')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        $this->_SchoolYearsRepository->insert($request->all());
        DB::commit();

        return redirect('schoolyears')->with('message', 'Pendaftaran berhasil tersimpan');

    }
    public function storesiswa(Request $request)
    {
        $validator = Validator::make($request->all(), $this->_validationRules(''));

        if ($validator->fails()) {
            return redirect('schoolyears')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        $this->_SchoolYearsRepository->insert($request->all());
        DB::commit();

        return redirect('schoolyears')->with('message', 'Tahun ajaran berhasil ditambahkan');
    }
    public function predictNextYearRegistration()
{
    // Logika prediksi
    $prediction = [
        'next_year' => 2025,  // Contoh data
        'predicted_registrants' => 100,  // Contoh data
    ];

    // Kirim variabel prediction ke view
    return view('path.to.view', compact('prediction'));
}


    public function show($id)
    {
        return view('layouts.pages.schoolyears.show');
    }

    public function edit($id)
    {
        $detail  = $this->_SchoolYearsRepository->getById($id);

        return view('layouts.admin.pages.schoolyears.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->_validationRules($id));

        if ($validator->fails()) {
            return redirect('schoolyears')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        $this->_SchoolYearsRepository->update($request->all(), $id);
        DB::commit();

        return redirect('schoolyears')->with('message', 'Tahun ajaran berhasil diubah');
    }

    public function destroy($id)
    {
        // Check detail to db
        $detail  = $this->_SchoolYearsRepository->getById($id);

        if (!$detail) {
            return redirect('schoolyears');
        }

        DB::beginTransaction();

        $this->_SchoolYearsRepository->delete($id);

        DB::commit();

        return redirect('schoolyears')->with('message', 'Tahun ajaran berhasil dihapus');
    }

    public function getdata($id)
    {

        $response   = array('status' => 0, 'result' => array());
        $getDetail  = $this->_SchoolYearsRepository->getById($id);

        if ($getDetail) {
            $response['status'] = 1;
            $response['result'] = $getDetail;
        }

        return $response;
    }

    public function predict()
{
    // Panggil fungsi prediksi dari repository
    $prediction = $this->_SchoolYearsRepository->predictNextYearRegistration();

    // Tampilkan di view
    return view('layouts.admin.pages.schoolyears.predict', compact('prediction'));
}


private function _validationRules($id = '')
{
    if ($id == '') {
        return [
            'years' => 'required',
            'number_of_registrans' => 'required|numeric',
        ];
    } else {
        return [
            'years' => 'required',
            'number_of_registrans' => 'required|numeric',
        ];
    }
}

}


