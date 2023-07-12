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
    public function getAttribute(Request $request) {
        if($request->ajax()){
            $data = Attribute::all();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action',function ($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'"  class=" btn btn-danger removeItem">Remove</a>';
                    $btn .= '  <a href="javascript:void(0)" data-id="'.$row->id.'" class="edit btn btn-success editItem">Edit</a>';
                    $btn .= '  <a href="javascript:void(0)" data-id="'.$row->id.'" class="view btn btn-info viewItem">View</a>';
                    return $btn;
                })
                ->addColumn('created_at',function ($row){
                    return date('d-m-Y',strtotime($row->created_at));
                })
                ->addColumn('updated_at',function ($row){
                    return date('d-m-Y',strtotime($row->updated_at));
                })
                ->rawColumns(['action','created_at','updated_at'])
                ->make(true);
        }
    }
    public function index()
    {
        $title = "Attributes - Admin Sales Manager System";
        return view('admin.attribute.index',compact('title'));
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
