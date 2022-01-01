@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên loại sản phẩm</th>
            <th>Danh mục</th>
            <th>Mô tả</th>
            <th>Kích hoạt</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::producttype($productTypes) !!}
        </tbody>
    </table>
@endsection
