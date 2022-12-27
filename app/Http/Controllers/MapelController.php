<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Jurusan;
use App\Models\Kelas;


class MapelController extends Controller
{
     public function mapel(){
        $data = Mapel::with('idkelass','idjurusan')->get();
        return view('mapel.mapel',compact('data'));
    }
    public function tambahmapel(){
        $jurusan = Jurusan::all();
        $kelas = kelas::all();
        return view('mapel.tambahmapel',compact('jurusan','kelas'));
    }
    public function tambahmapelpost(request $request){
           $this->validate($request,[
            'jurusan' => 'required',
            'kelas' => 'required',
            'mapel' => 'required',
        ]);
        $data = Mapel::create([
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
        ]);
        return Redirect()->route('mapel')->with('success','Data Berhasil Ditambahkan');
    }

      public function editmapel($id){
         $kelas = Kelas::all();
         $jurusan = Jurusan::all();
        $data = Mapel::findOrFail($id);
        // dd($data);
        return view('mapel.editmapel',compact('kelas','data','jurusan'));
    }

     public function editmapelpost(request $request,$id){
        $data = Mapel::find($id);
           $this->validate($request,[
            'jurusan' => 'required',
            'kelas' => 'required',
            'mapel' => 'required'
        ]);
        $data->update([
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
        ]);
        return Redirect()->route('mapel')->with('success','Data Berhasil Diupdate');
    }
}
