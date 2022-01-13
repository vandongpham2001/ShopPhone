@extends('main')

@section('content')
    {{--    {{dd($carts)}}--}}
{{--    {{dd($products)}}--}}
    <form method="POST">
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="/">Home</a>
                            <i>|</i>
                        </li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="privacy py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <!-- tittle heading -->
                <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                    <span>G</span>iỏ Hàng
                </h3>
                <!-- //tittle heading -->
                @include('admin.alert')
                @php
                    $total=0;
                @endphp
                @if (count($products)!=0)
                    {{--                <form method="POST">--}}
                    <div class="checkout-right">
                        <h4 class="mb-sm-4 mb-3">Your shopping cart contains:
                            <span>{{count($products)}}</span>
                        </h4>
                        <div class="table-responsive">
                            <table class="timetable_sub">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Product</th>
                                    <th>Quality</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($products as $key=>$product)
                                    @php
                                        $priceEnd=$product->DonGia * $carts[$product->id];
                                        $total+=$priceEnd;
                                    @endphp
                                    <tr class="rem1">
                                        <td class="invert">{{$i++}}</td>
                                        <td class="invert-image">
                                            <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">
                                                <img src="{{$product->image}}" alt=" " class="img-responsive"
                                                     width="50px" height="100px">
                                            </a>
{{--                                            <input type="hidden" name="productdetail_id" value="{{$product->id}}">--}}
                                        </td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <div class="entry value-minus">&nbsp;</div>
                                                    {{--                                                    <div class="entry value">--}}
                                                    {{--                                                        <span name="num_product[{{$product->id}}]">{{$carts[$product->id]}}</span>--}}
                                                    <input class="text-center entry value" type="number"
                                                           name="num_product[{{$product->id}}]"
                                                           value="{{$carts[$product->id]}}">
                                                    {{--                                                    </div>--}}
                                                    <div class="entry value-plus active">&nbsp;</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{$product->name}}</td>
                                        <td class="invert">{{number_format($product->DonGia, 0, '', '.')}}</td>
                                        <td class="invert">{{number_format($priceEnd, 0, '', '.')}}</td>
                                        <td class="invert">
                                            <div class="rem">
                                                <a href="/carts/delete/{{$product->id}}">
                                                    <div class="close1"></div>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <h4 class="mb-sm-4 mb-3">Tổng tiền: {{number_format($total, 0, '', '.')}}</h4>
                            </table>
                        </div>
                    </div>
                <div class="row my-4">
                    <input type="submit" name="submit" value="Cập nhật giỏ hàng" formaction="/update-cart"
                           class="btn my-2 my-sm-0">
                </div>
                    @csrf
                    {{--                </form>--}}
                    <div class="checkout-left">
                        <div class="address_form_agile mt-sm-5 mt-4">
                            <h4 class="mb-sm-4 mb-3">Thông tin khách hàng</h4>
                            {{--                        <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">--}}
                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row">
                                        <div class="controls form-group">
                                            <input class="billing-address-name form-control" type="text" value="{{old('name')}}" name="name"
                                                   placeholder="Tên" >
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" value="{{old('phone')}}" placeholder="Số điện thoại"
                                                           name="phone" >
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" value="{{old('address')}}" placeholder="Địa chỉ"
                                                           name="address" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="controls form-group">
                                            <input type="text" class="form-control" placeholder="Email" value="{{old('email')}}" name="email"
                                                   >
                                        </div>
                                        <div class="controls form-group">
                                            <textarea class="form-control" placeholder="Ghi chú" value="{{old('content')}}"
                                                      name="content"></textarea>
                                        </div>
                                        {{--                                        <div class="controls form-group">--}}
                                        {{--                                            <select class="option-w3ls">--}}
                                        {{--                                                <option>Loại địa chỉ</option>--}}
                                        {{--                                                <option>Văn phòng</option>--}}
                                        {{--                                                <option>Nhà</option>--}}
                                        {{--                                                <option>Commercial</option>--}}

                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                    {{--                                <button class="submit check_out btn">Delivery to this Address</button>--}}
                                </div>
                            </div>
                            {{--                        </form>--}}
{{--                            <div class="checkout-right-basket">--}}
                                <button class="btn my-2 my-sm-0">Đặt hàng
                                    <span class="far fa-hand-point-right"></span>
                                </button>
{{--                            </div>--}}
                        </div>
                    </div>
                @else
                    <div class="text-center"><h2 class="mb-sm-4 mb-3">Giỏ hàng trống</h2></div>
                @endif
            </div>
        </div>
    </form>
@endsection
