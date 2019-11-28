<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use App\Pendaftar;
use Auth;


class MahasiswaController extends Controller
{
    public function view_dashboard()
    {
    	return view('mahasiswa.dashboard.dashboard');
    }

    public function view_show_ukm()
    {
        
        $data=Ukm::all();
    	return view('mahasiswa.ukm.ukm-show',compact('data'));
    }

    public function view_show_pendafatran()
    {
        $data=Pendaftar::where('id_mahasiswa',Auth::guard('mahasiswa')->user()->id)->get();
    	return view('mahasiswa.pendaftaran.pendaftaran-show',compact('data'));
    }
}
