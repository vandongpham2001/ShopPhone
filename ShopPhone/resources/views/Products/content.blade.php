@extends('main')
@section('content')
    {{--    {{dd(\App\Helpers\Helper::getNameCategory($product->category_id))}}--}}
    <?php //$category_name=\App\Helpers\Helper::getNameCategory($product->category_id) ?>
    {{--{{dd($category_name)}}--}}
    {{--{{dd(\Str::slug($category_name))}}--}}
{{--    {{dd($product)}}--}}

    <!-- page -->
{{--    {{dd($product)}}--}}
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="/">Home</a>
                        <i>|</i>
                    </li>
                    <li>
                        <a href="/category/{{$product->category_id}}-{{\Str::slug(\App\Helpers\Helper::getNameCategory($product->category_id))}}.html">{{\App\Helpers\Helper::getNameCategory($product->category_id)}}</a>
                        <i>|</i>
                    </li>
                    <li>{{$title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    @include('admin.alert')
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
{{--                <span>S</span>ingle--}}
{{--                <span>P</span>age--}}
                {{$title}}
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">

                            <div class="clearfix"></div>
                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides"
                                    style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-874px, 0px, 0px);">
                                    <li data-thumb="images/si3.jpg" class="clone" aria-hidden="true"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;">
                                        <div class="thumb-image">
                                            <img src="{{$product->image}}" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si1.jpg"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;" class=""
                                        data-thumb-alt="">
                                        <div class="thumb-image">
                                            <img src="{{$product->image}}" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si2.jpg" data-thumb-alt=""
                                        style="width: 437px; margin-right: 0px; float: left; display: block;"
                                        class="flex-active-slide">
                                        <div class="thumb-image">
                                            <img src="{{$product->image}}" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si3.jpg" data-thumb-alt=""
                                        style="width: 437px; margin-right: 0px; float: left; display: block;">
                                        <div class="thumb-image">
                                            <img src="{{$product->image}}" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si1.jpg"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;"
                                        class="clone" aria-hidden="true">
                                        <div class="thumb-image">
                                            <img src="{{$product->image}}" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                </ul>
                            </div>
                            <ol class="flex-control-nav flex-control-thumbs">
                                <li><img src="images/si1.jpg" class="" draggable="false"></li>
                                <li><img src="images/si2.jpg" draggable="false" class="flex-active"></li>
                                <li><img src="images/si3.jpg" draggable="false"></li>
                            </ol>
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
{{--                    <h3 class="mb-3">{{$product->name}}</h3>--}}
                    <p class="mb-3">
                        <span class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                        <del class="mx-2 font-weight-light">$280.00</del>--}}
{{--                        <label>Free delivery</label>--}}
                    </p>
                    <?php $parent_id= \App\Helpers\Helper::getCategory($product->category_id) ?>
                    @if($parent_id==1)
                        <div class="product-single-w3l">
                            <p class="my-3">
                                <i class="far fa-hand-point-right mr-2"></i>
{{--                                <label>1 Year</label>Manufacturer Warranty</p>--}}
                            <ul>
                                <li class="mb-1">
                                    Vi xử lý: {{$product->CPU}}
                                </li>
                                <li class="mb-1">
                                    Bộ nhớ trong: {{$product->ROM}}
                                </li>
                                <li class="mb-1">
                                    RAM: {{$product->RAM}}
                                </li>
                                <li class="mb-1">
                                    Màn hình: {{$product->ManHinh}}
                                </li>
                                <li class="mb-1">
                                    Dung lượng pin: {{$product->Pin}}
                                </li>
                                <li class="mb-1">
                                    Camera: {{$product->Camera}}
                                </li>
                                <li class="mb-1">
                                    Màu sắc: {{$product->Color}}
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="/add-cart" method="POST">
                                <fieldset>
                                    <div class="quantity-select">
{{--                                        <div class="entry value-minus">&nbsp;</div>--}}
                                        <input class="value " name="add" value="1" type="number">
{{--                                        <div class="entry value-plus active">&nbsp;</div>--}}
                                    </div>
{{--                                    <input type="number" name="add" value="1">--}}
                                    <input type="hidden" name="cmd" value="_cart">
{{--                                    <input type="hidden" name="add" value="1">--}}
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="{{$product->name}}">
                                    <input type="hidden" name="amount" value="{{$product->DonGia}}">
{{--                                    <input type="hidden" name="discount_amount" value="1.00">--}}
                                    <input type="hidden" name="currency_code" value="VND">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
{{--                                    <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                    <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                    <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
                                </fieldset>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
        <h3 class="heading-tittle text-center font-italic">Sản phẩm liên quan</h3>
        <div class="row">
            @foreach($products as $key => $product)
                <div class="col-md-3 product-men mt-5">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="{{$product->image}}" alt="" width="150px" height="200px">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                       class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                            </h4>
                            <div class="info-product-price my-2">
                                                <span
                                                    class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                                <del>$280.00</del>--}}
                            </div>
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="/add-cart" method="POST">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="{{$product->name}}">
                                        <input type="hidden" name="amount" value="{{$product->DonGia}}">
                                        <input type="hidden" name="currency_code" value="VND">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
{{--                                        <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                        <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                        <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn"/>
                                    </fieldset>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
