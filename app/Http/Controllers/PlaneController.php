<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Plane::all();
        
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'SoDangKy'          =>  'required|unique:planes,SoDangKy',
            'SoHieu'         =>  'required',
            'KhaNang'         =>  'required',
        ]);

        

        $plane = new Plane;

        $plane->SoDangKy = $request->SoDangKy;
        $plane->SoHieu = $request->SoHieu;
        $plane->KhaNang = $request->KhaNang;

        $plane->save();

        return redirect()->route('planes.index')->with('success', 'Plane Added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Plane $plane)
    {
        //
        return view('show', compact('plane'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plane $plane)
    {
        //
        return view('edit', compact('plane'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plane $plane)
    {
        //
        $request->validate([
            'SoDangKy'          =>  'required',
            'SoHieu'         =>  'required',
            'KhaNang'         =>  'required',
        ]);

        $plane = Plane::find($request->hidden_id);
        // $plane->SoDangKy= $request->SoDangKy;
        $plane->SoHieu = $request->SoHieu;
        $plane->KhaNang = $request->KhaNang;

        $plane->save();
        return redirect()->route('planes.index')->with('success', 'Plane Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plane $plane)
    {
        //
        $plane->delete();
        return redirect()->route('planes.index')->with('success', 'Plane Data  deleted successfully.');
    }
}
