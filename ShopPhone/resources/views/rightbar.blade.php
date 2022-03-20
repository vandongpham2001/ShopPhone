<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
    {{--    {{dd($topProducts)}}--}}

    <div class="side-bar p-sm-4 p-3">
        <div class="search-hotel border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
            <div class="form-group position-relative has-icon-right">
                <input id="keyword" name="keyword" type="text" placeholder="Tên sản phẩm" class="form-control">
                {{--                <div class="form-control-icon">--}}
                {{--                    <i class="bi bi-search"></i>--}}
                {{--                </div>--}}
            </div>
        </div>
        <!-- price -->
        <div class="range border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">Giá</h3>
            {{--            <form action="/san-pham/filter" method="get">--}}
            <div class="form-group w3l-range">
                <ul>
                    {{--                        <form action="/san-pham/filter" method="get">--}}
                    <li>
                        <a href="#">Dưới 5 triệu VNĐ</a>
                        {{--                                <input type="submit" value="Dưới 5 triệu VNĐ">--}}
                        {{--                                <input type="hidden" name="filter" value="below5M">--}}
                    </li>
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
                    {{--                        <form action="/san-pham/filter" method="get">--}}
                    <li class="my-1">
                        <a href="#">5 triệu VNĐ - 10 triệu VNĐ</a>
                        {{--                                <input type="submit" value="5 triệu - 10 triệu VNĐ">--}}
                        {{--                                <input type="hidden" name="filter" value="5Mto10M">--}}
                    </li>
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
                    {{--                        <form action="/san-pham/filter" method="get">--}}
                    <li>
                        <a href="#">10 triệu VNĐ - 20 triệu VNĐ</a>
                        {{--                                <input type="submit" value="10 triệu - 20 triệu VNĐ">--}}
                        {{--                                <input type="hidden" name="filter" value="10Mto20M">--}}
                    </li>
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
                    {{--                        <form action="/san-pham/filter" method="get">--}}
                    <li class="mt-1">
                        <a href="#">Trên 20 triệu VNĐ</a>
                        {{--                                <input type="submit" value="Trên 20 triệu VNĐ">--}}
                        {{--                                <input type="hidden" name="filter" value="above20M">--}}
                    </li>
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
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
                <div class="box">
                    @foreach($topProducts as $key => $product)
                        <div class="row my-4">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"><img
                                        src="{{$product->image}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html">{{$product->name}}</a>
                                <a href="/san-pham/{{$product->product_id}}-{{Str::slug($product->name, '-')}}.html"
                                   class="price-mar mt-2">{{number_format($product->DonGia, 0, ',', '.') . " VNĐ"}}</a>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="row my-4">--}}
                    {{--                        <div class="col-lg-3 col-sm-2 col-3 left-mar">--}}
                    {{--                            <img src="images/k2.jpg" alt="" class="img-fluid">--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">--}}
                    {{--                            <a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>--}}
                    {{--                            <a href="" class="price-mar mt-2">$12,499.00</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="row">
                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                            {{--                            <img src="images/k3.jpg" alt="" class="img-fluid">--}}
                        </div>
                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                            {{--                            <a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>--}}
                            {{--                            <a href="" class="price-mar mt-2">$1,199.00 </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //best seller -->
    </div>
    <!-- //product right -->
</div>
