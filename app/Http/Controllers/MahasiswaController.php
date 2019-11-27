<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view_dashboard()
    {
    	return view('mahasiswa.dashboard.dashboard');
    }
}
