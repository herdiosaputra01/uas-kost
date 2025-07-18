<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;


class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pelanggan = Pelanggan::all();
        return view('Pelanggan.index', compact('pelanggan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'idPelanggan' => 'required|unique:pelanggans,idPelanggan',
        'namaPelanggan' => 'required',
        'alamatPelanggan' => 'required',
        'noHp' => 'required',
        'email' => 'required|email',
    ]);

    // Simpan data
    $pelanggan = new Pelanggan;
    $pelanggan->idPelanggan = $request->idPelanggan;
    $pelanggan->namaPelanggan = $request->namaPelanggan;
    $pelanggan->alamatPelanggan = $request->alamatPelanggan;
    $pelanggan->noHp = $request->noHp;
    $pelanggan->email = $request->email;
    $pelanggan->save();

    return redirect('/pelanggan')->with('success', 'Data berhasil diupdate!');
    // return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan!');
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
        $pelanggan = Pelanggan::find($id);
        return view('Pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pelanggan = Pelanggan::find($id);
        $pelanggan->idPelanggan = $request->idPelanggan;
        $pelanggan->namaPelanggan = $request->namaPelanggan;
        $pelanggan->alamatPelanggan = $request->alamatPelanggan;
        $pelanggan->email = $request->email;
        $pelanggan->save();

        return redirect('/pelanggan')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect('/pelanggan');
    }
}