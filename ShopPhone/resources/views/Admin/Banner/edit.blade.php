@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nội dung</label>
                <input type="text" value="{{$banner->noiDung}}" class="form-control" name="noiDung" id="noiDung" placeholder="Nhập nội dung">
            </div>
            <div class="form-group">
                <label for="image">Ảnh</label>
                <input type="file" class="form-control" id="upload" name="file">
                <div id="image_show">
                    <a href="{{$banner->image}}" target="_blank">
                        <img src="{{$banner->image}}" width="100px">
                    </a>
                </div>
                <input type="hidden" value="{{$banner->image}}" name="image" id="image">
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
