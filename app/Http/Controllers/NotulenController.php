<?php

namespace App\Http\Controllers;

use App\Models\notulen;
use Illuminate\Http\Request;

class NotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Notulen';
        $notulen = notulen::paginate(10);
        return view('admin.notulen.index', compact('title', 'notulen'));
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
            'file' => 'required|file|mimes:pdf,docx,jpg,png|max:2048',
            'acara' => 'required',
          
            'waktu' => 'required',
            'tempat' => 'required',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        notulen::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
            'acara' => $request->acara,
        
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
        ]);

        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notulen  $notulen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Notulen';
        $notulen = notulen::find($id);
        return view('admin.notulen.view', compact('title', 'notulen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notulen  $notulen
     * @return \Illuminate\Http\Response
     */
    public function berkas($id)
    {
        $title = 'Notulen';
        $notulen = notulen::find($id);
        return view('admin.notulen.berkas',compact('title','notulen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notulen  $notulen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notulen $notulen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notulen  $notulen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notulen = notulen::find($id);
        $notulen->delete();
        return redirect()->route('notulen.admin');
    }
}
