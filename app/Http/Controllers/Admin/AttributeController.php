<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Response;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAttribute(Request $request)
    {
        if ($request->ajax()) {
            $data = Attribute::all();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '"  class=" btn btn-danger btn-delete">Xóa</a>';
                    $btn .= '  <a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-success btn-edit">Sửa</a>';
                    return $btn;
                })
                ->addColumn('created_at', function ($row) {
                    return date('d-m-Y', strtotime($row->created_at));
                })
                ->addColumn('updated_at', function ($row) {
                    return date('d-m-Y', strtotime($row->updated_at));
                })
                ->rawColumns(['action', 'created_at', 'updated_at'])
                ->make(true);
        }
    }

    public function index()
    {
        $title = "Attributes - Admin Sales Manager System";
        return view('admin.attribute.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function validateform($request)
    {
        $request->validate([
            'name' => 'required',
            'values' => 'required'
        ],
            [
                'name.required' => 'Tên thuộc tính không được để trống',
                'name.unique' => 'Tên thuộc tính đã tồn tại',
                'values.required' => 'Giá trị thuộc tính không được để trống'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateform($request);
        Attribute::query()->create([
            'name' => $request->name,
            'values' => $request->values
        ]);
        return response()->json(['success' => 'Thêm thuộc tính thành công']);
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
        $model = Attribute::query()->findOrFail($id);
        return response()->json(['data' => $model]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateform($request);
        Attribute::query()->where('id', $id)->update([
            'name' => $request->name,
            'values' => $request->values
        ]);
        return response()->json(['success' => 'Cập nhật thuộc tính thành công']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Attribute::query()->findOrFail($id);
        $model->delete();
        return response()->json(['success' => 'Xóa thuộc tính thành công']);
    }
}
