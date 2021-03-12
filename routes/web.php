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