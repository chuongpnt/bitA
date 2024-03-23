<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Prices extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'original_price', 'discount', 'sold'];

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }


}
