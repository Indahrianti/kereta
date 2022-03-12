<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Pesan;
use App\Models\Penumpang;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = Kereta::all();
        $pesan = Pesan::all();
        $penumpang = Penumpang::all();
        return view('layouts.frontend', compact('kereta','pesan','penumpang'));
    }
    public function create()
    {
        $kereta = Kereta::all();
        return view('layouts.frontend', compact('kereta'));
    }
    public function store(Request $request)
    {
        $pesan = new Pesan;
        //db              create
        $pesan->id_kereta = $request->id_kereta;
        $pesan->kelas = $request->kelas;
        $pesan->tgl = $request->tgl;
        $kereta = Kereta::findOrFail($request->id_kereta);
        $pesan->jml_tiket = $request->jml_tiket;
        $pesan->total =  $pesan->jml_tiket * $kereta->harga;
        $kereta->save();
        $pesan->save();
        return redirect('pesan');
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
