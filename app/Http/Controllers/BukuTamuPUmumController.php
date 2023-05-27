<?php

namespace App\Http\Controllers;

use App\Models\buku_tamu_pumum;
use Illuminate\Http\Request;

class BukuTamuPUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BukuTamuPUmum';
        $buku_tamu_pumum = buku_tamu_pumum::paginate(10);
        return view('admin.bukutamupumum.index', compact('title','buku_tamu_pumum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'keperluan' => 'required',
            'alamat' => 'required',

        ]);

        buku_tamu_pumum::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'keperluan' => $request->keperluan,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku_tamu_pumum  $buku_tamu_pumum
     * @return \Illuminate\Http\Response
     */
    public function show(buku_tamu_pumum $buku_tamu_pumum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku_tamu_pumum  $buku_tamu_pumum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit";
        $buku = Buku_Tamu_PUmum::find($id);
        return view('admin.bukutamupumum.edit',compact('title','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku_tamu_pumum  $buku_tamu_pumum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku_Tamu_PUmum $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'keperluan' => 'required',
            'alamat' => 'required',
        ]);

        $id->update($request->all());
        return redirect()->route('buku_tamu_pumum.admin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku_tamu_pumum  $buku_tamu_pumum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku_tamu_pumum = Buku_Tamu_PUmum::find($id);
        $buku_tamu_pumum->delete();
        return redirect()->route('buku_tamu_pumum.admin');
    }
}
