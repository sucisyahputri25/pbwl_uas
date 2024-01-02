<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Customers;
use App\Models\Servis;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Appointment::with('customers','servis')->get();
        return view('appointment.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customerss = Customers::select('id', 'nama')->get();
        $serviss = Servis::select('id', 'ser_nama')->get();

        return view('appointment.create', compact('customerss', 'serviss'))->with('title', 'Tambah Appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'cus_id' => $request->cus_id,
            'ser_id' => $request->ser_id,
            'tanggal' => $request->tanggal,
        ];

        // dd($data);
        Appointment::create($data);

        return redirect('appointment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Appointment::find($id);
        return view('appointment.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Appointment::findOrFail($id);

        $row->update([
            'cus_id' => $request->cus_id,
            'ser_id' => $request->ser_id,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Appointment::findOrFail($id);

        $row->delete();

        return redirect('appointment');
    }
}
