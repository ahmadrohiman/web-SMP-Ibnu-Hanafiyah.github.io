<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    protected $module;

    public function __construct()
    {
        $this->module               = "Dashboard";
    }

    public function index()
    {
        return view('layouts.admin.pages.dashboard.index');
    }
}
