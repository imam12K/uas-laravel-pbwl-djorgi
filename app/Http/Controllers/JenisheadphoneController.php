<?php

namespace App\Http\Controllers;

use App\Models\Jenisheadphone;
use Illuminate\Http\Request;

class JenisheadphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Jenisheadphone::all();
        return view('jenisheadphone.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenisheadphone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jenisheadphone::create(
            [
                'jenisheadphone_nama' => $request->jenisheadphone_nama
            ]
        );

        return redirect('jenisheadphone')->with('success','Data berhasil ditambahkan');
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
        $row = Jenisheadphone::findOrFail($id);
        return view('jenisheadphone.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Jenisheadphone::findOrFail($id);
        $row->update(
            [
                'jenisheadphone_nama' => $request->jenisheadphone_nama
            ]
        );
        return redirect('jenisheadphone')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Jenisheadphone::findOrFail($id);
        $row->delete();

        return redirect('jenisheadphone')->with('success', 'Data berhasil dihapus');
    }
}