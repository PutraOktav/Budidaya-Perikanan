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
                                <td>- Pakan Harian: </td>
                                <td>{{  $riwayat->feedDayKG }} kg</td>
                            </tr>
                            <tr>
                                <td>- Pakan Sampai Sampling Selanjutnya: </td>
                                <td>{{  $riwayat->feedDayKG }} kg</td>
                            </tr>
                            <tr>
                                <td>- Sampling: </td>
                                <td>{{  $riwayat->sampling }} minggu</td>
                            </tr>
                            <tr>
                                <td>- Waktu Penghitungan: </td>
                                <td>{{  $riwayat->created_at }}</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('riwayat-samplings.index') }}" class="btn btn-primary">Back</a></td>
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
