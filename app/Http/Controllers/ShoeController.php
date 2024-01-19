<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.table');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|max:255',
            'tipe' => 'required|max:255',
            'harga' => 'required',
            'terjual' => 'required',
            'rating' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        Shoe::create([
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'harga' => $request->harga,
            'terjual' => $request->terjual,
            'rating' => $request->rating,
            'foto' => $request->foto,
        ]);
        return redirect()->route('dashboard');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
