<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        return Jadwal::with('mataKuliah')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'hari' => 'required',
            'jam' => 'required',
            'ruang' => 'required'
        ]);

        return Jadwal::create($data);
    }

    public function show($id)
    {
        return Jadwal::with('mataKuliah')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return $jadwal;
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return response()->json(['message' => 'Jadwal dihapus']);
    }
}