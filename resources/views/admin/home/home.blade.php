@extends('layout_admin.app')
@section('content')

<section>
    <div class="row justify-content-md-center">
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <div class="col-6">
                <div style="margin-top: 130px;">
                    <h3 aligh="center" style="font-weight:bold; font-family: serif; text-align:center; color:white; ">SELAMAT DATANG ADMIN </h3>
                    <h1 style="font-weight:bold; font-family: serif; text-align:center; color:white;">Pelayanan Digital<br />Melayani Masyarakat.</h1>
                    <p style="font-weight:bold; font-family: serif; text-align:center; color:white;">Berkaitan dengan surat menyurat serta memudahkan<br />perangkat desa dalam menyimpan sebuah data</p>
                </div>

                <div class="card mb-3" id="card-button" style="margin-top: 100px;">
                    <div class="card-body">
                        <a class="card-text" href="{{ Route('fitur') }}" class="btn">MASUK</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ asset('assets/img/DesaLabanasem.jpg') }}" width="756px" height="688px" alt="" class="position-absolute">
            </div>
        </div>



    </div>
    </div>
    <style>
        #card-button {
            background-color: #0E7632;
            max-width: 18rem;
            color: #fff;
        }
    </style>
</section>
@endsection