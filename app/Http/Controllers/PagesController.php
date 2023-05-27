<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $title = 'ARSIP DESA';
        return view('guest.page_home', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $title = 'ARSIP DESA';        
        return view('guest.page_fitur', compact('title'));
    }

    public function pelayanan()
    {
        $title = 'ARSIP DESA';        
        return view('guest.pelayanan.page_pelayanan', compact('title'));
    }

    public function kedinasan()
    {
        $title = 'ARSIP DESA';        
        return view('guest.kedinasan.page_kedinasan', compact('title'));
    }

    public function umum()
    {
        $title = 'ARSIP DESA';        
        return view('guest.umum.page_umum', compact('title'));
    }

    public function khusus()
    {
        $title = 'ARSIP DESA';        
        return view('guest.khusus.page_khusus', compact('title'));
    }

    public function media()
    {
        $title = 'ARSIP DESA';        
        return view('guest.media.page_media', compact('title'));
    }


    public function tersimpan()
    {
        $title = 'ARSIP DESA';        
        return view('guest.page_tersimpan', compact('title'));
    }
}
