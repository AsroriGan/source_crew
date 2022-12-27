<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Kelas;

class JurusanController extends Controller
{
    public function jurusan(){
        $data = Jurusan::with('idkelas')->get();
        return view('jurusan.jurusan',compact('data'));
    }

    public function tambahjurusan(){
         $idkelas = Kelas::all();
        $data = Jurusan::all();
        return view('jurusan.tambahjurusan',compact('idkelas','data'));
    }

    public function tambahjurusanpost(request $request){
           $this->validate($request,[
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);
        $data = Jurusan::create([
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
        ]);
        return Redirect()->route('jurusan')->with('success','Data Berhasil Ditambahkan');
    }

    public function editjurusan($id){
         $idkelas = Kelas::all();
        $data = Jurusan::findOrFail($id);
        return view('jurusan.editjurusan',compact('idkelas','data'));
    }

     public function editjurusanpost(request $request,$id){
        $data = Jurusan::find($id);
           $this->validate($request,[
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);
        $data->update([
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
        ]);
        return Redirect()->route('jurusan')->with('success','Data Berhasil Diupdate');
    }
}
