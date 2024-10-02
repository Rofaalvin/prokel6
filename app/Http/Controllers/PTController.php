<?php

namespace App\Http\Controllers;

use App\Models\Pt;
use Illuminate\Http\Request;

class PTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pt = Pt::all();
        return view('pt.index', compact('pt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga_perkubikasi' => 'required|numeric',
            'ongkos_supir' => 'required|numeric',
            'harga_material' => 'required|numeric',
        ]);

        Pt::create($request->all());

        return redirect()->route('pt.index')
                        ->with('success', 'Pt created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pt $pt)
    {
        return view('pt.edit', compact('pt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pt $pt)
    {
        $request->validate([
            'nama' => 'required',
            'harga_perkubikasi' => 'required|numeric',
            'ongkos_supir' => 'required|numeric',
            'harga_material' => 'required|numeric',
        ]);

        $pt->update($request->all());

        return redirect()->route('pt.index')
                        ->with('success', 'Pt updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pt $pt)
    {
        $pt->delete();

        return redirect()->route('pt.index')
                        ->with('success', 'Pt deleted successfully.');
    }
}
