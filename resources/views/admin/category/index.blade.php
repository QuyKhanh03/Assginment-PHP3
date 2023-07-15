@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <h3>Danh mục sản phẩm</h3>
        </div>
        <div class="row">

                <div class="card">
                    <div class="card-header row">
                        <div class="col"><h4>Danh mục sản phẩm</h4></div>
                        <div class="col">
                            <a href="{{ route('category.create') }}"><button class="btn btn-primary btn-sm btn-add float-end">Thêm mới</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Slug</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $category)
                                    <tr>
                                        <th>{{ $category->id }}</th>
                                        <th>{{ $category->name }}</th>
                                        <th>{{ $category->slug }}</th>

                                        <th>{{ date('d-m-Y',strtotime($category->created_at)) }}</th>

                                        <th>{{ date('d-m-Y',strtotime($category->updated_at)) }}</th>
                                        <th>
                                            <a class="btn btn-success" href="{{ route('category.edit', $category->id) }}">Sửa</a>
                                            <button class="btn btn-danger"
                                                    onclick="document.getElementById('category-{{ $category->id }}').submit();">
                                                Xóa
                                            </button>
                                            <form action="{{ route('category.destroy', $category) }}"
                                                  id="category-{{ $category->id }}"
                                                  method="post" >
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Slug</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Hành động</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="modal fade" id="modal-category" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form-category" >
                        @csrf
                        <input type="hidden" value="" name="id" id="id" class="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary save">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
