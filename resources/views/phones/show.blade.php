@extends('layouts.app')

@section('content')

<h2>Detail Phone</h2>

<ul class="list-group">

    <li class="list-group-item">
        Brand: {{ $phone->brand->name }}
    </li>

    <li class="list-group-item">
        Model: {{ $phone->model }}
    </li>

    <li class="list-group-item">
        Harga: Rp {{ number_format($phone->price) }}
    </li>

    <li class="list-group-item">
        Stock: {{ $phone->stock }}
    </li>

    <li class="list-group-item">
        RAM: {{ $phone->ram }}
    </li>

    <li class="list-group-item">
        Storage: {{ $phone->storage }}
    </li>

    <li class="list-group-item">
        Description: {{ $phone->description }}
    </li>

</ul>

@endsection