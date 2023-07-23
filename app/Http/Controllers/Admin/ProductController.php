<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductImage;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function getProduct(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('category_id', function ($row) {
                    $category = Category::find($row->category_id);
                    return $category->name;
                })
                ->addColumn('brand_id', function ($row) {
                    $brand = Brand::find($row->brand_id);
                    return $brand->name;
                })
                ->addColumn('image', function ($row) {
                    $image = '<img src="' . asset('storage/images/products/' . $row->image_primary) . '" width="100px" height="100px">';
                    return $image;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="dropdown ms-auto text-right">
                                <div class="btn-link" style="width: 60px" data-bs-toggle="dropdown">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right" style="border: none;background: none; padding-left: 15px">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-danger shadow btn-xs sharp btn-delete"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'image', 'category_id', 'brand_id'])
                ->make(true);
        }
    }
    public function generateProductCode()
    {
        $prefix = 'KH-';
        $randomCode = Str::random(8);
        $productCode = $prefix . $randomCode;
        while (self::codeExists($productCode)) {
            $randomCode = Str::random(8);
            $productCode = $prefix . $randomCode;
        }
        return $productCode;
    }
    private static function codeExists($productCode)
    {
        $product = Product::where('code_product', $productCode)->first();
        return $product !== null;
    }
    public function index()
    {

        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $code_product = $this->generateProductCode();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product.create', compact('brands', 'categories','code_product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function validationProduct($request,$id =null){
        $rules = [
            'name' => 'required',
            'code_product' => 'required|unique:products,code_product',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'image_primary' => 'required',
        ];
        $messages = [
            'name.required' => 'Tên sản phẩm không được để trống',
            'code_product.required' => 'Mã sản phẩm không được để trống',
            'category_id.required' => 'Danh mục không được để trống',
            'brand_id.required' => 'Thương hiệu không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'image_primary.required' => 'Ảnh sản phẩm không được để trống',
        ];
       if($id) {
           $rules['code_product'] = 'required|unique:products,code_product,'.$id;
       }
        $request->validate($rules, $messages);
    }
    public function createSlug($slug) {
        $slug = Str::slug($slug);
        return $slug;
    }
    public function store(Request $request)
    {
        $this->validationProduct($request);
        $image_primary = $request->file('image_primary');
        Storage::put('public/images/products', $image_primary);
        Product::query()->create([
            'code_product' => $request->code_product,
            'name' => $request->name,
            'slug' => $this->createSlug($request->name),
            'image_primary' => $image_primary->hashName(),
            'price' => $request->price,
            'sale_off' => $request->sale_off,
            'short_description' => $request->short_description,
            'detail_description' => $request->detail_description,
            'status' => $request->status,
            'featured' => $request->featured,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
        ]);
        $id = Product::query()->latest()->first()->id;
        if($request->has('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                Storage::put('public/images/products', $image);
            }
            foreach ($images as $image) {
                ProductImage::query()->create([
                    'product_id' => $id,
                    'image' => $image->hashName()
                ]);
            }
        }
        if($request->has('size_name')) {
            $size_name = $request->size_name;
            foreach ($size_name as $size) {
                Attribute::query()->create([
                    'product_id' => $id,
                    'size_name' => $size
                ]);
            }
        }
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công');
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
        Product::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Xóa sản phẩm thành công'
        ]);
    }
}
