<?php

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
    return view('welcome');
});

Route::get('/test/{angka}', function ($angka) {
    return view('test', ["angka" => $angka]);
});

Route::get('/halo/{nama}', function ($nama) {
    return "halo $nama";
});

Route::get('/form', 'RegisterCOntroller@form');

Route::get('/sapa', 'RegisterCOntroller@sapa');
Route::post('/sapa', 'RegisterCOntroller@sapa_post');