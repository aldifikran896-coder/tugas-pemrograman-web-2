@extends('layouts.app')

@section('content')

<h2>Detail Brand</h2>

<ul class="list-group mb-4">
    <li class="list-group-item">
        Nama: {{ $brand->name }}
    </li>

    <li class="list-group-item">
        Negara: {{ $brand->country }}
    </li>

    <li class="list-group-item">
        Tahun Berdiri: {{ $brand->founded_year }}
    </li>
</ul>

<h4>Daftar Phone</h4>

<table class="table table-bordered">

    <tr>
        <th>Model</th>
        <th>RAM</th>
        <th>Storage</th>
    </tr>

    @foreach($phones as $phone)
    <tr>
        <td>{{ $phone->model }}</td>
        <td>{{ $phone->ram }}</td>
        <td>{{ $phone->storage }}</td>
    </tr>
    @endforeach

</table>

@endsection