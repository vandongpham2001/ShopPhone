
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('head')
</head>

<<<<<<< HEAD
<!-- Header -->

    @include('header')


<!-- Cart -->

@include('cart')



<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(/backend/images/bannerIPX.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Điện thoại tích hợp công nghệ cao
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Mới ra mắt
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(/backend/images/bannerMeizu.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Màn hình vô cực, sắc nét
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                SamSung
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
=======
<body>
@include('header')
<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                        <option value="">Danh mục</option>
                        {!! \App\Helpers\Helper::categories($categories) !!}
                    </select>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="#">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    {!! \App\Helpers\Helper::menus($categories, $producttypes) !!}
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>
>>>>>>> ee89ec4829dd99801efe698fe2441ca0973a7069
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->

<<<<<<< HEAD
            <div class="item-slick1" style="background-image: url(/backend/images/slide-03.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Đa dạng điện thoại và các loại thiết bị công nghệ
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Nhiều sự lựa chọn
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
=======
<!-- banner -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        @foreach( $banners as $banner)
        <li data-target="{{$banner->image}}" data-slide-to="0" class="active"></li>
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>--}}
        @endforeach
    </ol>

    <div class="carousel-inner">
{{--        <div class="carousel-item item1 active">--}}
        <div class="carousel-item item2 active">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>Get flat
                            <span>10%</span> Cashback</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                            <span>Big</span>
                            Sale
                        </h3>
                        <a class="button2" href="product.html">Shop Now </a>
>>>>>>> ee89ec4829dd99801efe698fe2441ca0973a7069
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="carousel-item item2">--}}
{{--            <div class="container">--}}
{{--                <div class="w3l-space-banner">--}}
{{--                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">--}}
{{--                        <p>advanced--}}
{{--                            <span>Wireless</span> earbuds</p>--}}
{{--                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best--}}
{{--                            <span>Headphone</span>--}}
{{--                        </h3>--}}
{{--                        <a class="button2" href="product.html">Shop Now </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item item3">--}}
{{--            <div class="container">--}}
{{--                <div class="w3l-space-banner">--}}
{{--                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">--}}
{{--                        <p>Get flat--}}
{{--                            <span>10%</span> Cashback</p>--}}
{{--                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New--}}
{{--                            <span>Standard</span>--}}
{{--                        </h3>--}}
{{--                        <a class="button2" href="product.html">Shop Now </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item item4">--}}
{{--            <div class="container">--}}
{{--                <div class="w3l-space-banner">--}}
{{--                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">--}}
{{--                        <p>Get Now--}}
{{--                            <span>40%</span> Discount</p>--}}
{{--                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today--}}
{{--                            <span>Discount</span>--}}
{{--                        </h3>--}}
{{--                        <a class="button2" href="product.html">Shop Now </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->

<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            Sản phẩm</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9">
                <div class="wrapper">
                    @include('Products.list')
{{--                    <!-- first section -->--}}
{{--                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">--}}
{{--                        <h3 class="heading-tittle text-center font-italic">Điện thoại mới</h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m1.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Samsung Galaxy J7</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$200.00</span>--}}
{{--                                            <del>$280.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7" />--}}
{{--                                                    <input type="hidden" name="amount" value="200.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m2.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <span class="product-new-top">New</span>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">OPPO A37f</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$230.00</span>--}}
{{--                                            <del>$250.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="OPPO A37f" />--}}
{{--                                                    <input type="hidden" name="amount" value="230.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m3.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <span class="product-new-top">New</span>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Apple iPhone X</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$280.00</span>--}}
{{--                                            <del>$300.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Apple iPhone X" />--}}
{{--                                                    <input type="hidden" name="amount" value="280.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- //first section -->--}}
{{--                    <!-- second section -->--}}
{{--                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">--}}
{{--                        <h3 class="heading-tittle text-center font-italic">Phụ kiện</h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m4.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Sony 80 cm (32 inches)</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$320.00</span>--}}
{{--                                            <del>$340.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />--}}
{{--                                                    <input type="hidden" name="amount" value="320.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m5.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <span class="product-new-top">New</span>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Artis Speaker</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$349.00</span>--}}
{{--                                            <del>$399.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Artis Speaker" />--}}
{{--                                                    <input type="hidden" name="amount" value="349.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m6.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Philips Speakers</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$249.00</span>--}}
{{--                                            <del>$300.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Philips Speakers" />--}}
{{--                                                    <input type="hidden" name="amount" value="249.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- //second section -->--}}
{{--                    <!-- third section -->--}}
{{--                    <div class="product-sec1 product-sec2 px-sm-5 px-3">--}}
{{--                        <div class="row">--}}
{{--                            <h3 class="col-md-4 effect-bg">Summer Carnival</h3>--}}
{{--                            <p class="w3l-nut-middle">Get Extra 10% Off</p>--}}
{{--                            <div class="col-md-8 bg-right-nut">--}}
{{--                                <img src="images/image1.png" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- //third section -->--}}
{{--                    <!-- fourth section -->--}}
{{--                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">--}}
{{--                        <h3 class="heading-tittle text-center font-italic">Sạc dự phòng</h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m7.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <span class="product-new-top">New</span>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Whirlpool 245</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$230.00</span>--}}
{{--                                            <del>$280.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Whirlpool 245" />--}}
{{--                                                    <input type="hidden" name="amount" value="230.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m8.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">BPL Washing Machine</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$180.00</span>--}}
{{--                                            <del>$200.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="BPL Washing Machine" />--}}
{{--                                                    <input type="hidden" name="amount" value="180.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 product-men mt-5">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item text-center">--}}
{{--                                        <img src="images/m9.jpg" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="single.html" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product text-center border-top mt-4">--}}
{{--                                        <h4 class="pt-1">--}}
{{--                                            <a href="single.html">Microwave Oven</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price my-2">--}}
{{--                                            <span class="item_price">$199.00</span>--}}
{{--                                            <del>$299.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Microwave Oven" />--}}
{{--                                                    <input type="hidden" name="amount" value="199.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- //fourth section -->--}}
                </div>
            </div>
            <!-- //product left -->

            <!-- product right -->
            <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                <div class="side-bar p-sm-4 p-3">
                    <div class="search-hotel border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
                        <form action="#" method="post">
                            <input type="search" placeholder="Tên sản phẩm" name="search" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <!-- price -->
                    <div class="range border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Giá</h3>
                        <div class="w3l-range">
                            <ul>
                                <li>
                                    <a href="#">Dưới 5 triệu VNĐ</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">5 triệu VNĐ - 10 triệu VNĐ</a>
                                </li>
                                <li>
                                    <a href="#">10 triệu VNĐ - 20 triệu VNĐ</a>
                                </li>
                                <li class="mt-1">
                                    <a href="#">Trên 20 triệu VNĐ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //price -->
                    <!-- discounts -->
{{--                    <div class="left-side border-bottom py-2">--}}
{{--                        <h3 class="agileits-sear-head mb-3">Discount</h3>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">5% or More</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">10% or More</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">20% or More</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">30% or More</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">50% or More</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="checkbox" class="checked">--}}
{{--                                <span class="span">60% or More</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!-- //discounts -->

                    <!-- electronics -->
                    <div class="left-side border-bottom py-2">
                        <h3 class="agileits-sear-head mb-3">Loại sản phẩm</h3>
                        <ul>
                            {!! \App\Helpers\Helper::producttypes($producttypes) !!}
                        </ul>
                    </div>

                    <!-- best seller -->
                    <div class="f-grid py-2">
                        <h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
                        <div class="box-scroll">
                            <div class="scroll">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
                                        <a href="" class="price-mar mt-2">$12,990.00</a>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
                                        <a href="" class="price-mar mt-2">$12,499.00</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="images/k3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
                                        <a href="" class="price-mar mt-2">$1,199.00 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //best seller -->
                </div>
                <!-- //product right -->
            </div>
        </div>
    </div>
</div>
<!-- //top products -->

<<<<<<< HEAD

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>
        {{--    {{dd($categories)}}--}}
{{--        {{dd($producttypes)}}--}}

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                   Điện thoại
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                    Máy tính bảng
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                    Vòng đeo tay
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
                    Lap Top
                </button>

               
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Lọc
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Tìm kiếm
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>

                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                </div>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Lọc
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Mặc định
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Yêu Thích
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Giá trung bình
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Newness
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Giá thấp đến cao
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                   Giá cao đến thấp
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Giá
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    All
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                   $0-5.000.000VNĐ
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $50.00 - $100.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $100.00 - $150.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $150.00 - $200.00
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $200.00+
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Màu
                        </div>

                        <ul>
                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Black
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Blue
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Grey
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Green
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Red
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    White
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Tags
                        </div>

                        <div class="flex-w p-t-4 m-r--5">
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Crafts
                            </a>
=======
<!-- middle section -->
<div class="join-w3l1 py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <div class="row">
            <div class="col-lg-6">
                <div class="join-agile text-left p-4">
                    <div class="row">
                        <div class="col-sm-7 offer-name">
                            <h6>Smooth, Rich & Loud Audio</h6>
                            <h4 class="mt-2 mb-3">Branded Headphones</h4>
                            <p>Sale up to 25% off all in store</p>
                        </div>
                        <div class="col-sm-5 offerimg-w3l">
                            <img src="/backend/images/off1.png" alt="" class="img-fluid">
>>>>>>> ee89ec4829dd99801efe698fe2441ca0973a7069
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>

        <div class="row isotope-grid">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-01.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                IPhone 7
                            </a>

                            <span class="stext-105 cl3">
									$3.000.000 VNĐ
								</span>
=======
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="join-agile text-left p-4">
                    <div class="row ">
                        <div class="col-sm-7 offer-name">
                            <h6>A Bigger Phone</h6>
                            <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                            <p>Free shipping order over $100</p>
>>>>>>> ee89ec4829dd99801efe698fe2441ca0973a7069
                        </div>
                        <div class="col-sm-5 offerimg-w3l">
                            <img src="/backend/images/off2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-02.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                IPhone 7 Plus
                            </a>

                            <span class="stext-105 cl3">
									$5.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-03.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Ipad Pro M1 2021
                            </a>

                            <span class="stext-105 cl3">
									$35.500.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-04.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Xiaomi Mimix 4
                            </a>

                            <span class="stext-105 cl3">
									$9.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-05.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Apple IPhone 12
                            </a>

                            <span class="stext-105 cl3">
									$16.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-06.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Vintage Inspired Classic
                            </a>

                            <span class="stext-105 cl3">
									$93.20
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-07.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                IPhone 12 Pro Max
                            </a>

                            <span class="stext-105 cl3">
									$29.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-08.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                               Sam Sung A5
                            </a>

                            <span class="stext-105 cl3">
									$3.400.000
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-09.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Macbook Pro 2016
                            </a>

                            <span class="stext-105 cl3">
									$22.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-10.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Galaxy Z Flip 2
                            </a>

                            <span class="stext-105 cl3">
									$20.500.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-11.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Xiaomi Mipad 5 Pro
                            </a>

                            <span class="stext-105 cl3">
									$18.000.000VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-12.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Huawei Matepad Pro
                            </a>

                            <span class="stext-105 cl3">
									$23.350.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-13.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Xiaomi Mi9
                            </a>

                            <span class="stext-105 cl3">
									$4.300.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/a.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Điện Thoại Đồ chơi
                            </a>

                            <span class="stext-105 cl3">
									$10.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-15.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                Mini Silver Mesh Watch
                            </a>

                            <span class="stext-105 cl3">
									$86.85
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="/backend/images/product-16.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                               Điện thoại siêu nhân
                            </a>

                            <span class="stext-105 cl3">
									$20.000 VNĐ
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="/backend/images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/backend/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
=======
>>>>>>> ee89ec4829dd99801efe698fe2441ca0973a7069
        </div>
    </div>
</div>
<!-- middle section -->
@include('footer')
</body>

</html>








