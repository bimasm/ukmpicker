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

Route::get('/login', 'AdminController@view_login')
->name('ViewLogin');

//////////////////////////////////////////////////////////////////////////// admin show
Route::get('/admin/dashboard', 'AdminController@view_dashboard')
->name('ViewAdminDashboard');

Route::get('/admin/jurusan', 'AdminController@view_show_jurusan')
->name('ViewAdminShowJurusan');

Route::get('/admin/ukm', 'AdminController@view_show_ukm')
->name('ViewAdminShowUkm');

Route::get('/admin/pengurus', 'AdminController@view_show_pengurus')
->name('ViewAdminShowPengurus');

Route::get('/admin/mahasiswa', 'AdminController@view_show_mahasiswa')
->name('ViewAdminShowMahasiswa');

//////////////////////////////////////////////////////////////////////////// admin tambah
Route::get('/admin/mahasiswa/tambah', 'AdminController@view_tambah_mahasiswa')
->name('ViewAdminTambahMahasiswa');

Route::get('/admin/jurusan/tambah', 'AdminController@view_tambah_jurusan')
->name('ViewAdminTambahJurusan');

Route::get('/admin/ukm/tambah', 'AdminController@view_tambah_ukm')
->name('ViewAdminTambahUkm');

Route::get('/admin/pengurus/tambah', 'AdminController@view_tambah_pengurus')
->name('ViewAdminTambahPengurus');

