<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Penumpang;
use Illuminate\Http\Request;

class Frontend2Controller extends Controller
{
    public function index()
    {
        $pesan = Pesan::all();
        $penumpang = Penumpang::all();
        return view('layouts.frontend2', compact('pesan','penumpang'));
    }
    public function create()
    {
        // $kereta = Kereta::all();
        $pesan = Pesan::all();
        return view('layouts.frontend2', compact('pesan'));
    }
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'id_pesan' => 'required'
        ]);

       $penumpang = new Penumpang;
       //db              create
       $penumpang->id_pesan = $request->id_pesan;
       $penumpang->nm_penumpang = $request->nm_penumpang;
       $penumpang->no_telp = $request->no_telp;
       $penumpang->no_ktp = $request->no_ktp;
       $penumpang->save();
       return redirect()->route('layouts.frontend');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
