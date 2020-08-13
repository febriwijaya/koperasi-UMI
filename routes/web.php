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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/jenis-pinjaman', 'JenisPinjaman\HomeController');

Route::resource('/nasabah', 'Nasabah\HomeController');

Route::resource('/jenis-simpanan', 'JenisSimpanan\HomeController');

Route::resource('/bagian', 'Bagian\HomeController');

Route::resource('/pinjaman', 'Pinjaman\HomeController');

Route::resource('/pinjaman-setoran', 'PinjamanSetoran\HomeController');

Route::resource('/simpanan', 'Simpanan\HomeController');


Route::get('/cetak-laporan', 'CetakLaporan\HomeController@cetak')->name('cetak-laporan');
Route::get('/cetak-simpanan', 'CetakLaporan\HomeController@cetaksimpanan')->name('cetak-simpanan');
Route::get('/cetak-bagian', 'CetakLaporan\HomeController@cetakBagian')->name('cetak-bagian');
Route::get('/cetak-nasabah', 'CetakLaporan\HomeController@cetakNasabah')->name('cetak-nasabah');
Route::get('/cetak-pinjaman', 'CetakLaporan\HomeController@cetakPinjaman')->name('cetak-pinjaman');
Route::get('/cetak-simpanan-laporan', 'CetakLaporan\HomeController@cetakSimpananLaporan')->name('cetak-simpanan-laporan');
Route::get('/cetak-pinjaman-setoran', 'CetakLaporan\HomeController@cetakPinjamanSetoran')->name('cetak-pinjaman-setoran');
