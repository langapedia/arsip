<?php

namespace App\Http\Controllers;

use App\Models\buku_tamu_media;
use Illuminate\Http\Request;

class BukuTamuMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BukuTamuMedia';
        $buku_tamu_media = Buku_Tamu_Media::paginate(10);
        return view('admin.bukutamumedia.index', compact('title','buku_tamu_media'));
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
            'lembaga' => 'required',
            'keperluan' => 'required',

        ]);

        Buku_Tamu_Media::create([
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'keperluan' => $request->keperluan,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku_tamu_media  $buku_tamu_media
     * @return \Illuminate\Http\Response
     */
    public function show(buku_tamu_media $buku_tamu_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku_tamu_media  $buku_tamu_media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit";
        $buku = Buku_Tamu_Media::find($id);
        return view('admin.bukutamumedia.edit',compact('title','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku_tamu_media  $buku_tamu_media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku_Tamu_Media $id)
    {
        $request->validate([
            'nama' => 'required',
            'lembaga' => 'required',
            'keperluan' => 'required',
        ]);

        $id->update($request->all());
        return redirect()->route('buku_tamu_media.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku_tamu_media  $buku_tamu_media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku_tamu_media = Buku_Tamu_Media::find($id);
        $buku_tamu_media->delete();
        return redirect()->route('buku_tamu_media.admin');
    }
}
