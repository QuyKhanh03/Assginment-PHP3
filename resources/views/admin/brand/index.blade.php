@extends('admin.layout.master')
@section('content')
    <div class="row p-2">
        <div class="col ">
            <div class="card ">
                <div class="card-header row">
                    <div class="col">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary float-end btn-create">Thêm mới hãng</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="brandTable" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên hãng</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Thao tác</th>
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

    <div class="modal fade" id="modal-brand" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post"  id="form-brand">
                        @csrf
                        <input type="hidden" value="" name="id" id="id" class="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên hãng</label>
                            <input type="text" class="form-control name" id="name" name="name"
                                   placeholder="Nhập tên hãng">
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
@section('script')
    <script src="{{asset('assets/js/admin/brand/custom.js')}}"></script>
@endsection
