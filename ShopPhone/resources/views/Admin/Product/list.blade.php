@extends('admin.main')

@section('content')
{{--    <div class="form-group position-relative has-icon-left">--}}
{{--        <input type="text" id="search-product" class="form-control" placeholder="Tìm kiếm sản phẩm">--}}
{{--        <div class="form-control-icon">--}}
{{--            <i class="bi bi-search"></i>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <table id="product-table" class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th style="width: 50px">STT</th>--}}
{{--            <th>Tên sản phẩm</th>--}}
{{--            <th>Loại sản phẩm</th>--}}
{{--            <th>Nhà sản xuất</th>--}}
{{--            <th>Thời gian bảo hành</th>--}}
{{--            <th>Kích hoạt</th>--}}
{{--            <th>Update</th>--}}
{{--            <th style="width: 100px">&nbsp;</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        {!! \App\Helpers\Helper::product($products) !!}--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    <div id="products-null" class="null-feedback"></div>--}}

    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                           aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">STT
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Tên sản phẩm
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Loại sản phẩm
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Nhà sản xuất
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Thời gian bảo hành
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Kích hoạt
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Update
                            </th>
                            <th style="width: 150px">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        {!! \App\Helpers\Helper::product($products) !!}
                        </tbody>
                    </table>
                    {!! $products->links('pagination::bootstrap-4') !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-7">

                </div>
            </div>
        </div>
    </div>

@endsection

