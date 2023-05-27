<?php

namespace App\Http\Controllers;

use App\Models\buku_tamu_khusus;
use Illuminate\Http\Request;

class BukuTamuKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BukuTamuKhusus';
        $buku_tamu_khusus = Buku_Tamu_Khusus::paginate(10);
        return view('admin.bukutamukhusus.index', compact('title','buku_tamu_khusus'));
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
            'instansi' => 'required',
            'uraian' => 'required',

        ]);

        Buku_Tamu_Khusus::create([
            'nama' => $request->nama,
            'keperluan' => $request->keperluan,
            'no_hp' => $request->no_hp,
            'instansi' => $request->instansi,
            'uraian' => $request->uraian,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku_tamu_khusus  $buku_tamu_khusus
     * @return \Illuminate\Http\Response
     */
    public function show(buku_tamu_khusus $buku_tamu_khusus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku_tamu_khusus  $buku_tamu_khusus
     * @return \Illuminate\Http\Response
     */
    public function edit(buku_tamu_khusus $buku_tamu_khusus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku_tamu_khusus  $buku_tamu_khusus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buku_tamu_khusus $buku_tamu_khusus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku_tamu_khusus  $buku_tamu_khusus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku_tamu_khusus = Buku_Tamu_Khusus::find($id);
        $buku_tamu_khusus->delete();
        return redirect()->route('buku_tamu_khusus.admin');
    }
}
