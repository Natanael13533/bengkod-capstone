<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\MahasiswaCreateRequest;
use App\Models\JwlMataKuliah;
use App\Models\JwlMhs;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['jadwalMhs'])->get();
        return view('index', compact('mahasiswa'));
    }

    public function store(MahasiswaCreateRequest $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->namaMhs = $request->namaMhs;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->ipk = $request->ipk;
        if ($request->ipk < 3) {
            $mahasiswa->sks = 20;
        }
        else {
            $mahasiswa->sks = 24;
        }

        $mahasiswa->save();

        return redirect()->route('mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jadwalMhs = JwlMhs::where('mhs_id', $id)->get();

        $jadwalMatakuliah = JwlMataKuliah::pluck('matakuliah', 'id');

        return view('Mata-Kuliah.jwl_matakuliah', compact('jadwalMhs', 'jadwalMatakuliah', 'mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'matakuliah' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $jadwalMatakuliah = JwlMataKuliah::find($request->matakuliah);

        // Check if jadwalMatakuliah exists
        if (!$jadwalMatakuliah) {
            return redirect()->back()->with('error', 'Mata kuliah tidak ditemukan');
        }

        // Check if course is already registered
        $existingCourse = JwlMhs::where('mhs_id', $mahasiswa->id)
            ->where('matakuliah', $jadwalMatakuliah->matakuliah)
            ->first();

        if ($existingCourse) {
            return redirect()->back()->with('error', 'Mata kuliah sudah terdaftar');
        }

        // Check total SKS
        $totalSks = JwlMhs::where('mhs_id', $mahasiswa->id)->sum('sks') + $jadwalMatakuliah->sks;
        if ($totalSks > $mahasiswa->sks) {
            return redirect()->back()->with('error', 'Jumlah SKS melebihi batas');
        }

        $jadwalMhs = new JwlMhs();
        $jadwalMhs->mhs_id = $mahasiswa->id;
        $jadwalMhs->matakuliah = $jadwalMatakuliah->matakuliah;
        $jadwalMhs->sks = $jadwalMatakuliah->sks;
        $jadwalMhs->kelp = $jadwalMatakuliah->kelp;
        $jadwalMhs->ruangan = $jadwalMatakuliah->ruangan;

        $jadwalMhs->save();

        return redirect()->route('mahasiswa.edit', $mahasiswa->id)->with('success', 'Input KRS berhasil');
    }

    public function destroyJadwal($id)
    {
        $jadwalMhs = JwlMhs::findOrFail($id);
        $jadwalMhs->delete();

        return redirect()->back()->with('success', 'KRS berhasil dihapus');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
