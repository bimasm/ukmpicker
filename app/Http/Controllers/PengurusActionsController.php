<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use App\Proker;
use App\Fotoukm;
use App\Pendaftar;

class PengurusActionsController extends Controller
{
    public function editukm(Request $request)
    {
        $data=Ukm::find($request->idukm);
        $data->deskripsi=$request->deskripsi;
        if ($request->logoukm==null) {
        	
        } else {
        	$file=$request->file('logoukm');
        
        	$file_name=$file->getClientOriginalName();
        	$path=public_path('/img');
        	$file->move($path,$file_name);
        	$data->logoukm='img/'.$file_name;
        }
        $data->save();
        return redirect()->route('ViewPengurusShowUkm');
        
    }
    public function addproker(Request $request)
    {
    	$data=new Proker();
    	$data->id_ukm=$request->idukm;
    	$data->proker=$request->proker;
    	$data->save();
        return redirect()->route('ViewPengurusShowUkm');
    }
    public function addfoto(Request $request)
    {
    	$fotoukm=new Fotoukm();
    	$fotoukm->id_ukm=$request->idukm;
    	$file=$request->file('foto');
        
        	$file_name=$file->getClientOriginalName();
        	$path=public_path('/img');
        	$file->move($path,$file_name);
        	$fotoukm->foto='img/'.$file_name;
        $fotoukm->save();
        return redirect()->route('ViewPengurusShowUkm');
    }
    public function deleteproker($id)
    {
    	$data=Proker::find($id);
    	$data->delete();
        return redirect()->route('ViewPengurusShowUkm');
    }
    public function deletefoto($id)
    {
    	$data=Fotoukm::find($id);
    	$data->delete();
        return redirect()->route('ViewPengurusShowUkm');
    }
    public function terima($id)
    {
        $data=Pendaftar::find($id);
        $data->status='diterima';
        $data->save();
        return redirect()->route('ViewPengurusShowPendaftar');
    }
}
