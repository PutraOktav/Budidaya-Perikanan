{{-- Menampilkan data detail dari jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Detail')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $fishType->name }}</div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $fishType->name }}</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>{{ $fishType->price }}</td>
                            </tr>
                            <tr>
                                <td>Ukuran Awal</td>
                                <td>{{ $fishType->ukuran_awal }}</td>
                            </tr>
                            <tr>
                                <td>Waktu Panen</td>
                                <td>{{ $fishType->waktu_panen }}</td>
                            </tr>
                            <tr>
                                <td>Ukuran Panen</td>
                                <td>{{ $fishType->ukuran_panen }}</td>
                            </tr>
                            <tr>
                                <td>Padat Tebar</td>
                                <td>{{ $fishType->stocking_density }}</td>
                            </tr>
                            <tr>
                                <td>FCR</td>
                                <td>{{ $fishType->fcr }}</td>
                            </tr>
                            <tr>
                                <td>Nama Makanan</td>
                                <td>{{ $fishType->fishFood->name }}</td>
                            </tr>
                            <tr>
                                <td>Waktu Sampling</td>
                                <td>{{ $fishType->waktu_sampling }} Minggu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection