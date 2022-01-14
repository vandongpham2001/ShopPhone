@extends('admin.main')

@section('content')
{{--    {{dd($doanhthus)}}--}}
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Ram</th>
            <th>Rom</th>
            <th>CPU</th>
            <th>Màu</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>

            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::orderdetail_thongke($orderdetails) !!}
        </tbody>
    </table>
    {!! $orderdetails->links('pagination::bootstrap-4') !!}
    {!! \App\Helpers\Helper::doanhthu_thongke($doanhthus) !!}
@endsection
