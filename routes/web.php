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

Route::get('/createmodul', function () {
    return view('createmodul');
});
Route::get('/createraport', function () {
    return view('createraport');
});
Route::get('/createkupon', function () {
    return view('createkupon');
});
Route::get('/listuser', function () {
    return view('listuser');
});
Route::get('/sekolahmodel', function () {
    return view('sekolahmodel');
});
Route::get('/sekolahemodel', function () {
    return view('sekolahemodel');
});
Route::get('/sekolahjejaring', function () {
    return view('sekolahjejaring');
});
Route::get('/sekolahindonesia', function () {
    return view('sekolahindonesia');
});
Route::get('/modulspesial', function () {
    return view('modulspesial');
});
Route::get('/modulbasic', function () {
    return view('modulbasic');
});
Route::get('/moduladvanced', function () {
    return view('moduladvanced');
});
Route::get('/raportuser', function () {
    return view('raportuser');
});
Route::get('/raportsekolah', function () {
    return view('raportsekolah');
});
Route::get('/permintaanmentor', function () {
    return view('permintaanmentor');
});
Route::get('/permintaansekolah', function () {
    return view('permintaansekolah');
});
Route::get('/listkupon', function () {
    return view('listkupon');
});