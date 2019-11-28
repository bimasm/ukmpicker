<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Jurusan;
use App\Ukm;
use App\Pengurus;
use App\Mahasiswa;

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
    public function tambahmhs(Request $request)
    {
        $prs= new Mahasiswa();
    	$prs->nama=$request->nama;
    	$prs->nim=$request->nim;
    	$prs->password=Hash::make($request->password);
    	$prs->id_jurusan=$request->jurusan;
    	$prs->save();
        return redirect()->route('ViewAdminTambahMahasiswa');
    }
    public function editjurusan(Request $request)
    {
    	$jrs=Jurusan::find($request->id);
    	$jrs->nama=$request->namajurusan;
    	$jrs->save();
        return redirect()->route('ViewAdminShowJurusan');
    }
    public function editukm(Request $request)
    {
    	$jrs=Ukm::find($request->id);
    	$jrs->nama=$request->namaukm;
    	$jrs->deskripsi=$request->deskripsiukm;
    	$jrs->save();
        return redirect()->route('ViewAdminShowUkm');
    }
    public function editpengurus(Request $request)
    {
    	$jrs=Pengurus::find($request->id);
    	$jrs->nama=$request->nama;
    	$jrs->username=$request->username;
    	$jrs->password=Hash::make($request->password);
    	$jrs->save();
        return redirect()->route('ViewAdminShowPengurus');
    }
    public function editmahasiswa(Request $request)
    {
    	$jrs=Mahasiswa::find($request->id);
    	$jrs->nama=$request->nama;
    	$jrs->password=Hash::make($request->password);
    	$jrs->save();
        return redirect()->route('ViewAdminShowMahasiswa');
    }
    public function deletemahasiswa($id)
    {
        $data=Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('ViewAdminShowMahasiswa');
    }
    public function deletepengurus($id)
    {
        $data=Pengurus::find($id);
        $data->delete();
        return redirect()->route('ViewAdminShowPengurus');
    }
    public function deleteukm($id)
    {
        $data=Ukm::find($id);
        $data->delete();
        return redirect()->route('ViewAdminShowUkm');
    }
    public function deletejurusan($id)
    {
        $data=Jurusan::find($id);
        $data->delete();
        return redirect()->route('ViewAdminShowJurusan');
    }
}
