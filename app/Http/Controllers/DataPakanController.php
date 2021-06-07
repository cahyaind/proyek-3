<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPakan;

class DataPakanController extends Controller
{

    public function index()
    {
        $data_pakan = \App\Models\DataPakan::all();
        return view('DataPakan.index', ['data_pakan' => $data_pakan]);
    }

    public function create(Request $request)
    {
        
		$nm = $request->gambar;
		$namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();
			$dtUpload = new DataPakan;
			$dtUpload-> namapakan = $request->namapakan;
			$dtUpload-> stok = $request->stok;
			$dtUpload-> berat = $request->berat;
			$dtUpload-> expired = $request->expired;
			$dtUpload-> biaya = $request->biaya;
			$dtUpload->gambar = $namafile;
			
			$nm->move(public_path().'/img', $namafile);
			$dtUpload->save();
			
        return redirect ('/data_pakan')->with('pesan', 'Data berhasil disimpan..');
    }

    public function edit($id)
    {
        $data_pakan = \App\Models\DataPakan::find($id);
        return view ('DataPakan.edit', ['data_pakan' => $data_pakan]);
    }

    public function update(Request $request, $id)
    {
        $data_pakan = \App\Models\DataPakan::find($id);
        $awal = $data_pakan->gambar;
		$dt = [
			'gambar' => $awal,
			'namapakan' => $request['namapakan'],
			'stok' => $request['stok'],
			'berat' => $request['berat'],
			'expired' => $request['expired'],
			'biaya' => $request['biaya'],
		];
		
		$request->gambar->move(public_path().'/img', $awal);
		$data_pakan->update($dt);
        return redirect('/data_pakan')->with('pesan','Data berhasil diupdate..');
    }

    public function hapus($id)
    {
        $data_pakan = \App\Models\DataPakan::find($id);
        $data_pakan->delete();
        return redirect('/data_pakan')->with('pesan','Data berhasil dihapus..');
    }

}
