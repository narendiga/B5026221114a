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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');


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
