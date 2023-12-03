{{-- Halaman untuk menampilkan index dari data jenis makanan --}}
@extends('layouts.admin')

@section('title', 'Fish Food')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Makanan Ikan
                        <a href="{{ route('fishFoods.create') }}" class="btn btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-header">
                        Jumlah Data :  {{ $fishFoods->count() }} Data
                    </div>
                    <div class="card-header">
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
                                    <th>Nama Makanan</th>
                                    <th>Harga (rupiah)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fishFoods as $fishFood)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $fishFood->name }}</td>
                                        <td>{{ $fishFood->price }}</td>
                                        <td>
                                            <a href="{{ route('fishFoods.show', $fishFood) }}" class="btn btn-info">Lihat</a>
                                            <a href="{{ route('fishFoods.edit', $fishFood) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('fishFoods.destroy', $fishFood) }}" method="POST" class="d-inline">
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
