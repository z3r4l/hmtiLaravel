<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function litbang()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI PENELITIAN DAN PENGEMBANGAN',
            'definisi' => 'Divisi Penelitian dan Pengembangan bertugas melaksanakan penyusunan kebajikan teknis, rencana dan program penelitian, pengembangan dan inovasi'
        ]);
    }
    public function program()
    {
        return view('frontend.divisi.index', [
            'title' => 'DIVISI PROGRAM',
            'definisi' => 'devisi program adalah devisi yang menyokong perkembangan infrastruktur organisasi dengan memanfaatkan teknologi digital agar mempermudah dalam mengelola rancangan kegiatan',
            'anggota' =>[
                
            ],
        ]);
    }
}
