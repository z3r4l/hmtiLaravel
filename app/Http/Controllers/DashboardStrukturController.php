<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Struktur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardStrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard.struktur.index', [
            'struktur' => Struktur::orderBy('divisi_id')->paginate(10),
            'divisi' => Divisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dashboard.struktur.create', [
            'divisi' => Divisi::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:strukturs',
            'jabatan' => 'required|max:255',
            'divisi_id' => 'required',
            'image' => 'image|file|max:1024|mimes:jpeg,jpg'
        ]);

        $validateData['image'] = $request->file('image')->store('post-images');

        Struktur::create($validateData);


        return redirect('/dashboard/strukturs')->with('success', 'Struktur berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        return view('backend.dashboard.struktur.show', [
            'struktur' => $struktur,
            'divisi' => Divisi::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur)
    {
        return view('backend.dashboard.struktur.edit', [
            'struktur' => $struktur,
            'divisi' => Divisi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur $struktur)
    {
        $rules = [
            'name' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'divisi_id' => 'required',
            'image' => 'image|file|max:1024|mimes:jpeg,jpg'
        ];

        if ($request->slug != $struktur->slug) {
            $rules['slug'] = 'required|unique:strukturs';
        }

        $validatedData = $request->validate($rules);

        // kondisi jika boleh diboleh upload image kosong
        if ($request->file('image')) {
            Storage::delete($struktur->image);
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Struktur::where('id', $struktur->id)
            ->update($validatedData);


        return redirect('/dashboard/strukturs')->with('success', 'Data berhasil di Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        if ($struktur->image) {
            Storage::delete($struktur->image);
        }

        Struktur::destroy($struktur->id);

        return redirect('/dashboard/strukturs')->with('success', 'Data Berhasil Di Hapus');
    }
}
