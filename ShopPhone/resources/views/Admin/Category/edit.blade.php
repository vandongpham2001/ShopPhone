@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name" placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label for="category">Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{$category->parent_id==0 ? 'selected':''}}>Danh mục cha</option>
                    @foreach($categories as $categoryParent)
                        <option value="{{$categoryParent->id}}"
                            {{$category->parent_id==$categoryParent->id ? 'selected':''}}>
                            {{$categoryParent->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea id="content" name="description" class="form-control" >{{$category->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Ảnh minh hoạ</label>
                <input type="file" class="form-control" id="upload" name="file">
                <div id="image_show">
                    <a href="{{$category->image}}" target="_blank">
                        <img src="{{$category->image}}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="image" value="{{$category->image}}" id="image">
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=1 type="radio" id="active" name="active" {{$category->status == 1 ? 'checked=""' : ''}}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value=0 type="radio" id="no_active" name="active" {{$category->status == 0 ? 'checked=""' : ''}}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
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
