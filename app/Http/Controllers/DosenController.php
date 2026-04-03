<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosen',
            'nama' => 'required'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil ditambahkan');
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
        $data = Dosen::findOrFail($id);
        return view('dosen.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Dosen::findOrFail($id);

        $request->validate([
            'nidn' => 'required',
            'nama' => 'required'
        ]);

        $data->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil dihapus');
    }
}
