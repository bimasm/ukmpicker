<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use App\Jurusan;
use App\Pengurus;
use App\Mahasiswa;

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
        $data=Jurusan::all();
    	return view('admin.jurusan.jurusan-show',compact('data'));
    }

    public function view_show_ukm()
    {
        $data=Ukm::all();
    	return view('admin.ukm.ukm-show',compact('data'));
    }

    public function view_show_pengurus()
    {
        $data=Pengurus::all();
        return view('admin.pengurus.pengurus-show',compact('data'));
    }

    public function view_show_mahasiswa()
    {
        $data=Mahasiswa::all();
        return view('admin.mahasiswa.mahasiswa-show',compact('data'));
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
        $jurusan=Jurusan::all();
        return view('admin.mahasiswa.mahasiswa-tambah',compact('jurusan'));
    }

}
