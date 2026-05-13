@extends('layouts.app')

@section('content')

<h2>Tambah Brand</h2>

<form action="{{ route('brands.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Negara</label>
        <input type="text" name="country" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tahun Berdiri</label>
        <input type="number" name="founded_year" class="form-control">
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection