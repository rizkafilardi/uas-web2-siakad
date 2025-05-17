<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        return Mahasiswa::all();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'email' => 'required|email|unique:mahasiswas',
            'jurusan' => 'required'
        ]);
        return Mahasiswa::create($data);
    }

    public function show($id) {
        return Mahasiswa::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return $mahasiswa;
    }

    public function destroy($id) {
        Mahasiswa::destroy($id);
        return response()->json(['message' => 'Mahasiswa dihapus']);
    }
}