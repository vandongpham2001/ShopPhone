@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" value="{{$users->name}}" class="form-control" name="name" id="name" >
            </div>
            <div class="form-group">
                <label for="name">Ngày sinh</label>
                <input type="text" value="{{$users->NgaySinh}}" class="form-control" name="NgaySinh" id="NgaySinh" >
            </div>
            <div class="form-group">
                <label for="name">Địa chỉ</label>
                <input type="text" value="{{$users->DiaChi}}" class="form-control" name="DiaChi" id="diachi" placeholder="Nhập nội dung">
            </div>
            <div class="form-group">
                <label for="name">Giới tính</label>
                <select name="GioiTinh" id="GioiTinh" class="form-control">
                    <option selected="{{$users->GioiTinh}}">{{$users->GioiTinh}}</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Nữ">Nam</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Số điện thoại</label>
                <input type="text" value="{{$users->SDT}}" class="form-control" name="SDT" id="SDT" placeholder="Nhập nội dung">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" value="{{$users->email}}" class="form-control" name="email" id="email" placeholder="Nhập nội dung">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endsection
