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
}