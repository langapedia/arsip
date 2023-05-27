@extends('layout_admin.app')
@section('content')
<section>
    <div class="mt-5">
        <div class="container border py-4">
            <table>
                <tbody id="text_konfirmasi_user">
                    <tr>
                        <td>Acara</td>
                        <td>&nbsp;:</td>
                        <td>{{ $dokumentasi->acara }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>&nbsp;:</td>
                        <td>{{ showDateTime($dokumentasi->created_at, 'l, d F Y')}}</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>&nbsp;:</td>
                        <td>{{ $dokumentasi->waktu }}</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>&nbsp;:</td>
                        <td>{{ $dokumentasi->tempat }}</td>
                    </tr>
                    <tr>
                        <td>Lihat File</td>
                        <td>&nbsp;:</td>
                        <td>
                            <a type="button" class="btn btn-primary"  href="{{ route('berkas_dokumentasi.admin', $dokumentasi->id) }}">Lihat Berkas</a>
                        <!-- {{$dokumentasi->file}}
                            <img src="{{ asset('data_file/'. $dokumentasi->file) }}" alt=""> -->
                        </td>
                    </tr>
                </tbody>         
            </table>
            <div class="mt-3">
                    <a type="button" class="btn btn-danger" href="{{ route('dokumentasi.admin') }}">Kembali</a>
                </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <
                    </div>
                </div>
                          
            </div>
        </div>
    </div>
</section>
@endsection