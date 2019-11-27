<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;

class AdminController extends Controller
{
    ///////////////////////////////////////////////////////////// login
    public function view_login()
    {
        return view('login-admin-pengurus');
    }

    ///////////////////////////////////////////////////////////// show data
    public function view_dashboard()
    {
    	return view('admin.dashboard.dashboard');
    }

    public function view_show_jurusan()
    {
    	return view('admin.jurusan.jurusan-show');
    }

    public function view_show_ukm()
    {
    	return view('admin.ukm.ukm-show');
    }

    public function view_show_pengurus()
    {
        return view('admin.pengurus.pengurus-show');
    }

    public function view_show_mahasiswa()
    {
        return view('admin.mahasiswa.mahasiswa-show');
    }


    ///////////////////////////////////////////////////////////// tambah data
    public function view_tambah_jurusan()
    {
        return view('admin.jurusan.jurusan-tambah');
    }

    public function view_tambah_ukm()
    {
        return view('admin.ukm.ukm-tambah');
    }

    public function view_tambah_pengurus()
    {
        $ukm=Ukm::all();
        return view('admin.pengurus.pengurus-tambah',compact('ukm'));
    }

    public function view_tambah_mahasiswa()
    {
        return view('admin.mahasiswa.mahasiswa-tambah');
    }

}
