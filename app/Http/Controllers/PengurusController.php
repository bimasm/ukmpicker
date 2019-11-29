<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ukm;
use App\Proker;
use App\Fotoukm;
use App\Pendaftar;

class PengurusController extends Controller
{
    public function view_dashboard()
    {
    	return view('pengurus.dashboard.dashboard');
    }

    public function view_show_ukm()
    {
        $data=Ukm::where('id',Auth::guard('pengurus')->user()->id_ukm)->get();
        $proker=Proker::where('id_ukm',Auth::guard('pengurus')->user()->id_ukm)->get();
        $foto=Fotoukm::where('id_ukm',Auth::guard('pengurus')->user()->id_ukm)->get();
    	return view('pengurus.ukm.ukm-show',compact('data','proker','foto'));
    }

    public function view_show_pendaftar()
    {
        $data=Pendaftar::where('id_ukm',Auth::guard('pengurus')->user()->id_ukm)->get();
    	return view('pengurus.pendaftar.pendaftar-show',compact('data'));
    }

    public function view_show_edit_profile()
    {
        return view('pengurus.profile.edit-profile-show');
    }
}
