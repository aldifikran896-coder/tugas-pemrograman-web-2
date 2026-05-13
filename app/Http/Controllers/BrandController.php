<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $brands = Brand::when($search, function($query) use ($search) {
            $query->where('name', 'like', "%$search%");
        })
        ->latest()
        ->paginate(5);

        return view('brands.index', compact('brands'));
    }
    public function edit(Brand $brand)
{
    return view('brands.edit', compact('brand'));
}

public function update(Request $request, Brand $brand)
{
    $brand->update($request->all());

    return redirect('/brands');
}
  public function destroy(Brand $brand)
{
    $brand->delete();

    return redirect('/brands');
}
public function show(Brand $brand)
{
    $phones = $brand->phones;

    return view('brands.show', compact('brand', 'phones'));
}  
}