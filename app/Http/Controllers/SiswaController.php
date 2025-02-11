<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Student::all();
        return view('siswa.index', compact('siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }
    public function destroy($id){
        $siswas =Student::findOrFail($id);
        $siswas ->delete();
        return redirect()->route('siswa.index') ->with('success','Data berhasil di hapus');
    }
}
