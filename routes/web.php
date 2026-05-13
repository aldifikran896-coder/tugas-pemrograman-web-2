<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PhoneController;

Route::resource('brands', BrandController::class);
Route::resource('phones', PhoneController::class);

Route::get('/', function () {
    return redirect('/brands');
});