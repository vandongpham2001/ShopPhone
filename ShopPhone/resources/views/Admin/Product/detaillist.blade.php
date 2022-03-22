@extends('admin.main')

@section('content')
    <div class="order">
        <ul>
            <li>Tên sản phẩm: <strong>{{$product->name}}</strong></li>
            <li>Loại sản phẩm: <strong>{{$product->category->name}}</strong></li>
            <li>Nhà sản xuất: <strong>{{$product->NSX}}</strong></li>
            <li>Thời gian bảo hành: <strong>{{$product->ThoiGianBaoHanh}}</strong></li>
            <a class="button-a-mobile-collapsed" href="/admin/productdetails/add">Thêm cấu hình sản phẩm</a>
        </ul>
    </div>

    <div class="detail">
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
            {{--            {{dd($productdetails)}}--}}
            {!! \App\Helpers\Helper::productdetail($productdetails) !!}
            </tbody>

        </table>

    </div>
@endsection
