<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "404 Not Found";
});

Route::get('/index','App\Http\Controllers\MahasiswaController@index');

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@tampil');

Route::get('/tambah', 'App\Http\Controllers\MahasiswaController@tambah');

Route::post('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@simpan');

Route::get('/hapus/{nim}','App\Http\Controllers\MahasiswaController@hapus');

Route::get('/mahasiswa/ubah/{nim}','App\Http\Controllers\MahasiswaController@ubah');

Route::post('/mahasiswa/edit','App\Http\Controllers\MahasiswaController@edit');

Route::get('/mahasiswa/cetak_pdf','App\Http\Controllers\MahasiswaController@cetak_pdf');

Route::get('/mahasiswa/export_excel','App\Http\Controllers\MahasiswaController@export_excel');

Route::get('/session','App\Http\Controllers\SessionController@tampilkanSession');

Route::get('/session/buat','App\Http\Controllers\SessionController@buatSession');

Route::get('/session/hapus','App\Http\Controllers\SessionController@hapusSession');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
