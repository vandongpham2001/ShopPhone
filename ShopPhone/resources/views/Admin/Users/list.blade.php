@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Họ Tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::users($users) !!}
        </tbody>
    </table>
    {!! $users->links('pagination::bootstrap-4') !!}
@endsection
