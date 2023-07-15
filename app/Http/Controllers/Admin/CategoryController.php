<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
//        return view('') khúc này ông tự làm nhé
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view() form thêm
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //đoạn validate naày ông tìm trên laravel.com nó có nhé

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
        $category = Category::query()->findOrFail($id);
        //view ra form sửa truyền biến category vào hàm compact giống php2 nha
//        return view()
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        Category::query()->update()
//        mấy cái hàm này ông chịu khó đọc lại document là rõ ngay nó có mấy kiểu cơ
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        //return index
        //thế là hòm hòm rồi đó ông cố gắng trong ngày mai xong nhé.ok ô
    }
}
