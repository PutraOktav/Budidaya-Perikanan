{{-- Menampilan halaman home --}}
@extends('layouts.admin')

@section('title', 'Home')

@section('main-content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jenis Ikan</div>
                <div class="card-body">
                    <p>Total Jenis Ikan: {{ $fishTypeCount }}</p>
                    <a href="{{ route('fishTypes.index') }}" class="btn btn-primary">View Jenis Ikan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jenis Pakan</div>
                <div class="card-body">
                    <p>Total Jenis Ikan: {{ $fishFoodCount }}</p>
                    <a href="{{ route('fishFoods.index') }}" class="btn btn-primary">View Jenis Pakan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Riwayat</div>
                <div class="card-body">
                    <p>Total Riwayats: {{ $riwayatCount }}</p>
                    <a href="{{ route('riwayats.index') }}" class="btn btn-primary">View Riwayats</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Riwayat Sampling</div>
                <div class="card-body">
                    <p>Total Riwayat: {{ $riwayatSamplingCount }}</p>
                    <a href="{{ route('riwayats.index') }}" class="btn btn-primary">View Riwayats</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection