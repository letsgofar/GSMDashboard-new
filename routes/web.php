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
    return view('welcome');
});

Route::get('/modul/createmodul', function () {
    return view('modul/createmodul');
});
Route::get('/raport/createraport', function () {
    return view('raport/createraport');
});
Route::get('/kupon/createkupon', function () {
    return view('kupon/createkupon');
});
Route::get('/listuser', function () {
    return view('listuser');
});
Route::get('/sekolah/sekolahmodel', function () {
    return view('sekolah/sekolahmodel');
});
Route::get('/sekolah/sekolahemodel', function () {
    return view('sekolah/sekolahemodel');
});
Route::get('/sekolah/sekolahjejaring', function () {
    return view('sekolah/sekolahjejaring');
});
Route::get('/sekolah/sekolahindonesia', function () {
    return view('sekolah/sekolahindonesia');
});
Route::get('/modul/modulspesial', function () {
    return view('modul/modulspesial');
});
Route::get('/modul/modulbasic', function () {
    return view('modul/modulbasic');
});
Route::get('/modul/moduladvanced', function () {
    return view('modul/moduladvanced');
});
Route::get('/raport/raportuser', function () {
    return view('raport/raportuser');
});
Route::get('/raport/raportsekolah', function () {
    return view('raport/raportsekolah');
});
Route::get('/request/permintaanmentor', function () {
    return view('request/permintaanmentor');
});
Route::get('/request/permintaansekolah', function () {
    return view('request/permintaansekolah');
});
Route::get('/kupon/listkupon', function () {
    return view('kupon/listkupon');
});