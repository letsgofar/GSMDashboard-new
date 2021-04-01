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

Route::get('/', 'PagesController@home');
Route::get('/modul/createmodul', 'PagesController@createmodul');
Route::get('/modul/modulspesial', 'PagesController@modulspesial');
Route::get('/modul/modulbasic', 'PagesController@modulbasic');
Route::get('/modul/moduladvanced', 'PagesController@moduladvanced');
Route::get('/raport/createraport', 'PagesController@createraport');
Route::get('/raport/raportuser', 'PagesController@raportuser');
Route::get('/raport/raportsekolah', 'PagesController@raportsekolah');
Route::get('/kupon/createkupon', 'PagesController@createkupon');
Route::get('/kupon/listkupon', 'PagesController@listkupon');
Route::get('/sekolah/sekolahmodel', 'PagesController@sekolahmodel');
Route::get('/sekolah/sekolahemodel', 'PagesController@sekolahemodel');
Route::get('/sekolah/sekolahjejaring', 'PagesController@sekolahjejaring');
Route::get('/sekolah/sekolahindonesia', 'PagesController@sekolahindonesia');
Route::get('/request/permintaanmentor', 'PagesController@permintaanmentor');
Route::get('/request/permintaansekolah', 'PagesController@permintaansekolah');
Route::get('/listuser', 'PagesController@listuser');
