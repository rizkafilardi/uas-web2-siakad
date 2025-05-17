<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        return Dosen::all();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nidn' => 'required|unique:dosens',
            'nama' => 'required',
            'email' => 'required|email|unique:dosens',
            'prodi' => 'required'
        ]);
        return Dosen::create($data);
    }

    public function show($id) {
        return Dosen::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return $dosen;
    }

    public function destroy($id) {
        Dosen::destroy($id);
        return response()->json(['message' => 'Dosen dihapus']);
    }
}