<?php

namespace App\Http\Controllers;

use App\Models\Jenisheadphone;
use App\Models\Headphone;
use Illuminate\Http\Request;

class HeadphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Headphone::all();
        return view('headphone.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('headphone.create',[
            'jenisheadphone' => Jenisheadphone::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Headphone::create(
            [
                'headphone_id_jenisheadphone' => $request->headphone_id_jenisheadphone,
                'headphone_nama' => $request->headphone_nama,
                'headphone_harga' => $request->headphone_harga,
                'headphone_stock' => $request->headphone_stock
            ]
        );

        return redirect('headphone')->with('success','Data berhasil ditambahkan');
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
        $row = Headphone::findOrFail($id);
        return view('headphone.edit', [
            'jenisheadphone' => Jenisheadphone::get()
        ],
        compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = headphone::findOrFail($id);
        $row->update(
            [
                'headphone_id_jenisheadphone' => $request->headphone_id_jenisheadphone,
                'headphone_nama' => $request->headphone_nama,
                'headphone_harga' => $request->headphone_harga,
                'headphone_stock' => $request->headphone_stock
            ]
        );
        return redirect('headphone')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = headphone::findOrFail($id);
        $row->delete();

        return redirect('headphone')->with('success', 'Data berhasil dihapus');
    }
}