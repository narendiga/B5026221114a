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

Route::get('halo', function () {
    return "Halo! Selamat datang di tutorial lavarel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1> Haloo! Apa kabar? </h1>";
});

Route::get('blog', function () {
	return view('blog');
});


Route::get('/', function () {
    return view('ETS/5026221114_ets');
});

Route::get('tugas1', function () {
	return view('ETS/5026221114_1');
});

Route::get('layout', function () {
	return view('ETS/5026221114_layout');
});

Route::get('hello', function () {
	return view('ETS/hello');
});

Route::get('js1', function () {
	return view('ETS/js1');
});

Route::get('js2', function () {
	return view('ETS/js2');
});

Route::get('link', function () {
	return view('ETS/link');
});

Route::get('responsive', function () {
	return view('ETS/responsive');
});

Route::get('style', function () {
	return view('ETS/style');
});

Route::get('validasi', function () {
	return view('ETS/validasi');
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// tabel pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// tabel keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexd4');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');

// tabel nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@nilai');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');
Route::get('/nilaikuliah/nilaitambah','App\Http\Controllers\NilaiController@nilaitambah');

// tabel tumbuhan
Route::get('/tumbuhan','App\Http\Controllers\TumbuhanController@indext');
Route::get('/tumbuhan/create','App\Http\Controllers\TumbuhanController@create');
Route::post('/tumbuhan/store','App\Http\Controllers\TumbuhanController@store');
Route::get('/tumbuhan/editt/{kodetumbuhan}','App\Http\Controllers\TumbuhanController@editt');
Route::post('/tumbuhan/update','App\Http\Controllers\TumbuhanController@update');
Route::get('/tumbuhan/delete/{kodetumbuhan}','App\Http\Controllers\TumbuhanController@delete');
Route::get('/tumbuhan/cari','App\Http\Controllers\TumbuhanController@cari');
Route::get('/tumbuhan/viewt/{kodetumbuhan}','App\Http\Controllers\TumbuhanController@viewt');

// tabel counter
Route::get('/counter','App\Http\Controllers\CounterController@indexx1');

// tabel karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@indexdd');
Route::get('/karyawan/tambahk','App\Http\Controllers\KaryawanController@tambahk');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::post('/karyawan/update','App\Http\Controllers\KaryawanController@update');
Route::get('/karyawan/hapus/{kodepegawai}','App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan/gagal','App\Http\Controllers\KaryawanController@gagal');
