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
    public function index(Request $request) {
        if($request->filter) {
            $filter = $request->filter;
            if($filter == 'price_asc') {
                $products = Product::query()->orderBy('price', 'asc')->paginate(8);

            } else if($filter == 'price_desc') {
                $products = Product::query()->orderBy('price', 'desc')->paginate(8);
            } else if($filter == '') {
                $products = Product::query()->paginate(12);
            } else {
                $products = Product::query()->where('brand_id', '=', $filter)->paginate(8);
            }
        } else {
            $products = Product::query()->paginate(8);
        }
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
        $alsoLike = Product::query()->where('brand_id', '=', $product->brand_id)->where('id', '!=', $id)->get();
        return view('client.product.show', compact('product', 'product_images', 'attributes', 'alsoLike'));
    }
    //lọc sản phẩm theo giá tăng và giảm
//    public function filter(Request $request) {
//       $filter = $request->filter;
//         if($filter == 'price_asc') {
//              $products = Product::orderBy('price', 'asc')->paginate(12);
//         } else {
//              $products = Product::orderBy('price', 'desc')->paginate(12);
//         }
//         return response()->json($products);
//    }

}
