{{-- Menampilkan data detail riwayats --}}
@extends('layouts.admin')

@section('title', 'Detail')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $riwayat->name }}</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>- Luas Kolam: </td>
                                <td>{{  $riwayat->area }} m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>- Jumlah Ikan: </td>
                                <td>{{  $riwayat->totalFish }} ekor</td>
                            </tr>
                            <tr>
                                <td>- Biomassa Benih: </td>
                                <td>{{  $riwayat->biomassakg }} kg</td>
                            </tr>
                            <tr>
                                <td>- Perkiraan Biomassa Panen: </td>
                                <td>{{  $riwayat->biomassaPanenkg }} kg</td>
                            </tr>
                            <tr>
                                <td>- Ukuran Awal: </td>
                                <td>{{  $riwayat->ukuranAwal }} gram</td>
                            </tr>
                            <tr>
                                <td>- Perkiraan Waktu Panen: </td>
                                <td>{{  $riwayat->waktuPanen }} Bulan</td>
                            </tr>
                            <tr>
                                <td>- Nama Pakan: </td>
                                <td>{{  $riwayat->namaPakan }}</td>
                            </tr>
                            <tr>
                                <td>- Ukuran Panen: </td>
                                <td>{{  $riwayat->ukuranPanen }} gram</td>
                            </tr>
                            <tr>
                                <td>- Jumlah Pakan: </td>
                                <td>{{  $riwayat->totalFeed }} kg</td>
                            </tr>
                            <tr>
                                <td>- Biaya Benih Ikan: </td>
                                <td>Rp {{  $riwayat->fishCost }}</td>
                            </tr>
                            <tr>
                                <td>- Biaya Pakan Total: </td>
                                <td>Rp {{  $riwayat->feedCost }}</td>
                            </tr>
                            <tr>
                                <td>- Biaya Total Budidaya: </td>
                                <td>Rp. {{  $riwayat->allCost }}</td>
                            </tr>
                            <tr>
                                <td>- Waktu Sampling: </td>
                                <td>{{  $riwayat->sampling }} Minggu</td>
                            </tr>
                            <tr>
                                <td>- Waktu Penghitungan: </td>
                                <td>{{  $riwayat->created_at }}</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('riwayats.index') }}" class="btn btn-primary">Back</a></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
