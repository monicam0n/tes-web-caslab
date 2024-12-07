<?php

namespace App\Http\Controllers;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){
        $tugas = Tugas::all();
        return view('tugas.index', ['tugas'=>$tugas]);
    }

    public function create(){
        return view('tugas.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required'
        ]);

        $newTugas = Tugas::create($data);

        return redirect()->route('tugas.index')->with('success', "Data berhasil ditambahkan");

    }

    public function show(Tugas $tugas){
        return view('tugas.show',['tugas'=>$tugas]);
    }

    public function edit(Tugas $tugas, Request $request){
        return view('tugas.edit', ['tugas'=>$tugas]);
    }
    public function update(Tugas $tugas, Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'sub_judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required'
        ]);

        $tugas->update($data);

        return redirect()->route('tugas.show',['tugas'=>$tugas])->with('success', "Data berhasil Diperbarui");
    }
        public function delete(Tugas $tugas){
            $tugas->delete();
            return redirect()->route('tugas.index')->with('success', 'Data berhasil dihapus');
        }

}
