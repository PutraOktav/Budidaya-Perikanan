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
                                    <th>Pakan Harian</th>
                                    <th>Jumlah Pakan</th>
                                    <th>Waktu Sampai Sampling Selanjutnya</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = array(); @endphp
                                @foreach ($riwayats as $riwayat)
                                    @php
                                        if (!array_key_exists($riwayat->name, $total)) {
                                            $total[$riwayat->name] = 0;
                                        }
                                        $total[$riwayat->name] += $riwayat->totalFeedSampling;
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $riwayat->name }}</td>
                                        <td>{{ $riwayat->feedDayKG }} kg</td>
                                        <td>{{ $riwayat->totalFeedSampling }} kg</td>
                                        <td>{{ $riwayat->sampling }} minggu</td>
                                        <td>{{ $riwayat->created_at }}</td>
                                        <td>
                                            <a href="{{ route('riwayat-samplings.show', $riwayat) }}" class="btn btn-info">Lihat</a>
                                            <form action="{{ route('riwayat-samplings.destroy', $riwayat->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="6"><strong>Total Pakan Yang Sudah Di Gunakan :</strong></th>
                                </tr>
                                @foreach ($total as $nama_ikan => $total_pakan)
                                    <tr>
                                        <td></td>
                                        <td>{{ $nama_ikan }}</td>
                                        <td colspan="3"></td>
                                        <td><strong>{{ $total_pakan }} kg</strong></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
