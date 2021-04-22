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

//route untuk user
Route::get('/listuser', 'DaftarpenggunasController@index'); 
Route::get('/listuser/{daftarpengguna}', 'DaftarpenggunasController@show'); //{daftarpengguna} diambil dari model

//route untuk sekolah
Route::get('/sekolah/sekolahmodel', 'SekolahmodelController@index');
Route::get('/sekolah/sekolahmodel/{sekolahmodel}', 'SekolahmodelController@show');

Route::get('/sekolah/sekolahemodel', 'SekolahemodelController@index');
Route::get('/sekolah/sekolahemodel/{sekolahemodel}', 'SekolahemodelController@show');

Route::get('/sekolah/sekolahjejaring', 'SekolahjejaringController@index');
Route::get('/sekolah/sekolahjejaring/{sekolahjejaring}', 'SekolahjejaringController@show');

Route::get('/sekolah/sekolahindonesia', 'Pagescontroller@sekolahindonesia');

//route untuk modul
Route::post('/modul/createmodul', 'BuatmodulsController@store');
Route::get('/modul/createmodul', 'BuatmodulsController@index');

Route::get('/modul/modulspesial', 'ModulspesialsController@index');
Route::get('/modul/modulbasic', 'ModulbasicsController@index');
Route::get('/modul/moduladvanced', 'ModuladvancedsController@index');


//route untuk raport
Route::get('/raport/createraport', 'PagesController@createraport');
Route::get('/raport/raportuser', 'PagesController@raportuser');
Route::get('/raport/raportsekolah', 'PagesController@raportsekolah');

//route untuk kupon
Route::get('/kupon/createkupon', 'PagesController@createkupon');
Route::get('/kupon/listkupon', 'PagesController@listkupon');



//route untuk request
Route::get('/request/permintaanmentor', 'PagesController@permintaanmentor');
Route::get('/request/permintaansekolah', 'PagesController@permintaansekolah');

