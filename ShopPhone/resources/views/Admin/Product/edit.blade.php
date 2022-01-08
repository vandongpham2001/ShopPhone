@extends('admin.main')

@section('head')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" value="{{$product->name}}" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-group">
                <label for="category">Loại sản phẩm</label>
                <select class="form-control" name="productType_id">
                    {{--                    <option value="0">Danh mục cha</option>--}}
                    @foreach($productTypes as $productType)
                        <option value="{{$productType->id}}" {{$product->productType->id==$productType->id ? 'selected':''}}>{{$productType->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Nhà sản xuất</label>
                <input type="text" value="{{$product->NhaSX}}" class="form-control" name="NhaSX" id="NhaSX" placeholder="Nhập nhà sản xuất">
            </div>
            <div class="form-group">
                <label for="name">Thời gian bảo hành</label>
                <input type="text" value="{{$product->ThoiGianBaoHanh}}" class="form-control" name="ThoiGianBaoHanh" id="ThoiGianBaoHanh" placeholder="Nhập thời gian bảo hành">
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
