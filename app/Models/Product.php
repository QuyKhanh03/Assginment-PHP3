<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'code_product',
            'name',
            'slug',
            'image_primary',
            'price',
            'short_description',
            'detail_description',
            'sale_off',
            'status',
            'featured',
            'category_id',
            'brand_id',
    ];
}
