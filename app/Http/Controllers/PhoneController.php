<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Brand;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $brand = $request->brand;

        $phones = Phone::with('brand')

            ->when($search, function($query) use ($search) {
                $query->where('model', 'like', "%$search%");
            })

            ->when($brand, function($query) use ($brand) {
                $query->where('brand_id', $brand);
            })

            ->latest()
            ->paginate(5);

        $brands = Brand::all();

        return view('phones.index', compact(
            'phones',
            'brands'
        ));
    }

    public function create()
    {
        $brands = Brand::all();

        return view('phones.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'model' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'ram' => 'required',
            'storage' => 'required',
        ]);

        Phone::create($request->all());

        return redirect('/phones');
    }

    public function edit(Phone $phone)
    {
        $brands = Brand::all();

        return view('phones.edit', compact(
            'phone',
            'brands'
        ));
    }

    public function update(Request $request, Phone $phone)
    {
        $phone->update($request->all());

        return redirect('/phones');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();

        return redirect('/phones');
    }

    public function show(Phone $phone)
    {
        return view('phones.show', compact('phone'));
    }
}