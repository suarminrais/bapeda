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
    return redirect()->route('login');
});

Route::get('/pelayanan', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/pelayanan', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('pelayanan')->middleware('role:administrator')->group(function(){
	Route::get('/databaru', 'HomeController@getDataBaru')->name('databaru');
	Route::post('/databaru', 'HomeController@postDataBaru')->name('postdatabaru');
	Route::get('/databaru/arsip', 'HomeController@getArsipData')->name('arsipdata');
	Route::get('/pecah', 'HomeController@getPecahBaru')->name('pecahbaru');
	Route::post('/pecah', 'HomeController@postPecahBaru')->name('pecah.post');
	Route::get('/pecah/arsip', 'HomeController@getPecahArsip')->name('pecaharsip');
	Route::get('/gabung', 'HomeController@getGabungBaru')->name('gabungbaru');
	Route::post('/gabung', 'HomeController@postGabungBaru')->name('gabung.post');
	Route::get('/gabung/arsip', 'HomeController@getGabungArsip')->name('gabungarsip');
	Route::get('/baliknama', 'HomeController@getBalikNama')->name('baliknama');
	Route::post('/baliknama', 'HomeController@postBalikNama')->name('postbaliknama');
	Route::get('/baliknama/arsip', 'HomeController@getBalikNamaArsip')->name('balikarsip');
	Route::get('/pembetulan', 'HomeController@getPembetulan')->name('pembetulan');
	Route::post('/pembetulan', 'HomeController@postPembetulan')->name('postpembetulan');
	Route::get('/pembetulan/arsip', 'HomeController@getPembetulanArsip')->name('pembetulanarsip');
});

Route::prefix('super')->middleware('role:superadministrator')->group(function(){
	Route::get('/', 'SuperController@index')->name('super.index');
	Route::get('pecah/', 'SuperController@pecah')->name('pecah');
	Route::get('gabung/', 'SuperController@gabung')->name('super.gabung');
	Route::get('baliknama/', 'SuperController@balik')->name('super.balik');
	Route::get('pembetulan/', 'SuperController@betul')->name('super.betul');
	Route::get('/{id}', 'SuperController@detail')->name('super.detail');
	Route::get('pecah/{id}', 'SuperController@pecahdetail')->name('pecah.detail');
	Route::get('gabung/{id}', 'SuperController@gabungdetail')->name('gabung.detail');
	Route::get('baliknama/{id}', 'SuperController@balikdetail')->name('balik.detail');
	Route::get('pembetulan/{id}', 'SuperController@betuldetail')->name('betul.detail');
});

Route::prefix('scan')->middleware('role:user')->group(function(){
	Route::get('databaru/', 'ScanController@databaru')->name('scandb');	
	Route::get('databaru/{id}', 'ScanController@getScandb')->name('scan');
	Route::post('databaru/{id}', 'ScanController@postScandb')->name('scanUpload');
	Route::get('pecah/', 'ScanController@pecah')->name('scanpecah');
	Route::get('pecah/{id}', 'ScanController@getScanpecah')->name('scanpch');
	Route::post('pecah/{id}', 'ScanController@postScanpecah')->name('scanUploadpch');
	Route::get('gabung/', 'ScanController@gabung')->name('scangb');
	Route::get('gabung/{id}', 'ScanController@getScangb')->name('scangbs');
	Route::post('gabung/{id}', 'ScanController@postScangb')->name('scanUploadgb');
	Route::get('balik/', 'ScanController@balik')->name('balik');
	Route::get('balik/{id}', 'ScanController@getScanbl')->name('scanbl');
	Route::post('balik/{id}', 'ScanController@postScanbl')->name('scanUploadbl');
	Route::get('pembetulan/', 'ScanController@betul')->name('betul');
	Route::get('pembetulan/{id}', 'ScanController@getScanbtl')->name('scanbtl');
	Route::post('pembetulan/{id}', 'ScanController@postScanbtl')->name('scanUploadbtl');
});