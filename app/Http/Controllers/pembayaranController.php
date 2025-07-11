<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pembayaran = Pembayaran::all();
        return view('Pembayaran.index', compact('pembayaran', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pembayaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pembayaran = new Pembayaran;
        $pembayaran->idPembayaran = $request->idPembayaran;
        $pembayaran->tglPembayaran = $request->tglPembayaran;
        $pembayaran->pemesanans_id = $request->pemesanans_id;
        $pembayaran->save();

        return redirect('/pembayaran');
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
        $pembayaran = Pembayaran::find($id);
        return view('Pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pembayaran = Pembayaran::find($id);
        $pembayaran->idPembayaran = $request->idPembayaran;
        $pembayaran->tglPembayaran = $request->tglPembayaran;
        $pembayaran->pemesanans_id = $request->pemesanans_id;
        $pembayaran->save();

        return redirect('/pembayaran')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect('/pembayaran');
    }
}
