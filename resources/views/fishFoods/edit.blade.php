{{-- Halaman untuk edit data jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Edit')

@section('main-content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pakan Ikan</div>
                <div class="card-body">
                    <form action="{{ route('fishFoods.update', $fishFood->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $fishFood->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga:</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $fishFood->price }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('fishFoods.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection