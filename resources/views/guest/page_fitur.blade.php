@extends('layout_guest.bg1-lay')
@extends('layout_guest.app')
@section('content')

<section>
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 50px;">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">BUKU TAMU PELAYANAN
                    </p>
                    <a href="{{ route('pelayanan') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 50px;">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">BUKU TAMU KEDINASAN
                    </p>
                    <a href="{{ route('kedinasan') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 50px;">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">BUKU TAMU PELAYANAN UMUM
                    </p>
                    <a href="{{ route('umum') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">BUKU TAMU KHUSUS
                    </p>
                    <a href="{{ route('khusus') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-xl-0 mb-4" style="margin-top: 100px;">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <p class="card-text">BUKU TAMU MEDIA
                    </p>
                    <a href="{{ route('media') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-3 mb-xl-0 mb-4" style="margin-top: 100px;">
            <div class="card text-bg-danger mb-3" style="max-width: 10rem;">
                <div class="card-body">
                <a href="{{ route('home') }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>




</section>


@endsection