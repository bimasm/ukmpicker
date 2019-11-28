<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view_dashboard()
    {
    	return view('mahasiswa.dashboard.dashboard');
    }

    public function view_show_ukm()
    {
    	return view('mahasiswa.ukm.ukm-show');
    }

    public function view_show_pendafatran()
    {
    	return view('mahasiswa.pendaftaran.pendaftaran-show');
    }
}
