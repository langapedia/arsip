@extends('layout_admin.app')
@section('content')
<section>
    <div class="mt-5">
        <div class="container border py-4">
            <form action="{{ route('update_buku_tamu_pelayanan.admin', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" value="{{ $buku->nama }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Acara">
                        <div class="text-danger">
                            @error('nama')
                            Acara tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="keperluan">Keperluan :</label>
                        <input type="text" name="keperluan" value="{{ $buku->keperluan }}" class="form-control @error('keperluan') is-invalid @enderror" placeholder="Waktu">
                        <div class="text-danger">
                            @error('keperluan')
                            Waktu tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="no_hp">No.Hp :</label>
                        <input type="text" name="no_hp" value="{{ $buku->no_hp }}" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Tempat">
                        <div class="text-danger">
                            @error('no_hp')
                            Tempat tidak boleh kosong.
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
</section>
@endsection