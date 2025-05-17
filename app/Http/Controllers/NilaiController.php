<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return Nilai::with(['mahasiswa', 'mataKuliah'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai' => 'required|numeric|min:0|max:100'
        ]);

        return Nilai::create($data);
    }

    public function show($id)
    {
        return Nilai::with(['mahasiswa', 'mataKuliah'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return $nilai;
    }

    public function destroy($id)
    {
        Nilai::destroy($id);
        return response()->json(['message' => 'Nilai dihapus']);
    }
}