{{-- menampilkan data detail data makanan ikan --}}
@extends('layouts.admin')

@section('title', 'Detail')

@section('main-content')
    <div class="card-header">DATA {{ $fishFood->name }}</div>
    <div class="container">
        <p>Harga: {{ $fishFood->price }}</p>
        <a href="{{ route('fishFoods.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
