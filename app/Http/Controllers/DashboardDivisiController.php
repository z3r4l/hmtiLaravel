<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Divisi $divisi)
    {
        return view('backend.dashboard.divisi.index', [
            'divisies' => Divisi::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        return view('backend.dashboard.divisi.show', [
            'divisies' => $divisi,
            'struktur' => $divisi->struktur->load('divisi')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        return view('backend.dashboard.divisi.edit', [
            'divisi' => $divisi,
            'struktur' => Struktur::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:512|mimes:jpeg,jpg',
            'body' => 'required'
        ];

        if ($request->slug != $divisi->slug) {
            $rules['slug'] = 'required|unique:divisis';
        }

        $validatedData = $request->validate($rules);

        // kondisi jika boleh diboleh upload image kosong

        if ($request->file('image')) {
            Storage::delete($divisi->image);
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        Divisi::where('id', $divisi->id)
            ->update($validatedData);


        return redirect('/dashboard/divisi')->with('success', 'Divisi berhasil di Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        //
    }
}
