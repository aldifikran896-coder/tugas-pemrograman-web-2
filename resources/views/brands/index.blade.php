@extends('layouts.app')

@section('content')

<h2>Data Brand</h2>

<form method="GET" class="mb-3">
    <input type="text"
           name="search"
           class="form-control"
           placeholder="Cari brand...">
</form>

<a href="{{ route('brands.create') }}"
   class="btn btn-primary mb-3">
   Tambah Brand
</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Negara</th>
        <th>Tahun Berdiri</th>
        <th>Aksi</th>
    </tr>

    @foreach($brands as $brand)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $brand->name }}</td>
        <td>{{ $brand->country }}</td>
        <td>{{ $brand->founded_year }}</td>

        <td>
            <a href="{{ route('brands.show', $brand->id) }}"
               class="btn btn-info btn-sm">
               Detail
            </a>

            <a href="{{ route('brands.edit', $brand->id) }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            <form action="{{ route('brands.destroy', $brand->id) }}"
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

</table>

{{ $brands->links() }}

@endsection