<?php

namespace App\Http\Controllers\Admin;
use App\Models\Brand;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandStoreRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getBrand(Request $request) {
        if($request->ajax()) {
            $data = Brand::query()->orderByDesc('id')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function($row) {
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'"  class=" btn btn-danger btn-delete">Xóa</a>';
                    $btn .= '  <a href="javascript:void(0)" data-id="'.$row->id.'" class="edit btn btn-success btn-edit">Sửa</a>';
                    return $btn;
                })
                ->addColumn('created_at', function($row) {
                    return date('d-m-Y', strtotime($row->created_at));
                })
                ->addColumn('updated_at', function($row) {
                    return date('d-m-Y', strtotime($row->updated_at));
                })
                ->rawColumns(['action', 'created_at', 'updated_at'])
                ->make(true);
        }
    }
    public function index()
    {
        $title = "Brand - Admin Sales Manager System";
        return view('admin.brand.index', compact('title'));
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

    public function store(BrandStoreRequest $request)
    {
       Brand::query()->create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Thêm mới thành công'
        ], Response::HTTP_OK);

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
       $item = Brand::query()->findOrFail($id);
       return response()->json(['data'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Brand::query()->findOrFail($id);
        $item->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thành công'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Brand::query()->findOrFail($id);
        $item->delete();
        return response()->json([
            'success' => true,
            'message' => 'Xóa thành công'
        ], Response::HTTP_OK);
    }
}
