<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;

class MahasiswaActionsController extends Controller
{
    public function daftar(Request $request)
    {
        $daftar=new Pendaftar();
        $daftar->id_ukm=$request->idukm;
        $daftar->id_mahasiswa=$request->idmhs;
        $daftar->status='pending';
        $daftar->save();
        return redirect()->route('ViewMahasiswaPendaftaran');

    }
}
