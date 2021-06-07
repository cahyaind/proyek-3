<?php

namespace App\Http\Controllers;

use App\models\DataAyam;
use Illuminate\Http\Request;

class DataAyamController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_ayam = \App\Models\DataAyam::where('ayam_hidup','LIKE','%'.$request->cari.'%')->get();
        } else {
            $data_ayam = \App\Models\DataAyam::all();
        }
        return view('DataAyam.index', ['data_ayam' => $data_ayam]);
    }

    public function create(Request $request)
    {
        \App\Models\DataAyam::create($request->all());
        return redirect ('/data_ayam')->with('pesan','Data berhasil disimpan..');
    }

    public function edit($id)
    {
        $data_ayam = \App\Models\DataAyam::find($id);
        return view ('DataAyam.edit', ['data_ayam' => $data_ayam]);
    }
    
    public function update(Request $request, $id)
    {
        $data_ayam = DataAyam::findorfail($id);
        $data_ayam->update($request->all());
        return redirect('data_ayam')->with('pesan','Data berhasil diupdate..');
    }

    public function hapus($id)
    {
        $data_ayam = \App\Models\DataAyam::find($id);
        $data_ayam->delete();
        return redirect('data_ayam')->with('pesan','Data berhasil dihapus..');
    }
}
