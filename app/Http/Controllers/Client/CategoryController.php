<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public static function getCategory()
    {
        $categories = Category::all();
        return $categories;
    }

   public function getProductBySlug(Request $request, string $slug)
    {
        if($request->filter) {
            $filter = $request->filter;
            if($filter == 'price_asc') {
                $products = Product::query()->orderBy('price', 'asc')->paginate(12);

            } else if($filter == 'price_desc') {
                $products = Product::query()->orderBy('price', 'desc')->paginate(12);
            } else if($filter == '') {
                $products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
                    ->where('categories.slug', $slug)
                    ->paginate(8);
            }
        }else {
            $products = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
                ->where('categories.slug', $slug)
                ->paginate(8);
        }

        $categories = Category::all();

        return view('client.category.index', compact('products', 'categories'));
    }
    //get product by id brand
    public static function getBrand()
    {
        $brands = Brand::all();
        return $brands;
    }
    public function getProductById(Request $request,string $id)
    {
        $categories = Category::all();
        if($request->filter) {
            $filter = $request->filter;
            if($filter == 'price_asc') {
                $products = Product::query()->orderBy('price', 'asc')->paginate(8);

            } else if($filter == 'price_desc') {
                $products = Product::query()->orderBy('price', 'desc')->paginate(8);
            } else if($filter == '') {
                $products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
                ->where('brands.id', $id)
                    ->paginate(8);
            }
        }else {
            $products = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
                ->where('brands.id', $id)
                ->paginate(8);
        }


        return view('client.category.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
