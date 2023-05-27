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
                        @foreach ($berita_Acara as $c)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $c->acara}}</td>
                            <td>{{ $c->created_at}}</td>
                            <td>{{ $c->waktu}}</td>
                            <td>{{ $c->tempat}}</td>
                            <td>
                                <!-- <a href="{{ route('kategori.edit', $c->id) }}" class="btn btn-warning btn-sm"><i
                                                class="nav-icon fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('kategori.hapus', $c->id) }}" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash-can"></i>
                                        </a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Berita Acara</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name">Nama :</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                            <div class="text-danger">
                                @error('name')
                                Nama Kategori tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="description">Deskripsi :</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi" id="message-text"></textarea>
                            <div class="text-danger">
                                @error('description')
                                Deskripsi tidak boleh kosong.
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