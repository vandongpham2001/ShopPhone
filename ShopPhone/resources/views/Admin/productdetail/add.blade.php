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
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Ram</label>
                <select class="form-control" name="RAM" id="RAM">
                    <option value="None">None</option>
                    <option value="4GB">4GB</option>
                    <option value="6GB">6GB</option>
                    <option value="8GB">8GB</option>
                    <option value="12GB">12GB</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Rom</label>
                <select class="form-control" name="ROM" id="ROM">
                    <option value="None">None</option>
                    <option value="32G">32GB</option>
                    <option value="64G">64GB</option>
                    <option value="128G">128GB</option>
                    <option value="256G">256GB</option>
                    <option value="512G">512GB</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">CPU</label>
                <input type="Text" class="form-control" id="CPU" name="CPU">
            </div>
            <div class="form-group">
                <label for="image">Màn Hình</label>
                <input type="text" class="form-control" id="ManHinh" name="ManHinh">
            </div>
            <div class="form-group">
                <label for="image">Pin</label>
                <input type="text" class="form-control" id="Pin" name="Pin">
            </div>
            <div class="form-group">
                <label for="image">Camera</label>
                <input type="text" class="form-control" id="Camera" name="Camera">
            </div>
            <div class="form-group">
                <label for="image">Màu sắc</label>
                <select class="form-control" name="Color" id="Color">
                    <option value="Đỏ">Đỏ</option>
                    <option value="Đen">Đen</option>
                    <option value="Xanh">Xanh</option>
                    <option value="Vàng">Vàng</option>
                    <option value="Trắng">Trắng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Số lượng</label>
                <input type="number" class="form-control" id="soluong" name="soluong">
            </div>
            <div class="form-group">
                <label for="image">Đơn giá</label>
                <input type="number" class="form-control" id="dongia" name="dongia">
            </div>
            <div class="form-group">
                <label for="image">Mô tả</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Chi tiết</button>
        </div>
        @csrf
    </form>
@endsection
