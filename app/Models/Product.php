<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sku',
        'category',
        'brand',
        'price',
        'quantity', // <--- quantity
        'description',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
