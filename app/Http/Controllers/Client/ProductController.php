<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(12);
        return view('client.product.index', compact('products'));
    }
    public function show($id) {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
            ->where('products.id', '=', $id)
            ->first();
        $product_images = ProductImage::where('product_id', '=', $id)->get();
        $attributes = Attribute::query()->where('product_id', '=', $id)->get();
        return view('client.product.show', compact('product', 'product_images', 'attributes'));
    }
}
