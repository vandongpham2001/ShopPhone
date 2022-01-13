@extends('main')

@section('content')
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                {{$title}}
{{--                <span>M</span>obiles--}}
{{--                <span>&</span>--}}
{{--                <span>C</span>omputers--}}
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper" id="product-table">
                        <!-- first section -->
                        <?php $i = 1; $j = 1 ?>
                        @if(count($products)>0)
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                @foreach($products as $key => $product)
                                    @if($i<=3)
                                        <div class="col-md-4 product-men mt-md-0 mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                                               class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span
                                                            class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
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
                                                                <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn"/>
{{--                                                                <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                                                <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                                                @csrf
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $i++ ?>
                                @endforeach
                                <?php  ?>
                            </div>
                        </div>
                        @endif
                        <!-- //first section -->
                        <!-- second section -->

                        @if(count($products)>3)
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <?php $d = 1 ?>
                            <div class="row">
                                @foreach($products as $key => $product)
                                    @if($d>3 && $d<=6)
                                        <div class="col-md-4 product-men mt-md-0 mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                                               class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span
                                                            class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
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
                                                                <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn"/>
{{--                                                                <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                                                <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                                                @csrf
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $d++ ?>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <!-- //second section -->
                        @if(count($products)>6)
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <?php $d = 1 ?>
                            <div class="row">
                                @foreach($products as $key => $product)
                                    @if($d>6 && $d<=9)
                                        <div class="col-md-4 product-men mt-md-0 mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                                               class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span
                                                            class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
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
                                                                <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn"/>
{{--                                                                <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                                                <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                                                @csrf
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $d++ ?>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if(count($products)>9)
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <?php $d = 1 ?>
                            <div class="row">
                                @foreach($products as $key => $product)
                                    @if($d>9 && $d<=12)
                                        <div class="col-md-4 product-men mt-md-0 mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                                               class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span
                                                            class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
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
                                                                <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn"/>
{{--                                                                <input type="hidden" name="product_id" value="{{$product->product_id}}">--}}
                                                                <input type="hidden" name="productdetail_id" value="{{$product->id}}">
                                                            </fieldset>
                                                            @csrf
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $d++ ?>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    <div id="products-null" class="null-feedback"></div>
                </div>
                <!-- //product left -->
                <!-- product right -->
            @include('rightbar')
            <!-- //product right -->
            </div>
        </div>
    </div>
@endsection
