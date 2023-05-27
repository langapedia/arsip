@extends('layout_admin.app')
@section('content')
<section>
    <div class="mt-5">
        <div class="container border py-4">
            <form action="{{ route('update_buku_tamu_kedinasan.admin', $buku->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label for="lembaga">Lembaga :</label>
                        <input type="text" name="lembaga" value="{{ $buku->lembaga }}" class="form-control @error('lembaga') is-invalid @enderror" placeholder="Lembaga">
                        <div class="text-danger">
                            @error('lembaga')
                            Lembaga tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="keperluan">Keperluan :</label>
                        <input type="text" name="keperluan" value="{{ $buku->keperluan }}" class="form-control @error('keperluan') is-invalid @enderror" placeholder="Keperluan">
                        <div class="text-danger">
                            @error('keperluan')
                            Keperluan tidak boleh kosong.
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