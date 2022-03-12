<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penumpang = Penumpang::all();
        return view('penumpang.index', compact('penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesan = Pesan::all();
        return view('penumpang.create', compact('pesan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
       return redirect()->route('penumpang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show(Penumpang $penumpang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit(Penumpang $penumpang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penumpang $penumpang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penumpang = Penumpang::findOrFail($id);
        $penumpang->delete();
        return redirect()->route('penumpang.index');
    }
}
