@extends('layout_admin.app')
@section('content')
<section>
    <div class="mt-5">
        <div class="container border py-4">
            
            <div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Hari/Tanggal</th>
                            <th>Instansi</th>
                            <th>Keperluan</th>
                            <th>Uraian</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku_tamu_khusus as $c)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $c->nama }}</td>
                            <td>{{ showDateTime($c->created_at, 'l, d F Y')}}</td>
                            <td>{{ $c->instansi}}</td>
                            <td>{{ $c->keperluan}}</td>
                            <td>{{ $c->uraian}}</td>
                            <td>{{ $c->no_hp}}</td>
                            <td>
                            <a href="{{ route('edit_buku_tamu_pelayanan.admin', $c->id) }}" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit"></i>
                                </a>
                            <a href="{{ route('destroy_buku_tamu_khusus.admin', $c->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>
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
</section>

@endsection