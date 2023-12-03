{{-- Menampilkan halaman edit data jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Edit')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Jenis Ikan</div>
                <div class="card-body">
                    <form action="{{ route('fishTypes.update', $fishType->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $fishType->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga:</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $fishType->price }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_awal">Ukuran Awal:</label>
                            <input type="number" class="form-control" id="ukuran_awal" name="ukuran_awal" value="{{ $fishType->ukuran_awal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_panen">Waktu Panen:</label>
                            <input type="number" class="form-control" id="waktu_panen" name="waktu_panen" value="{{ $fishType->waktu_panen }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_panen">Ukuran Panen:</label>
                            <input type="number" class="form-control" id="ukuran_panen" name="ukuran_panen" value="{{ $fishType->ukuran_panen }}" required>
                        </div>
                        <div class="form-group">
                            <label for="stocking_density">Padat Tebar:</label>
                            <input type="number" class="form-control" id="stocking_density" name="stocking_density" value="{{ $fishType->stocking_density }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fcr">FCR:</label>
                            <input type="number" step="0.01" class="form-control" id="fcr" name="fcr" value="{{ $fishType->fcr }}" required>
                        </div>
                        <div class="form-group">
                            <label for="food_id">Makanan:</label>
                            <select class="form-control" id="food_id" name="food_id" required>
                                @foreach ($fishFoods as $fishFood)
                                    <option value="{{ $fishFood->id }}" @if ($fishFood->id == $fishType->food_id) selected @endif>{{ $fishFood->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu_sampling">Waktu Sampling:</label>
                            <input type="number" class="form-control" id="waktu_sampling" name="waktu_sampling" value="{{ $fishType->waktu_sampling }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('fishTypes.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection