@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Data HP</h2>

    <a href="{{ route('phones.create') }}" class="btn btn-primary">
        Tambah HP
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($phones as $phone)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $phone->brand }}</td>
            <td>{{ $phone->model }}</td>
            <td>Rp {{ number_format($phone->price) }}</td>
            <td>{{ $phone->stock }}</td>
            <td>{{ $phone->ram }}</td>
            <td>{{ $phone->storage }}</td>

            <td>
                <a href="{{ route('phones.edit', $phone->id) }}"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="{{ route('phones.destroy', $phone->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection