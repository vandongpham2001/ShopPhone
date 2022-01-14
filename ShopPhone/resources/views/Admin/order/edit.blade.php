@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            {{--            <div class="form-group">--}}
            {{--                <label for="name">Mã đơn hàng</label>--}}
            {{--                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">--}}
            {{--            </div>--}}

            <div class="form-group">
                <label for="category">Mã đơn hàng:</label>
                <label for="id" class="form-control">Đơn hàng: {{$order->id}}</label>
            </div>
            <div class="form-group">
                <label for="category">Địa chỉ:</label>
                <input name="address" id="address" value="{{$order->address}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Số điện thoại:</label>
                <input name="sdt" id="sdt" value="{{$order->sdt}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Trạng thái</label>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="Đã duyệt" type="radio" id="status" name="status" {{$order->status == "Đã duyệt" ? 'checked=""' : ''}}>
                    <label for="status" class="custom-control-label">Đã duyệt</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="Chờ duyệt" type="radio" id="no_status" name="status" {{$order->status == "Chờ duyệt" ? 'checked=""' : ''}}>
                    <label for="no_status" class="custom-control-label">Chờ duyệt</label>
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
