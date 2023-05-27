<?php

namespace App\Http\Controllers;

use App\Models\dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dokumentasi';
        $dokumentasi = Dokumentasi::paginate(10);
        return view('admin.dokumentasi.index', compact('title','dokumentasi'));
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
			'file' => 'required|file|mimes:pdf,docx|max:2048',
			'acara' => 'required',
			
			'waktu' => 'required',
			'tempat' => 'required',
	
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		dokumentasi::create([
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
     * @param  \App\Models\dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Dokumentasi';
        $dokumentasi = dokumentasi::find($id);
        return view('admin.dokumentasi.view', compact('title', 'dokumentasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function berkas($id)
    {
        $title = 'Dokumentasi';
        $dokumentasi = dokumentasi::find($id);
        return view('admin.dokumentasi.berkas',compact('title','dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumentasi = dokumentasi::find($id);
        $dokumentasi->delete();
        return redirect()->route('dokumentasi.admin');
    }
}
