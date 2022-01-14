@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Mã đơn hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th>Tên khách hàng</th>
            <th style="width: 230px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::order($orders) !!}
        </tbody>
    </table>
    {!! $orders->links('pagination::bootstrap-4') !!}
@endsection
