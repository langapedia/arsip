@extends('layout_admin.app')
@section('content')

<section>
    <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('buku_tamu_pelayanan.admin') }}">BUKU TAMU PELAYANAN</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('buku_tamu_kedinasan.admin') }}">BUKU TAMU KEDINASAN</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('buku_tamu_pumum.admin') }}">BUKU TAMU PELAYANAN UMUM</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('buku_tamu_media.admin') }}">BUKU TAMU MEDIA</a>
        </div>
    </div>


    <div class="row justify-content-md-center">
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('buku_tamu_khusus.admin') }}">BUKU TAMU KHUSUS</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('notulen.admin') }}">NOTULEN</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('berita_acara.admin') }}">BERITA ACARA</a>
        </div>
        <div class="col-md-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <a type="button" class="card mb-3 p-5 card-body d-flex align-items-center justify-content-center btn btn-outline-success" style="min-height: 10rem;" href="{{ Route('dokumentasi.admin') }}">DOKUMENTASI</a>
        </div>
    </div>

    <img src="{{asset('assets/img/aksen/accent3.png')}}" alt="gambar col" class="position-absolute bottom-100 w-25">
    <img src="{{asset('assets/img/aksen/accent3.png')}}" alt="gambar col" class="position-absolute bottom-0 w-25">
    <img src="{{asset('assets/img/aksen/accent3.png')}}" alt="gambar col" class="position-absolute top-0 w-25">
</section>
<style>
    #card-button {
        background-color: #D8E9A8;
        border: #0E7632 2px solid;
        min-height: 8rem;
        color: #fff;
    }

    #card-button:hover {
        background-color: #0E7632;
        border: #D8E9A8 2px solid;
        min-height: 12rem;
        color: #0E7632;
    }
</style>
@endsection