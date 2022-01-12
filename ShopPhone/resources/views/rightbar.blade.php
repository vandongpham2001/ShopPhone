<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
{{--    {{dd($topProducts)}}--}}

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
                {!! \App\Helpers\Helper::producttypes($categories) !!}
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
