<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
use App\Mahasiswa;
use Illuminate\Support\Facades\Hash;

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
    public function regis(Request $request)
    {
        $mhs=new Mahasiswa();
        $mhs->nama=$request->namamhs;
        $mhs->nim=$request->nimmhs;
        $mhs->password=Hash::make($request->password);
        $mhs->id_jurusan=$request->jurusan;
        $mhs->save();
        return redirect()->route('ViewLogin');
    }
}
