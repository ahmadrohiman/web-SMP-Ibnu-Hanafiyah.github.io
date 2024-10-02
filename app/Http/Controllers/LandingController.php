<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;


class LandingController extends Controller
{
    public function index()
    {
        return view('layouts.landing.home');
    }
    public function home()
    {
        return view('layouts.landing.home');
    }
    public function daftar()
    {
        return view('layouts.landing.daftar');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'schoolyears_id' => 'required|string',
            'name_student' => 'required|string',
            'date_of_birth' => 'required|string',
            'gender' => 'required|string',
            'elementary_of_origin' => 'required|string',
            'phone_number' => 'required|string|unique:registration',
            'home_address' => 'required|string|unique:registration',
        ]);

        // Simpan data
        DB::table('registration')->insert($validated);

        // Redirect kembali ke halaman daftar dengan pesan sukses
        return redirect('daftar')->with('message', 'Pendaftaran berhasil tersimpan');
    }







    public function lomba()
    {
        return view('layouts.landing.lomba');
    }
    public function programbulanan()
    {

        return view('layouts.landing.programbulanan');
    }

    public function visidanmisi()
    {

        return view('layouts.landing.visidanmisi');
    }

    public function profilguru()
    {

        return view('layouts.landing.profilguru');
    }
}
