<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('koleksi', ['koleksi' => $koleksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkoleksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        koleksi::create([
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'genre' => $request->genre,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);

        return redirect()->route('koleksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $koleksi = Koleksi::find($id);
        return view('editkoleksi', ['koleksi'=>$koleksi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        koleksi::find($id)->update([
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'genre' => $request->genre,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);
        return redirect()->route('koleksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
