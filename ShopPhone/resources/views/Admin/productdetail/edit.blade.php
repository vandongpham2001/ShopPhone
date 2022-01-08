@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            {{--            <div class="form-group">--}}
            {{--                <label for="name">Tên sản phẩm</label>--}}
            {{--                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">--}}
            {{--            </div>--}}
{{--            {{dd($productdetails)}}--}}
            <div class="form-group">
                <label for="category">Tên sản phẩm</label>
{{--                <label class="form-control">{{$productdetails->product->name}}</label>--}}
                <select class="form-control" name="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}" {{$productdetails->product_id==$product->id ? 'selected' : ''}}>{{$product->name}}</option>
                    @endforeach
                </select>
{{--                <select class="form-control" name="product_id">--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <option value="{{$category->id}}" {{$productType->category_id==$category->id ? 'selected' : '' }}>{{$category->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="RAM">Ram</label>
                    <select class="form-control" name="RAM" id="RAM">
                        <option value="{{$productdetails->RAM}}">{{$productdetails->RAM}}</option>
                        <option value="None">None</option>
                        <option value="4GB">4GB</option>
                        <option value="6GB">6GB</option>
                        <option value="8GB">8GB</option>
                        <option value="12GB">12GB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ROM">ROM</label>
                    <select class="form-control" name="ROM" id="ROM">
                        <option value="{{$productdetails->ROM}}">{{$productdetails->ROM}}</option>
                        <option value="None">None</option>
                        <option value="32G">32GB</option>
                        <option value="64G">64GB</option>
                        <option value="128G">128GB</option>
                        <option value="256G">256GB</option>
                        <option value="512G">512GB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="CPU">CPU</label>
                    <input type="Text" class="form-control" id="CPU" name="CPU" value="{{$productdetails->CPU}}">
                </div>

                <div class="form-group">
                    <label for="ManHinh">Màn Hình</label>
                    <input type="Text" class="form-control" id="ManHinh" name="ManHinh" value="{{$productdetails->ManHinh}}">
                </div>
                <div class="form-group">
                    <label for="Pin">Pin</label>
                    <input type="Text" class="form-control" id="Pin" name="Pin" value="{{$productdetails->Pin}}">
                </div>
                <div class="form-group">
                    <label for="Camera">Camera</label>
                    <input type="Text" class="form-control" id="Camera" name="Camera" value="{{$productdetails->Camera}}">
                </div>
                <div class="form-group">
                    <label for="Color">Màu sắc</label>
                    <select class="form-control" name="Color" id="Color">
                        <option value="{{$productdetails->Color}}">{{$productdetails->Color}}</option>
                        <option value="Đỏ">Đỏ</option>
                        <option value="Đen">Đen</option>
                        <option value="Xanh">Xanh</option>
                        <option value="Vàng">Vàng</option>
                        <option value="Trắng">Trắng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="soluong">Số lượng</label>
                    <input type="number" class="form-control" id="soluong" name="soluong" value="{{$productdetails->SoLuong}}">
                </div>
                <div class="form-group">
                    <label for="dongia">Đơn giá</label>
                    <input type="number" class="form-control" id="dongia" name="dongia" value="{{$productdetails->DonGia}}">
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
