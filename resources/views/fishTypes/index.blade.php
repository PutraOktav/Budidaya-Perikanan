{{-- Menampilkan data jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Fish Types')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Jenis Ikan
                    <a href="{{ route('fishTypes.create') }}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <div class="card-header">
                    Jumlah Data : {{ $fishTypes->count() }} Data
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Harga (rupiah)</th>
                                <th>Ukuran Awal (gram)</th>
                                <th>Waktu Panen (bulan)</th>
                                <th>Ukuran Panen (gram)</th>
                                <th>Padat Tebar (populasi per meter persegi)</th>
                                <th>FCR (perbandingan pakan dan biomasssa ikan)</th>
                                <th>Waktu Sampling (Minggu)</th>
                                <th>Nama Pakan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fishTypes as $fishType)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fishType->name }}</td>
                                    <td>{{ $fishType->price }}</td>
                                    <td>{{ $fishType->ukuran_awal }}</td>
                                    <td>{{ $fishType->waktu_panen }}</td>
                                    <td>{{ $fishType->ukuran_panen }}</td>
                                    <td>{{ $fishType->stocking_density }}</td>
                                    <td>{{ $fishType->fcr }}</td>
                                    <td>{{ $fishType->waktu_sampling }}</td>
                                    <td>{{ $fishType->fishFood->name }}</td>
                                    <td>
                                        <a href="{{ route('fishTypes.show', $fishType) }}" class="btn btn-info">Lihat</a>
                                        <a href="{{ route('fishTypes.edit', $fishType->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('fishTypes.destroy', $fishType->id) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection