@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Nhà sản xuất</th>
            <th>Thời gian bảo hành</th>
            <th>Kích hoạt</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::product($products) !!}
        </tbody>
    </table>
@endsection
