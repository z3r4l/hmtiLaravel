<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Struktur;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function litbang()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI PENELITIAN DAN PENGEMBANGAN',
            'divisi' => Divisi::where('id', '2')->get(),
            'anggota' =>  Struktur::where('divisi_id', '2')->get()
        ]);
    }
    public function program()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI PROGRAM',
            'divisi' => Divisi::where('id', '3')->get(),
            'anggota' =>  Struktur::where('divisi_id', '3')->get()
        ]);
    }
    public function humas()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI HUBUNGAN MASYARAKAT',
            'divisi' => Divisi::where('id', '4')->get(),
            'anggota' =>  Struktur::where('divisi_id', '4')->get()
        ]);
    }
    public function media()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI MEDIA',
            'divisi' => Divisi::where('id', '5')->get(),
            'anggota' =>  Struktur::where('divisi_id', '5')->get()
        ]);
    }
}
