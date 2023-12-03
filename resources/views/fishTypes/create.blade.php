{{-- Menampilkan halaman tambahan data jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Create')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Jenis Ikan</div>
                <div class="card-body">
                    <form action="{{ route('fishTypes.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga:</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_awal">Ukuran Awal:</label>
                            <input type="number" class="form-control" id="ukuran_awal" name="ukuran_awal" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_panen">Waktu Panen:</label>
                            <input type="number" class="form-control" id="waktu_panen" name="waktu_panen" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_panen">Ukuran Panen:</label>
                            <input type="number" class="form-control" id="ukuran_panen" name="ukuran_panen" required>
                        </div>
                        <div class="form-group">
                            <label for="stocking_density">Padat Tebar:</label>
                            <input type="number" class="form-control" id="stocking_density" name="stocking_density" required>
                        </div>
                        <div class="form-group">
                            <label for="fcr">FCR:</label>
                            <input type="text" class="form-control" id="fcr" name="fcr" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_sampling">Waktu Sampling:</label>
                            <input type="number" class="form-control" id="waktu_sampling" name="waktu_sampling" required>
                        </div>
                        <div class="form-group">
                            <label for="fish_food_id">Nama Pakan:</label>
                            <select class="form-control" id="fish_food_id" name="fish_food_id" required>
                                @foreach ($fishFoods as $fishFood)
                                <option value="{{ $fishFood->id }}">{{ $fishFood->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Ikan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Jenis Ikan</div>

                <div class="card-body">
                    <form action="{{ route('fishTypes.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga:</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_awal">Ukuran Awal:</label>
                            <input type="number" class="form-control" id="ukuran_awal" name="ukuran_awal" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_panen">Harvest Time:</label>
                            <input type="text" class="form-control" id="waktu_panen" name="waktu_panen" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran_panen">Ukuran Panen:</label>
                            <input type="number" class="form-control" id="ukuran_panen" name="ukuran_panen" required>
                        </div>
                        <div class="form-group">
                            <label for="stocking_density">Padat Tebar:</label>
                            <input type="number" class="form-control" id="stocking_density" name="stocking_density" required>
                        </div>
                        <div class="form-group">
                            <label for="fcr">FCR:</label>
                            <input type="text" class="form-control" id="fcr" name="fcr" required>
                        </div>
                        <div class="form-group">
                            <label for="fish_food_id">Makanan:</label>
                            <select class="form-control" id="fish_food_id" name="fish_food_id" required>
                                @foreach ($fishFoods as $fishFood)
                                <option value="{{ $fishFood->id }}">{{ $fishFood->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Ikan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
