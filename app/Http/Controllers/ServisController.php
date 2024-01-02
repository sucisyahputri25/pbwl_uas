<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Servis::all();
        return view('servis.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ser_nama' => 'required',
            'harga' => 'required',
        ]);

        // Buat instance objek Servis
        $Servis = new Servis;
        
        // Set nilai atribut
        $Servis->ser_nama = $request->ser_nama;
        $Servis->harga = $request->harga;

        // Simpan objek ke dalam database
        $Servis->save();

        return redirect('servis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementasi tampilan detail jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Servis::find($id);
        return view('servis.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ser_nama' => 'required',
            'harga' => 'required',
        ]);

        $row = Servis::findOrFail($id);

        $row->update([
            'ser_nama' => $request->ser_nama,
            'harga' => $request->harga,
            
        ]);

        return redirect('servis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Servis::findOrFail($id);

        $row->delete();

        return redirect('servis');
    }
}
