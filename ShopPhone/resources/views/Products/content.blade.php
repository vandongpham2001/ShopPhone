@extends('main')
@section('content')
    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                {{$title}}
{{--                <span>S</span>ingle--}}
{{--                <span>P</span>age--}}
            </h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">

                            <div class="clearfix"></div>
                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides"
                                    style="width: 1000%; transition-duration: 0s; transform: translate3d(-874px, 0px, 0px);">
                                    <li data-thumb="images/si3.jpg" class="clone" aria-hidden="true"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;">
                                        <div class="thumb-image">
                                            <img src="images/si3.jpg" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si1.jpg"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;" class=""
                                        data-thumb-alt="">
                                        <div class="thumb-image">
                                            <img src="images/si1.jpg" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si2.jpg" data-thumb-alt="" class="flex-active-slide"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;">
                                        <div class="thumb-image">
                                            <img src="/backend/images/si2.jpg" data-imagezoom="true" class="img-fluid"
                                                 alt="" draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si3.jpg" data-thumb-alt=""
                                        style="width: 437px; margin-right: 0px; float: left; display: block;">
                                        <div class="thumb-image">
                                            <img src="images/si3.jpg" data-imagezoom="true" class="img-fluid" alt=""
                                                 draggable="false"></div>
                                    </li>
                                    <li data-thumb="images/si1.jpg"
                                        style="width: 437px; margin-right: 0px; float: left; display: block;"
                                        class="clone" aria-hidden="true">
                                        <div class="thumb-image">
                                            <img src="images/si1.jpg" data-imagezoom="true" class="img-fluid" alt=""
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
                    <h3 class="mb-3">{{$product->name}}</h3>
                    <p class="mb-3">
                        <span class="item_price">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                        <del class="mx-2 font-weight-light">$280.00</del>--}}
{{--                        <label>Free delivery</label>--}}
                    </p>
                    @if($product->category_id==1)
{{--                    <div class="single-infoagile">--}}
{{--                        <ul>--}}
{{--                            <li class="mb-3">--}}
{{--                                Cash on Delivery Eligible.--}}
{{--                            </li>--}}
{{--                            <li class="mb-3">--}}
{{--                                Shipping Speed to Delivery.--}}
{{--                            </li>--}}
{{--                            <li class="mb-3">--}}
{{--                                EMIs from $655/month.--}}
{{--                            </li>--}}
{{--                            <li class="mb-3">--}}
{{--                                Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&amp;C--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>1 Year</label>Manufacturer Warranty</p>
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
{{--                        <p class="my-sm-4 my-3">--}}
{{--                            <i class="fas fa-retweet mr-3"></i>Net banking &amp; Credit/ Debit/ ATM card--}}
{{--                        </p>--}}
                    </div>
                    @endif
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime">
                                    <input type="hidden" name="amount" value="200.00">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
