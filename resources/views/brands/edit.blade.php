@extends('layouts.app')

@section('content')

<h2>Edit Brand</h2>

<form action="{{ route('brands.update', $brand->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ $brand->name }}">
    </div>

    <div class="mb-3">
        <label>Negara</label>

        <input type="text"
               name="country"
               class="form-control"
               value="{{ $brand->country }}">
    </div>

    <div class="mb-3">
        <label>Tahun Berdiri</label>

        <input type="number"
               name="founded_year"
               class="form-control"
               value="{{ $brand->founded_year }}">
    </div>

    <button class="btn btn-success">
        Update
    </button>

</form>

@endsection