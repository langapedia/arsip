<?php

namespace App\Http\Controllers;

use App\Models\Berita_Acara;
use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BeritaAcara';
        $berita_Acara = Berita_Acara::paginate(10);
        return view('admin.beritaacara.index', compact('title','berita_Acara'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita_Acara  $berita_Acara
     * @return \Illuminate\Http\Response
     */
    public function show(Berita_Acara $berita_Acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita_Acara  $berita_Acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita_Acara $berita_Acara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita_Acara  $berita_Acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita_Acara $berita_Acara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita_Acara  $berita_Acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita_Acara $berita_Acara)
    {
        //
    }
}
