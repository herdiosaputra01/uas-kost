<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pemesanan = Pemesanan::all();
        return view('Pemesanan.index', compact('pemesanan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pemesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pemesanan = new Pemesanan();
        $pemesanan->noPemesanan = $request->noPemesanan;
        $pemesanan->kamars_id = $request->kamars_id;
        $pemesanan->tglMasuk = $request->tglMasuk;
        $pemesanan->tglKeluar = $request->tglKeluar;
        $pemesanan->pelanggans_id = $request->pelanggans_id;
        $pemesanan->save();

        return redirect('/pelanggan');
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
        $pemesanan = Pemesanan::find($id);
        return view('Pemesanan.edit',compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pemesanan = Pemesanan::find($id);
        $pemesanan->noPemesanan = $request->noPemesanan;
        $pemesanan->kamars_id = $request->kamars_id;
        $pemesanan->tglMasuk = $request->tglMasuk;
        $pemesanan->tglKeluar = $request->tglKeluar;
        $pemesanan->pelanggans_id = $request->pelanggans_id;
        $pemesanan->save();

        return redirect('/pemesanan')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
