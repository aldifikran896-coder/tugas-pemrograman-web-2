@extends('layouts.app')

@section('content')

<h2>Tambah Phone</h2>

<form action="{{ route('phones.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Brand</label>

        <select name="brand_id"
                class="form-control">

            @foreach($brands as $brand)

            <option value="{{ $brand->id }}">
                {{ $brand->name }}
            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">
        <label>Model</label>

        <input type="text"
               name="model"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga</label>

        <input type="number"
               name="price"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Stock</label>

        <input type="number"
               name="stock"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>RAM</label>

        <input type="text"
               name="ram"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Storage</label>

        <input type="text"
               name="storage"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>

        <textarea name="description"
                  class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection