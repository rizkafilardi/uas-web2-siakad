<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        return MataKuliah::with('dosen')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'dosen_id' => 'required|exists:dosens,id'
        ]);

        return MataKuliah::create($data);
    }

    public function show($id)
    {
        return MataKuliah::with('dosen')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->update($request->all());
        return $mk;
    }

    public function destroy($id)
    {
        MataKuliah::destroy($id);
        return response()->json(['message' => 'Mata kuliah dihapus']);
    }
}