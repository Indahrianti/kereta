<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = kereta::all();
        return view('kereta.index', compact('kereta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kereta.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_KA' => 'required'
        ]);

        $kereta = new kereta;
        //db              create
        $kereta->nama_KA = $request->nama_KA;
        $kereta->asal = $request->asal;
        $kereta->tujuan = $request->tujuan;
        $kereta->harga = $request->harga;
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function show(Kereta $kereta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kereta = kereta::findOrFail($id);
        return view('kereta.edit', compact('kereta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         //validasi data
         $validated = $request->validate([
            'nama_KA' => 'required'
        ]);

        $kereta = kereta::findOrfail($id);
        $kereta->nama_KA = $request->nama_KA;
        $kereta->asal = $request->asal;
        $kereta->tujuan = $request->tujuan;
        $kereta->harga = $request->harga;
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kereta $kereta)
    {
        $kereta = kereta::findOrFail($id);
        $kereta->delete();
        return redirect()->route('kereta.index');
    }
}
