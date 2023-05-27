@extends('layout_guest.bg1-lay')
@extends('layout_guest.app')
@section('content')


<section>
    <div class="container px-4 py-4" id="con">
        <form action="{{ route('create.umum') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="keperluan">KEPERLUAN</label>
                <input type="text" name="keperluan" id="keperluan" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="no_hp">NO. HANDPHONE</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" required>
            </div>
            <div class="form-group mb-4">
                <label for="alamat">ALAMAT</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <a href="{{ route('menu') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div> 
        </form>
        <style>
            #con {
                background-color: #fff;
            }
        </style>
    </div>
</section>

@endsection