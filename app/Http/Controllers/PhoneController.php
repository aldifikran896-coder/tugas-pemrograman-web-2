<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::latest()->get();

        return view('phones.index', compact('phones'));
    }

    public function create()
    {
        return view('phones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'ram' => 'required',
            'storage' => 'required',
        ]);

        Phone::create($request->all());

        return redirect('/phones')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Phone $phone)
    {
        return view('phones.edit', compact('phone'));
    }

    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'ram' => 'required',
            'storage' => 'required',
        ]);

        $phone->update($request->all());

        return redirect('/phones')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();

        return redirect('/phones')
            ->with('success', 'Data berhasil dihapus');
    }
}