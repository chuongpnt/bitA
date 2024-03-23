<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prices;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'location', 'image','rating'];

    public function prices()
    {
        return $this->hasOne(Prices::class, 'product_id');
    }


}
