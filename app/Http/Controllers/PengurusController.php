<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function view_dashboard()
    {
    	return view('pengurus.dashboard.dashboard');
    }

    public function view_show_ukm()
    {
    	return view('pengurus.ukm.ukm-show');
    }

    public function view_show_mahasiswa()
    {
    	return view('pengurus.mahasiswa.mahasiswa-show');
    }

    public function view_show_edit_profile()
    {
        return view('pengurus.profile.edit-profile-show');
    }
}
