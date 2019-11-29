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
->name('ViewLogin')->middleware('guest');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');
Route::get('/signout', 'LoginController@signout');

Route::get('/registrasi', 'MahasiswaController@view_regis')
->name('ViewRegis')->middleware('guest');
Route::post('/regis', 'MahasiswaActionsController@regis')
->name('PostRegis');

//////////////////////////////////////////////////////////////////////////// admin show
Route::get('/admin/dashboard', 'AdminController@view_dashboard')
->name('ViewAdminDashboard')->middleware('auth:admin');

Route::get('/admin/jurusan', 'AdminController@view_show_jurusan')
->name('ViewAdminShowJurusan')->middleware('auth:admin');

Route::get('/admin/ukm', 'AdminController@view_show_ukm')
->name('ViewAdminShowUkm')->middleware('auth:admin');

Route::get('/admin/pengurus', 'AdminController@view_show_pengurus')
->name('ViewAdminShowPengurus')->middleware('auth:admin');

Route::get('/admin/mahasiswa', 'AdminController@view_show_mahasiswa')
->name('ViewAdminShowMahasiswa')->middleware('auth:admin');

//////////////////////////////////////////////////////////////////////////// admin tambah
Route::get('/admin/mahasiswa/tambah', 'AdminController@view_tambah_mahasiswa')
->name('ViewAdminTambahMahasiswa')->middleware('auth:admin');
Route::post('/admin/mahasiswa/tambah', 'AdminActionsController@tambahmhs')
->name('PostAdminTambahMahasiswa')->middleware('auth:admin');

Route::get('/admin/jurusan/tambah', 'AdminController@view_tambah_jurusan')
->name('ViewAdminTambahJurusan')->middleware('auth:admin');
Route::post('/admin/jurusan/tambah', 'AdminActionsController@tambahjurusan')
->name('PostAdminTambahJurusan')->middleware('auth:admin');

Route::get('/admin/ukm/tambah', 'AdminController@view_tambah_ukm')
->name('ViewAdminTambahUkm')->middleware('auth:admin');
Route::post('/admin/ukm/tambah', 'AdminActionsController@tambahukm')
->name('PostAdminTambahUkm')->middleware('auth:admin');

Route::get('/admin/pengurus/tambah', 'AdminController@view_tambah_pengurus')
->name('ViewAdminTambahPengurus')->middleware('auth:admin');
Route::post('/admin/pengurus/tambah', 'AdminActionsController@tambahpengurus')
->name('PostAdminTambahPengurus')->middleware('auth:admin');


///////////////////////////////////////////////////////////////////////////// edit admin
Route::post('/admin/jurusan/edit', 'AdminActionsController@editjurusan')
->name('PostAdminEditJurusan')->middleware('auth:admin');
Route::post('/admin/ukm/edit', 'AdminActionsController@editukm')
->name('PostAdminEditUkm')->middleware('auth:admin');
Route::post('/admin/pengurus/edit', 'AdminActionsController@editpengurus')
->name('PostAdminEditPengurus')->middleware('auth:admin');
Route::post('/admin/mahasiswa/edit', 'AdminActionsController@editmahasiswa')
->name('PostAdminEditMahasiswa')->middleware('auth:admin');
//delete admin
Route::get('/admin/deletemhs/{id}', 'AdminActionsController@deletemahasiswa')
->name('AdminDeleteMahasiswa')->middleware('auth:admin');
Route::get('/admin/deletepengurus/{id}', 'AdminActionsController@deletepengurus')
->name('AdminDeletePengurus')->middleware('auth:admin');
Route::get('/admin/deleteukm/{id}', 'AdminActionsController@deleteukm')
->name('AdminDeleteUkm')->middleware('auth:admin');
Route::get('/admin/deletejurusan/{id}', 'AdminActionsController@deletejurusan')
->name('AdminDeleteJurusan')->middleware('auth:admin');


///////////////////////////////////////////////////////////////////////////// Mahasiswa

Route::get('/mahasiswa/dashboard', 'MahasiswaController@view_dashboard')
->name('ViewMahasiswaDashboard')->middleware('auth:mahasiswa');

Route::get('/mahasiswa/ukm', 'MahasiswaController@view_show_ukm')
->name('ViewMahasiswaUkm')->middleware('auth:mahasiswa');

Route::get('/mahasiswa/pendaftaran', 'MahasiswaController@view_show_pendafatran')
->name('ViewMahasiswaPendaftaran')->middleware('auth:mahasiswa');
//mahasiswa input
Route::post('/mahasiswa/pilih', 'MahasiswaActionsController@daftar')
->name('PostMahasiswaPendaftaran')->middleware('auth:mahasiswa');

Route::get('/mahasiswa/ukm/{id}', 'MahasiswaController@view_detail_ukm')
->name('ViewMahasiswaDetailUkm')->middleware('auth:mahasiswa');

///////////////////////////////////////////////////////////////////////////// Pengurus
Route::get('/pengurus/dashboard', 'PengurusController@view_dashboard')
->name('ViewPengurusDashboard')->middleware('auth:pengurus');

Route::get('/pengurus/ukm', 'PengurusController@view_show_ukm')
->name('ViewPengurusShowUkm')->middleware('auth:pengurus');
Route::post('/pengurus/ukm', 'PengurusActionsController@editukm')
->name('PostPengurusEditUkm')->middleware('auth:pengurus');
Route::post('/pengurus/ukm/addproker', 'PengurusActionsController@addproker')
->name('PostPengurusAddProker')->middleware('auth:pengurus');
Route::post('/pengurus/ukm/addfoto', 'PengurusActionsController@addfoto')
->name('PostPengurusAddFoto')->middleware('auth:pengurus');
Route::get('/pengurus/ukm/delproker/{id}', 'PengurusActionsController@deleteproker')
->name('PengurusDelProker')->middleware('auth:pengurus');
Route::get('/pengurus/ukm/delfoto/{id}', 'PengurusActionsController@deletefoto')
->name('PengurusDelFoto')->middleware('auth:pengurus');
Route::get('/pengurus/pendaftar/{id}', 'PengurusActionsController@terima')
->name('terima')->middleware('auth:pengurus');
Route::get('/pengurus/pendaftar', 'PengurusController@view_show_pendaftar')
->name('ViewPengurusShowPendaftar')->middleware('auth:pengurus');

Route::get('/pengurus/edit-profile', 'PengurusController@view_show_edit_profile')
->name('ViewPengurusShowEditProfile')->middleware('auth:pengurus');



