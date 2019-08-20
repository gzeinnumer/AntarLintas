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


Route::resource('/home', 'HomeController');
Route::resource('/bus', 'BusController');


Route::post('/getTiketBus','BusController@getTiket')->name('bus.getTiket');

Route::get('/pesanTiket/{id}','BusController@pesanTiket')->name('bus.pesanTiket');

Route::post('/prosesTiketBus','BusController@prosesTiket')->name('bus.prosesTiket');




//login
Route::get('loginPelanggan','Auth\LoginController@loginPelanggan')->name('login.pelanggan');
Route::post('authPelanggan','Auth\LoginController@authPelanggan')->name('auth.pelanggan');
Route::get('indexPelanggan','Auth\LoginController@indexPelanggan')->name('index.pelanggan');

Route::get('registerPelanggan','Auth\RegisterController@registerPelanggan')->name('register.pelanggan');
Route::post('storePelanggan','Auth\RegisterController@storeDataPelanggan')->name('storedata.pelanggan');

Route::get('logoutPelanggan',function(){
	session()->flush();
	return redirect('loginPelanggan');
})->name('log.logout');

//end login