@extends('layouts.app')

@section('content')

<h2>Edit Phone</h2>

<form action="{{ route('phones.update', $phone->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Brand</label>

        <select name="brand_id"
                class="form-control">

            @foreach($brands as $brand)

            <option value="{{ $brand->id }}"
                {{ $phone->brand_id == $brand->id ? 'selected' : '' }}>

                {{ $brand->name }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Model</label>

        <input type="text"
               name="model"
               class="form-control"
               value="{{ $phone->model }}">

    </div>

    <div class="mb-3">

        <label>Harga</label>

        <input type="number"
               name="price"
               class="form-control"
               value="{{ $phone->price }}">

    </div>

    <div class="mb-3">

        <label>Stock</label>

        <input type="number"
               name="stock"
               class="form-control"
               value="{{ $phone->stock }}">

    </div>

    <div class="mb-3">

        <label>RAM</label>

        <input type="text"
               name="ram"
               class="form-control"
               value="{{ $phone->ram }}">

    </div>

    <div class="mb-3">

        <label>Storage</label>

        <input type="text"
               name="storage"
               class="form-control"
               value="{{ $phone->storage }}">

    </div>

    <div class="mb-3">

        <label>Description</label>

        <textarea name="description"
                  class="form-control">{{ $phone->description }}</textarea>

    </div>

    <button class="btn btn-success">
        Update
    </button>

</form>

@endsection