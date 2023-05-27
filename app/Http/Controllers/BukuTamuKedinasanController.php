<?php

namespace App\Http\Controllers;

use App\Models\Buku_Tamu_Kedinasan;
use Illuminate\Http\Request;

class BukuTamuKedinasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BukuTamuKedinasan';
        $buku_tamu_kedinasan = Buku_Tamu_Kedinasan::paginate(10);
        return view('admin.bukutamukedinasan.index', compact('title', 'buku_tamu_kedinasan'));
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

        Buku_Tamu_Kedinasan::create([
            'nama' => $request->nama,
            'lembaga' => $request->lembaga,
            'keperluan' => $request->keperluan,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuTamuKedinasan  $bukuTamuKedinasan
     * @return \Illuminate\Http\Response
     */
    public function show(Buku_Tamu_Kedinasan $bukuTamuKedinasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuTamuKedinasan  $bukuTamuKedinasan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit";
        $buku = Buku_Tamu_Kedinasan::find($id);
        return view('admin.bukutamukedinasan.edit',compact('title','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuTamuKedinasan  $bukuTamuKedinasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku_Tamu_Kedinasan $id)
    {
        $request->validate([
            'nama' => 'required',
            'lembaga' => 'required',
            'keperluan' => 'required',
        ]);

        $id->update($request->all());
        return redirect()->route('buku_tamu_kedinasan.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuTamuKedinasan  $bukuTamuKedinasan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku_tamu_kedinasan = Buku_Tamu_Kedinasan::find($id);
        $buku_tamu_kedinasan->delete();
        return redirect()->route('buku_tamu_kedinasan.admin');
    }
}
