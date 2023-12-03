{{-- Menu input kebutuhan perikanan sampling atau mingguan --}}
@extends('layouts.admin')

@section('title', 'Kalkulator Sampling')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Kebutuhan Pakan Perikanan Sampling') }}</h1>
    <div class="container">
        <br>
        {{-- Menu input kebutuhan perikanan sampling atau mingguan --}}
        <form action="{{ route('fish-farm-sampling.calculate') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="fish_type">Jenis Ikan</label>
                <select class="form-control" id="fish_type" name="fish_type">
                    @foreach($fishTypes as $fishType)
                        <option value="{{ $fishType->id }}">{{ $fishType->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ukuran_ikan_sampling">Ukuran Ikan gram</label>
                <input type="number" class="form-control" id="ukuran_ikan_sampling" name="ukuran_ikan_sampling" min="1" required>
            </div>

            <div class="form-group">
                <label for="area">Luas Kolam (m<sup>2</sup>)</label>
                <input type="number" class="form-control" id="area" name="area" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>
@endsection
