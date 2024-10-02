<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchoolYearsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/user',[UserController::class, 'index'])->middleware('auth');
Route::get('/user/create',[UserController::class, 'create'])->middleware('auth');
Route::get('/user/edit/{id}',[UserController::class, 'edit'])->middleware('auth');
Route::post('/user/store',[UserController::class, 'store'])->middleware('auth');
Route::post('/user/update/{id}',[UserController::class, 'update'])->middleware('auth');
Route::get('/user/delete/{id}',[UserController::class, 'destroy'])->middleware('auth');

Route::get('/schoolyears',[SchoolYearsController::class, 'index'])->middleware('auth');
Route::get('/schoolyears/create',[SchoolYearsController::class, 'create'])->middleware('auth');
Route::get('/schoolyears/edit/{id}',[SchoolYearsController::class, 'edit'])->middleware('auth');
Route::post('/schoolyears/store', [SchoolYearsController::class, 'store'])->middleware('auth');

Route::post('/schoolyears/update/{id}',[SchoolYearsController::class, 'update'])->middleware('auth');
Route::get('/schoolyears/delete/{id}',[SchoolYearsController::class, 'destroy'])->middleware('auth');
Route::get('/schoolyears/predict', [SchoolYearsController::class, 'predict'])->middleware('auth');


Route::get('/registration',[RegistrationController::class, 'index'])->middleware('auth');
Route::get('/registration/create',[RegistrationController::class, 'create'])->middleware('auth');
Route::get('/registration/edit/{id}',[RegistrationController::class, 'edit'])->middleware('auth');
Route::post('/registration/store',[RegistrationController::class, 'store']);
Route::post('/registration/siswa/store',[RegistrationController::class, 'storesiswa'])->middleware('auth');
Route::post('/registration/update/{id}',[RegistrationController::class, 'update'])->middleware('auth');
Route::get('/registration/delete/{id}',[RegistrationController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/auth', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/',[LandingController::class, 'index']);
Route::get('/tentang',[LandingController::class, 'about']);
Route::get('/daftar',[LandingController::class, 'daftar']);
Route::post('/daftar/store',[LandingController::class, 'store']);
Route::get('/kategoriberita',[LandingController::class, 'newscategory']);
Route::get('/organisasi',[LandingController::class, 'organization']);

Route::get('/lomba',[LandingController::class, 'lomba']);
Route::get('/programbulanan',[LandingController::class, 'programbulanan']);
Route::get('/beranda',[LandingController::class, 'home']);
Route::get('/visidanmisi',[LandingController::class, 'visidanmisi']);
Route::get('/profilguru',[LandingController::class, 'profilguru']);
