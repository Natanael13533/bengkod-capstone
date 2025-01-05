<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\JwlMataKuliah;
use App\Models\JwlMhs;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jadwalMhs = JwlMhs::where('mhs_id', $id)->get();

        $totalSks = $jadwalMhs->sum('sks');

        return view('mahasiswa-download.jadwal_download', compact('mahasiswa', 'jadwalMhs', 'totalSks'));
    }

    public function downloadPDF($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jadwalMhs = JwlMhs::where('mhs_id', $id)->get();

        $totalSks = $jadwalMhs->sum('sks');

        $pdf = PDF::loadView('mahasiswa-download.download_pdf', [
            'mahasiswa' => $mahasiswa,
            'jadwalMhs' => $jadwalMhs,
            'totalSks' => $totalSks
        ]);

        return $pdf->download('Sistem_Input_KRS.pdf');
    }
}
