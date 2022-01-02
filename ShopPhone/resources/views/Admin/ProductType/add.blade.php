@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên loại sản phẩm</label>
                <input type="text" value="{{old('name')}}" class="form-control" name="name" id="name" placeholder="Nhập tên loại sản phẩm">
            </div>

            <div class="form-group">
                <label for="category">Danh mục</label>
                <select class="form-control" name="category_id">
{{--                    <option value="0">Danh mục cha</option>--}}
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea id="content" name="description" class="form-control">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Ảnh loại sản phẩm</label>
                <input type="file" class="form-control" id="upload" name="file">
                <div id="image_show">

                </div>
                <input type="hidden" name="image" id="image">
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=1 type="radio" id="active" name="status" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=0 type="radio" id="no_active" name="status">
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo mới</button>
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
