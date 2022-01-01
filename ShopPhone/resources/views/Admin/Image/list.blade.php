@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::image($images) !!}
        </tbody>
    </table>
@endsection
