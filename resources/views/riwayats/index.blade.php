{{-- Menampilkan data riwayats --}}
@extends('layouts.admin')

@section('title', 'Riwayat')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Riwayat
                    </div>
                    <div class="card-header">
                        Jumlah Data : {{ count($riwayats) }} Data
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
                                    <th>Nama Ikan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $currentName = '';
                                @endphp
                                @foreach ($riwayats->sortBy('name') as $riwayat)
                                    @if ($currentName != $riwayat->name)
                                        <tr>
                                            <th colspan="4">{{ $riwayat->name }}</th>
                                        </tr>
                                        @php
                                            $currentName = $riwayat->name;
                                        @endphp
                                    @endif
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $riwayat->name }}</td>
                                        <td>{{ $riwayat->created_at }}</td>
                                        <td>
                                            <a href="{{ route('riwayats.show', $riwayat) }}" class="btn btn-info">Lihat</a>
                                            <form action="{{ route('riwayats.destroy', $riwayat->id) }}" method="POST" style="display: inline-block">
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

