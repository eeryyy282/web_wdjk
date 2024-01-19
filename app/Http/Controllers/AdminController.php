<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Shoe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Shoe::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.page.dashboard');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
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
    public function edit(Shoe $shoe)
    {
        return view('admin.page.user-edit', ['shoe' => $shoe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shoe $shoe)
    {
        $request->validate([
            'merk' => 'required|max:255',
            'tipe' => 'required|max:255',
            'harga' => 'required',
            'terjual' => 'required',
            'rating' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $shoe->update([
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Shoe::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function makeAdmin($id)
    {
        $user = User::findOnFail($id);
        $user->is_admin = true;
        $user->save();
    }


}
