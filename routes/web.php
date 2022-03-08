<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login-pegawai', [PegawaiController::class, 'viewlogin']);
Route::post('/login-p', [PegawaiController::class, 'index']);
Route::get('/register-pegawai', [PegawaiController::class, 'viewregister']);
Route::post('/store-pegawai', [PegawaiController::class, 'store']);
Route::get('/absensi-masuk', [AbsensiController::class, 'absensimasuk']);
Route::get('/done-absensi', [AbsensiController::class, 'doneabsensi']);
// route pegawaiRoute::group(['middleware' => ['pegawai']],function(){ 
Route::get('/absensi-keluar', [AbsensiController::class, 'absensikeluar']);
Route::post('/store-masuk', [AbsensiController::class, 'storemasuk']);


// route admin
Route::group(['middleware' => ['admin']], function(){
    Route::get('/mng-admin', [CrudController::class, 'mngAdmin']);
    Route::get('/mng-pegawai', [CrudController::class, 'mngPegawai']);
    Route::get('/data-absensi', [CrudController::class, 'dataAbsensi']);
    Route::get('/edit-admin/{id}', [CrudController::class, 'edit']);
    Route::post('/update-admin/{id}', [CrudController::class, 'update']);
    Route::get('/hapus-admin/{id}', [CrudController::class, 'destroy']);
    Route::get('/edit-pegawai/{id}', [CrudController::class, 'editpegawai']);
    Route::post('/update-pegawai/{id}', [CrudController::class, 'updatepegawai']);
    Route::get('/hapus-pegawai/{id}', [CrudController::class, 'destroypegawai']);
    Route::get('/print-pdf', [CrudController::class, 'printpdf']);
});