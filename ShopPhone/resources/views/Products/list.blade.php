<!-- first section -->
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <h3 class="heading-tittle text-center font-italic">Điện thoại mới</h3>
    <div class="row">
{{--        {{dd($phones)}}--}}
        @foreach( $phones as $key=> $phone)

        <div class="col-md-4 product-men mt-5">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item text-center">
                    <img src="{{$phone->image}}" alt="" width="150px" height="200px">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="/san-pham/{{$phone->id}}--{{Str::slug($phone->name, '-')}}.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="item-info-product text-center border-top mt-4">
                    <h4 class="pt-1">
                        <a href="/san-pham/{{$phone->id}}--{{Str::slug($phone->name, '-')}}.html">{{$phone->name}}</a>
                    </h4>
                    <div class="info-product-price my-2">
                        <span class="item_price">{{number_format($phone->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                        <del>$280.00</del>--}}
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="Samsung Galaxy J7" />
                                <input type="hidden" name="amount" value="200.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button btn" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- //first section -->
<!-- second section -->
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <h3 class="heading-tittle text-center font-italic">Phụ kiện</h3>
    <div class="row">
        @foreach( $phukiens as $key=> $phukien)
        <div class="col-md-4 product-men mt-5">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item text-center">
                    <img src="{{$phukien->image}}" alt="" width="150px" height="200px">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                </div>
                <div class="item-info-product text-center border-top mt-4">
                    <h4 class="pt-1">
                        <a href="/san-pham/{{$phukien->id}}--{{Str::slug($phukien->name, '-')}}.html">{{$phukien->name}}</a>
                    </h4>
                    <div class="info-product-price my-2">
                        <span class="item_price">{{number_format($phukien->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                        <del>$340.00</del>--}}
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                <input type="hidden" name="amount" value="320.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button btn" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- //second section -->
<!-- third section -->
<div class="product-sec1 product-sec2 px-sm-5 px-3">
    <div class="row">
        <h3 class="col-md-4 effect-bg">Summer Carnival</h3>
        <p class="w3l-nut-middle">Get Extra 10% Off</p>
        <div class="col-md-8 bg-right-nut">
            <img src="/backend/images/image1.png" alt="">
        </div>
    </div>
</div>
<!-- //third section -->
<!-- fourth section -->
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
    <h3 class="heading-tittle text-center font-italic">Sạc dự phòng</h3>
    <div class="row">
        @foreach( $pins as $key=> $pin)
        <div class="col-md-4 product-men mt-5">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item text-center">
                    <img src="{{$pin->image}}" alt="" width="150px" height="200px">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                </div>
                <span class="product-new-top">New</span>
                <div class="item-info-product text-center border-top mt-4">
                    <h4 class="pt-1">
                        <a href="/san-pham/{{$pin->id}}--{{Str::slug($pin->name, '-')}}.html">{{$pin->name}}</a>
                    </h4>
                    <div class="info-product-price my-2">
                        <span class="item_price">{{number_format($pin->DonGia, 0, ',', '.') . " VNĐ"}}</span>
{{--                        <del>$280.00</del>--}}
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="Whirlpool 245" />
                                <input type="hidden" name="amount" value="230.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button btn" />
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- //fourth section -->
