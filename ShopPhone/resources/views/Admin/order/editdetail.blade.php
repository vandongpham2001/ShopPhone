@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
           
            <div class="form-group">
                <label for="category">Tên sản phẩm:</label>
                <label for="id" class="form-control">{{$orderdetail->productdetail->product->name}}</label>
            </div>
            <div class="form-group">
                <label for="category">Số lượng:</label>
                <input type="number" name="soLuong" id="soLuong" class="form-control" value="{{$orderdetail->soLuong}}">
            </div>
            <div class="form-group">
                <label for="category">Đơn giá:</label>
                <input type="text" name="giaMua" id="giaMua" class="form-control" value="{{$orderdetail->giaMua}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        @csrf
    </form>
@endsection
