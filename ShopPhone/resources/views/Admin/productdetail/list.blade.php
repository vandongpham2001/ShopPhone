@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Tên sản phẩm</th>
            <th>Rom</th>
            <th>Ram</th>
            <th>CPU</th>
            <th>Màu</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>

            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::productdetail($productdetails) !!}
        </tbody>
    </table>
    {!! $productdetails->links('pagination::bootstrap-4') !!}
@endsection
