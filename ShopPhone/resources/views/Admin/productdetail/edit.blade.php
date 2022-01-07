@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            {{--            <div class="form-group">--}}
            {{--                <label for="name">Tên sản phẩm</label>--}}
            {{--                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">--}}
            {{--            </div>--}}

            <div class="form-group">
                <label for="category">Tên sản phẩm</label>
                <select class="form-control" name="product_id">
                    {{--                    <option value="0">Danh mục cha</option>--}}
{{--                    <option value="{{$productdetail->product->id}}"}}>{{$productdetail->product->name}}</option>--}}
                    @foreach($products as $product)
                        <option value="{{$product->id}}" {{$productdetail->product_id==$product->id ? 'selected':''}}>{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <input type="text" class="form-control" id="upload" name="file">
                <div id="image_show">
                   <input value="{{$productdetail->RAM}}"
                </div>
                <input type="hidden" name="image" value="{{$productdetail->ROM}}" id="image">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        @csrf
    </form>
@endsection
