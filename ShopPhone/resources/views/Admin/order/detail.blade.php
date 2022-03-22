@extends('admin.main')

@section('content')
    <div class="order">
        <ul>
            <li>Tên khách hàng: <strong>{{$order->user->name}}</strong></li>
            <li>Địa chỉ: <strong>{{$order->address}}</strong></li>
            <li>Số điện thoại: <strong>{{$order->sdt}}</strong></li>
            <li>Trạng thái: <strong>{{$order->status}}</strong></li>
        </ul>
    </div>

    <div class="detail">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Mã đơn hàng</th>
            <th>Mã sản phẩm</th>
            <th>Ram</th>
            <th>Rom</th>
            <th>Màu</th>
            <th>Số lượng</th>
            <th>Giá mua</th>

            <th style="width: 100px">&nbsp;</th>
        </tr>

        </thead>
        <tbody>
{{--        {{dd($orderderdetails)}}--}}
        {!! \App\Helpers\Helper::orderdetail($orderdetails) !!}

        </tbody>

    </table>

    </div>
@endsection
