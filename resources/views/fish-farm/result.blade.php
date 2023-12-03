{{-- Menampilkan hasil perhitungan kebutuhan perikanan --}}
@extends('layouts.admin')

@section('title', 'Hasil')

@section('styles')
    <style>
        .result-table {
            border-collapse: collapse;
            width: 100%;
        }

        .result-table th,
        .result-table td {
            border: 1px solid black;
            padding: 8px;
        }

        .result-table th {
            background-color: #f2f2f2;
        }
    </style>
@endsection

@section('main-content')
    <div class="container">
        <h1>Hasil Perhitungan Kebutuhan Perikanan</h1>
        <br>
        <h2>{{ $fishType->name }} :</h2>


        <br>
        <table class="result-table">
            <tr>
                <th>Item</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>Luas Kolam</td>
                <td>{{ $area }} m<sup>2</sup></td>
            </tr>
            <tr>
                <td>Jumlah Ikan</td>
                <td>{{ $totalFish }} ekor</td>
            </tr>
            <tr>
                <td>Biomassa Benih</td>
                <td>{{ $biomassakg }} kg</td>
            </tr>
            <tr>
                <td>Perkiraan Biomassa Panen</td>
                <td>{{ $biomassaPanenkg }} kg</td>
            </tr>
            <tr>
                <td>Ukuran Awal</td>
                <td>{{ $ukuranAwal }} gram</td>
            </tr>
            <tr>
                <td>Perkiraan Waktu Panen</td>
                <td>{{ $waktuPanen }} Bulan</td>
            </tr>
            <tr>
                <td>Nama Pakan</td>
                <td>{{ $namaPakan }}</td>
            </tr>
            <tr>
                <td>Ukuran Panen</td>
                <td>{{ $ukuranPanen }} gram</td>
            </tr>
            <tr>
                <td>Jumlah Pakan</td>
                <td>{{ $totalFeed }} kg</td>
            </tr>
            <tr>
                <td>Biaya Benih Ikan</td>
                <td>Rp {{ number_format($fishCost) }}</td>
            </tr>
            <tr>
                <td>Biaya Pakan Total</td>
                <td>Rp {{ number_format($feedCost) }}</td>
            </tr>
            <tr>
                <td>Biaya Total Budidaya</td>
                <td>Rp {{ number_format($allCost) }}</td>
            </tr>
            <tr>
                <td>Waktu Sampling</td>
                <td>{{ $sampling }} minggu</td>
            </tr>
        </table>
        <br>
        <br>
        <table class="result-table">
            <tr>
                <th>Judul Tabel</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>Luas Kolam</td>
                <td>Luas kolam yang digunakan dalam perikanan (dalam meter persegi)</td>
            </tr>
            <tr>
                <td>Jumlah Ikan</td>
                <td>Jumlah ikan yang akan dipelihara</td>
            </tr>
            <tr>
                <td>Biomassa Benih</td>
                <td>Biomassa benih ikan yang diperlukan (dalam kilogram)</td>
            </tr>
            <tr>
                <td>Perkiraan Biomassa Panen</td>
                <td>Perkiraan biomassa ikan yang akan dipanen (dalam kilogram)</td>
            </tr>
            <tr>
                <td>Ukuran Awal</td>
                <td>Ukuran awal ikan (dalam gram)</td>
            </tr>
            <tr>
                <td>Perkiraan Waktu Panen</td>
                <td>Perkiraan waktu yang diperlukan untuk panen ikan (dalam bulan)</td>
            </tr>
            <tr>
                <td>Nama Pakan</td>
                <td>Nama pakan yang digunakan</td>
            </tr>
            <tr>
                <td>Ukuran Panen</td>
                <td>Ukuran ikan saat panen (dalam gram)</td>
            </tr>
            <tr>
                <td>Jumlah Pakan</td>
                <td>Jumlah pakan yang dibutuhkan (dalam kilogram)</td>
            </tr>
            <tr>
                <td>Biaya Benih Ikan</td>
                <td>Biaya untuk membeli benih ikan (dalam Rupiah)</td>
            </tr>
            <tr>
                <td>Biaya Pakan Total</td>
                <td>Biaya total untuk pakan (dalam Rupiah)</td>
            </tr>
            <tr>
                <td>Biaya Total Budidaya</td>
                <td>Biaya total untuk budidaya perikanan (dalam Rupiah)</td>
            </tr>
            <tr>
                <td>Waktu Sampling</td>
                <td>Waktu sampling yang digunakan (dalam minggu)</td>
            </tr>
        </table>
    </div>
@endsection
