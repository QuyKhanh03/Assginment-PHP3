@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0 ">
            <h2 class="col">Quản lý sản phẩm</h2>
            <div class="col">
                <a href="{{ route('products.create') }}" class="btn btn-primary float-end">Thêm mới sản phẩm</a>
            </div>

        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_product" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Ảnh</th>
                                    <th>Danh mục</th>
                                    <th>Thương hiệu</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('assets/js/admin/product/custom.js') }}"></script>
@endsection


