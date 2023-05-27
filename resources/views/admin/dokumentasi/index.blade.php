@extends('layout_admin.app')
@section('content')
<section>
    <div class="mt-5">
        <div class="container border py-4">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-circle-plus"></i> &nbsp; Tambah Kategori
            </button>
            <div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Acara</th>
                            <th>Hari/Tanggal</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokumentasi as $c)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $c->acara}}</td>
                            <td>{{ showDateTime($c->created_at, 'l, d F Y')}}</td>
                         
                            <td>{{ $c->waktu}}</td>
                            <td>{{ $c->tempat }}</td>
                            <td>
                                <a href="{{ route('view_dokumentasi.admin', $c->id) }}" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit"></i>
                                </a>
                                <a href="{{ route('destroy_dokumentasi.admin', $c->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    <a type="button" class="btn btn-danger" href="{{ route('fitur') }}">Kembali</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dokumentasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('create_dokumentasi.admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="acara">Acara :</label>
                            <input type="text" name="acara" value="{{ old('acara') }}" class="form-control @error('acara') is-invalid @enderror" placeholder="Acara">
                            <div class="text-danger">
                                @error('acara')
                                Acara tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="waktu">Waktu :</label>
                            <input type="text" name="waktu" value="{{ old('waktu') }}" class="form-control @error('waktu') is-invalid @enderror" placeholder="Waktu">
                            <div class="text-danger">
                                @error('waktu')
                                Waktu tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="tempat">Tempat :</label>
                            <input type="text" name="tempat" value="{{ old('tempat') }}" class="form-control @error('tempat') is-invalid @enderror" placeholder="Tempat">
                            <div class="text-danger">
                                @error('tempat')
                                Tempat tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Tambahkan File</label>
                            <input class="form-control" type="file" id="formFile" name="file">
                            <div class="text-danger">
                                @error('file')
                                File tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>


                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                        <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection