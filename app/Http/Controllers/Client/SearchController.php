<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $keyword = $request->search;
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
            ->where('products.name', 'like', '%'.$keyword.'%')
            ->orWhere('categories.name', 'like', '%'.$keyword.'%')
            ->orWhere('brands.name', 'like', '%'.$keyword.'%')
            ->get();
        return response()->json($products);
    }


}
