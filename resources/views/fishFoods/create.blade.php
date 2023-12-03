{{-- Halaman untuk membuat data jenis ikan --}}
@extends('layouts.admin')

@section('title', 'Create')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Jenis Ikan</div>
                <div class="card-body">
                    <form action="{{ route('fishFoods.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga:</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Ikan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
