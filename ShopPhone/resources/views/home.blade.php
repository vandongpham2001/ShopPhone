@extends('main')

@section('content')
{{--    <div class="ads-grid py-sm-5 py-4">--}}
{{--        <div class="container py-xl-4 py-lg-2">--}}
{{--            <!-- tittle heading -->--}}
{{--            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">--}}
{{--                {{$title}}</h3>--}}
{{--            <!-- //tittle heading -->--}}
{{--            <div class="row">--}}
{{--                <!-- product left -->--}}
{{--                <div class="agileinfo-ads-display col-lg-9">--}}
{{--                    <div class="wrapper">--}}
                        @include('products.list')
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- //product left -->--}}

{{--                <!-- product right -->--}}
{{--                @include('rightbar')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
