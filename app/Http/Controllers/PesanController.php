<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::all();
        return view('pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kereta = Kereta::all();
        return view('pesan.create', compact('kereta'));
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
            'id_kereta' => 'required'
        ]);

       $pesan = new Pesan;
       //db              create
       $pesan->id_kereta = $request->id_kereta;
       $pesan->kelas = $request->kelas;
       $pesan->tgl = $request->tgl;

       $kereta = Kereta::findOrFail($request->id_kereta);

       $pesan->jml_tiket = $request->jml_tiket;
       $pesan->total =  $pesan->jml_tiket * $kereta->harga;
       $pesan->save();
       return redirect()->route('pesan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        $kereta = Kereta::all();
        $pesan = Pesan::findOrFail($id);
        return view('.pesan.edit', compact('kereta','pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'id_kereta'=>'required',
            'kelas'=>'required',
            'tgl'=>'required',
            'jml_tiket'=>'required',
            'total'=>'required',
        ]);
        $pesan = Pesan::findOrFail($id);
        //db              create
        $pesan->id_kereta = $request->id_kereta;
        $pesan->kelas = $request->kelas;
        $pesan->tgl = $request->tgl; 
        $pesan->jml_tiket = $request->jml_tiket;
        $pesan->total = $request->total ;

        $pesan->save();
        return redirect()->route('pesan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();
        return redirect()->route('pesan.index');
    }
}
