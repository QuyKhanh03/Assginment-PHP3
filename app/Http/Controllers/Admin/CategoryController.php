<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;


//Thư viện hỗ trợ slug
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const OBJECT = 'admin.category';
    const DOT = '.';
    public function index()
    {
//        $data = Category::all();
        $data = Category::query()->orderByDesc('id')->get();

        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('data'));
//        return view('') khúc này ông tự làm nhé
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view() form thêm
        return view(self::OBJECT . self::DOT . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //đoạn validate naày ông tìm trên laravel.com nó có nhé
//        Category::query()->create($request->all());
        Category::query()->create(
            ['name' => $request->name, 'slug' => $this->createSlug($request->name)]
        );
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
//    public function show(string $id)
//    {
//        //
//    }
//cái func này mình k dùng ông ạ

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $category = Category::query()->findOrFail($id);
        $category = Category::query()->findOrFail($id);
        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('category'));
        //view ra form sửa truyền biến category vào hàm compact giống php2 nha
//        return view()
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
//        Category::query()->update()
        Category::query()->where('id', $id)->update([
            'name' => $request->name,
            'slug' => $this->createSlug(
                $request->name
            )
        ]);
        return redirect()->route('category.index');
//        mấy cái hàm này ông chịu khó đọc lại document là rõ ngay nó có mấy kiểu cơ
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('category.index');
        //return index
        //thế là hòm hòm rồi đó ông cố gắng trong ngày mai xong nhé.ok ô
    }

    //Slug
    public function createSlug($slug) {
        $slug = Str::slug($slug);
        return $slug;
    }
}
