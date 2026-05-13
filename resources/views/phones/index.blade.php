@extends('layouts.app')

@section('content')

<h2>Data Phone</h2>

<div class="row mb-3">

    <div class="col-md-6">

        <form method="GET">

            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Cari model phone...">

        </form>

    </div>

    <div class="col-md-6">

        <form method="GET">

            <select name="brand"
                    class="form-control"
                    onchange="this.form.submit()">

                <option value="">
                    Semua Brand
                </option>

                @foreach($brands as $brand)

                <option value="{{ $brand->id }}">
                    {{ $brand->name }}
                </option>

                @endforeach

            </select>

        </form>

    </div>

</div>

<a href="{{ route('phones.create') }}"
   class="btn btn-primary mb-3">

   Tambah Phone

</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Harga</th>
        <th>RAM</th>
        <th>Storage</th>
        <th>Aksi</th>
    </tr>

    @foreach($phones as $phone)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>
            {{ $phone->brand->name }}
        </td>

        <td>{{ $phone->model }}</td>

        <td>
            Rp {{ number_format($phone->price) }}
        </td>

        <td>{{ $phone->ram }}</td>

        <td>{{ $phone->storage }}</td>

        <td>

            <a href="{{ route('phones.show', $phone->id) }}"
               class="btn btn-info btn-sm">

               Detail

            </a>

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

</table>

{{ $phones->links() }}

@endsection