<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $kamar = Kamar::all();
        return view('Kamar.index', compact('kamar','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Kamar.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $kamar = new Kamar();
        $kamar->idKamar = $request->idKamar;
        $kamar->noKamar = $request->noKamar;
        $kamar->tipeKamar = $request->tipeKamar;
        $kamar->harga = $request->harga;
        $kamar->waktu = $request->waktu;
        $kamar->save();

        return redirect('/kamar');
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
        //
        $kamar = Kamar::find($id);
        return view('Kamar.edit',compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $kamar = Kamar::find($id);
        $kamar->idKamar = $request->idKamar;
        $kamar->noKamar = $request->noKamar;
        $kamar->tipeKamar = $request->tipeKamar;
        $kamar->harga = $request->harga;
        $kamar->waktu = $request->waktu;
        $kamar->save();

        return redirect('/kamar')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kamar = Kamar::find($id);
        $kamar->delete();

        return redirect('/kamar');
    }
}
