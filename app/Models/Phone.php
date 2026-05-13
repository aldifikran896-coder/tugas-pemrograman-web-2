<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'model',
        'price',
        'stock',
        'ram',
        'storage',
        'description'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}