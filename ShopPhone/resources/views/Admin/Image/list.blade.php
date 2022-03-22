@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Tên sản phẩm</th>
{{--            <th>Ảnh</th>--}}
            <th>Update</th>
            <th style="width: 150px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
{{--        {!! \App\Helpers\Helper::image($images) !!}--}}
{!! \App\Helpers\Helper::productImage($products) !!}
        </tbody>
    </table>
    {!! $products->links('pagination::bootstrap-4') !!}
@endsection
