<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Struktur;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(Request $request, Divisi $divisi)
    {

        return view('frontend.divisi.index', [
            'divisi' => Divisi::find($divisi),
            'struktur' => $divisi->struktur->load('divisi')
        ]);
    }
}
