@extends('admin.layout.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Cập nhật danh mục</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('category.update', $category->id) }}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục::</label>
                        <input type="text" class="form-control input-default " id="name" placeholder="Tên danh mục:" name="name" value="{{ $category->name }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection


