{{-- Menampilkan Hasil Perhitungan Kebutuhan Perikanan Pakan Setelah Sampling --}}
@extends('layouts.admin')

@section('title', 'Hasil Pakan Setelah Sampling')

@section('main-content')
    <div class="container">
        <h1>Hasil Perhitungan Kebutuhan Perikanan Pakan Setelah Sampling</h1>
        <br>
        <h2>{{ $fishType->name }} :</h2>

        <table>
            <tr>
                <th>Item</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>Luas Kolam</td>
                <td>{{ $area }} m<sup>2</sup></td>
            </tr>
            <tr>
                <td>Jumlah Pakan Harian</td>
                <td>{{ $feedDayKG }} kg</td>
            </tr>
            <tr>
                <td>Total Pakan Sampai Sampling Berikutnya</td>
                <td>{{ $totalFeedSampling }} kg</td>
            </tr>
            <tr>
                <td>Waktu Sampling</td>
                <td>{{ $sampling }} minggu kedepan</td>
            </tr>
        </table>
    </div>
@endsection
