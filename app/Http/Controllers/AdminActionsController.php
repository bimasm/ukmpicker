<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Jurusan;
use App\Ukm;
use App\Pengurus;

class AdminActionsController extends Controller
{
    public function tambahjurusan(Request $request)
    {
    	$jrs= new Jurusan();
    	$jrs->nama=$request->namajurusan;
    	$jrs->save();
        return redirect()->route('ViewAdminTambahJurusan');
    }
    public function tambahukm(Request $request)
    {
    	$ukm=new Ukm();
    	$ukm->nama=$request->namaukm;
    	$file=$request->file('logoukm');
        if (!$file) {
            return redirect()->route('ViewAdminTambahUkm')->with('alert','foto harus diisi!');
        }
        $file_name=$file->getClientOriginalName();
        $path=public_path('/img');
        $file->move($path,$file_name);
        $ukm->logoukm='img/'.$file_name;
        $ukm->deskripsi=$request->deskripsi;
        $ukm->save();
        return redirect()->route('ViewAdminTambahUkm');
    }
    public function tambahpengurus(Request $request)
    {
        $prs= new Pengurus();
    	$prs->nama=$request->nama;
    	$prs->username=$request->username;
    	$prs->password=Hash::make($request->password);
    	$prs->id_ukm=$request->ukm;
    	$prs->save();
        return redirect()->route('ViewAdminTambahPengurus');
    }
}
