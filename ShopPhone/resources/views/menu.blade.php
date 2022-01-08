@extends('main')

@section('content')
    <div class="wrapper">
        <!-- first section -->
        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
            <div class="row">
                <?php $i=1 ?>
                @foreach($products as $key => $product)
                    @if($i<=3)
                    <div class="col-md-4 product-men mt-md-0 mt-5">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item text-center">
                                <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/san-pham/{{$product->id}}--{{Str::slug($product->name, '-')}}.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product text-center border-top mt-4">
                                <h4 class="pt-1">
                                    <a href="/san-pham/{{$product->id}}--{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                </h4>
                                <div class="info-product-price my-2">
                                    <span class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="OPPO A37f">
                                            <input type="hidden" name="amount" value="230.00">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button btn">
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                        @endif
                    <?php $i++ ?>
                    @endforeach
            </div>
        </div>
        <!-- //first section -->
        <!-- second section -->
        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
            <?php $d=1 ?>
            <div class="row">
                @foreach($products as $key => $product)
                    @if($d>3 && $d<=6)
                        <div class="col-md-4 product-men mt-md-0 mt-5">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item text-center">
                                    <img src="{{$product->image}}" alt="" width="150px" height="200px">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/san-pham/{{$product->id}}--{{Str::slug($product->name, '-')}}.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product text-center border-top mt-4">
                                    <h4 class="pt-1">
                                        <a href="/san-pham/{{$product->id}}--{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                    </h4>
                                    <div class="info-product-price my-2">
                                        <span class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="business" value=" ">
                                                <input type="hidden" name="item_name" value="OPPO A37f">
                                                <input type="hidden" name="amount" value="230.00">
                                                <input type="hidden" name="discount_amount" value="1.00">
                                                <input type="hidden" name="currency_code" value="USD">
                                                <input type="hidden" name="return" value=" ">
                                                <input type="hidden" name="cancel_return" value=" ">
                                                <input type="submit" name="submit" value="Add to cart" class="button btn">
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
        <!-- //second section -->
        <!-- 3rd section -->
        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
            <div class="row">
                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/mk6.jpg" alt="" class="img-fluid">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Lenovo </a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$300.00</span>
                                <del>$320.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Alcatel Tablet">
                                        <input type="hidden" name="amount" value="300.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button btn">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //3rd section -->
        <!-- fourth section -->
        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
            <div class="row">
                <div class="col-md-4 product-men mt-md-0 mt-5 mt-5">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/mk9.jpg" alt="" class="img-fluid">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Alcatel Tablet</a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$320.00</span>
                                <del>$350.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Alcatel Tablet">
                                        <input type="hidden" name="amount" value="320.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button btn">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //fourth section -->
    </div>
@endsection
