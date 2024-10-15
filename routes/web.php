<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KaryawanController;

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

Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::get('/registrasi', [LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function(){
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/karyawan', [KaryawanController::class,'index']);
    Route::get('/karyawan/create', [KaryawanController::class, 'create']);
    Route::post('/karyawan/store', [KaryawanController::class, 'store']);
    Route::get('/karyawan/{id}/edit',[KaryawanController::class, 'edit']);
    Route::put('/karyawan/{id}', [KaryawanController::class, 'update']);
    Route::delete('/karyawan/{nip}', [KaryawanController::class, 'destroy']);
    
    Route::get('/detail', [KaryawanController::class, 'index_detail']);
    
    Route::get('/golongan', [GolonganController::class, 'index']);
    Route::get('/golongan/create', [GolonganController::class, 'create']);
    Route::post('/golongan/store', [GolonganController::class, 'store']);
    Route::get('/golongan/{id}/edit',[GolonganController::class, 'edit']);
    Route::put('/golongan/{id}', [GolonganController::class, 'update']);
    Route::delete('/golongan/{nip}', [GolonganController::class, 'destroy']);
});


