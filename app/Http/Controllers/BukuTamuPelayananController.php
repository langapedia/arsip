<?php

namespace App\Http\Controllers;

use App\Models\Buku_Tamu_Pelayanan;
use Illuminate\Http\Request;

class BukuTamuPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BukuTamuPelayanan';
        $buku_tamu_pelayanan = Buku_Tamu_Pelayanan::paginate(10);
        return view('admin.bukutamupelayanan.index', compact('title', 'buku_tamu_pelayanan'));
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
            'keperluan' => 'required',
            'no_hp' => 'required',
            
        ]);
        
        Buku_Tamu_Pelayanan::create([
            'nama' => $request->nama,
            'keperluan' =>$request->keperluan,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuTamuPelayanan  $bukuTamuPelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Buku_Tamu_Pelayanan $bukuTamuPelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku_Tamu_Pelayanan  $bukuTamuPelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit";
        $buku = Buku_Tamu_Pelayanan::find($id);
        return view('admin.bukutamupelayanan.edit',compact('title','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku_Tamu_Pelayanan  $bukuTamuPelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku_Tamu_Pelayanan $id)
    {
        $request->validate([
            'nama' => 'required',
            'keperluan' => 'required',
            'no_hp' => 'required',
        ]);

        $id->update($request->all());
        return redirect()->route('buku_tamu_pelayanan.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku_Tamu_Pelayanan  $bukuTamuPelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku_tamu_pelayanan = Buku_Tamu_Pelayanan::find($id);
        $buku_tamu_pelayanan->delete();
        return redirect()->route('buku_tamu_pelayanan.admin');
    }
}
