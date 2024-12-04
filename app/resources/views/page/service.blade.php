<head>
<link rel="stylesheet" href="../assets/css/main.css" />
</head>
@extends('master')
@section('content')

<!--Service-->

<section class="header__bg" style="background-image: url('./assets/img/bg-dich-vu.png')">
        <div class="container">
            <div class="header__wrapper">
                <h1 class="header__title">Dịch vụ đa dạng</h1>
                <p class="header__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="breadrum">
                    <span>Bạn đang ở đây:&nbsp</span><a href="#">Trang chủ</a><span class="ic-arrow-right"></span><a
                        href="{{route('services')}}">Dịch vụ</a><span class="ic-arrow-right"></span><span class="breadrum__here">{{$service->name}}</span>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <section class="row wrapper__content">
            <div class="col-lg-3 order-lg-1 order-md-2 order-sm-2 order-2">
                <div class="single-service__left-menu">@foreach($services as $list)
                    @if($list->name === $service->name)
                    <a href="{{route('service',$list->id_service)}}"class="single-service__left-menu-item active">{{$list->name}}</a>
                    @else <a href="{{route('service',$list->id_service)}}"class="single-service__left-menu-item ">{{$list->name}}</a>
                    @endif
                    @endforeach
                </div>
                <!-- Write sidebar -->
                <section style="height: auto">
                    <div>
                        <h3 class="wrapper__title">Hỗ trợ trực tuyến</h3>
                        <div class="line"></div>
                        <div class="group__list">
                            <a href="#">
                                <span class="ic-phone"></span>08 3518 0499
                            </a>
                            <a href="#">
                                <span class="ic-phone"></span>08 3518 0488
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="wrapper__title">Tài liệu dịch vụ</h3>
                        <div class="line"></div>
                        <div class="group__list">
                            <a href="#">
                                <span class="ic-download"></span>Catalog dịch vụ 2019
                            </a>
                            <a href="#">
                                <span class="ic-download"></span>Bảng giá dịch vụ Quý II/ 2019
                            </a>
                        </div>
                    </div>
                </section>

            </div>
            <div class="col-lg-9 order-lg-2 order-md-1 order-sm-1 order-1">

                <div class="single-service__title-zone">
                    <div class="single-service__title">
                        {{$service->name}}
                    </div>
                </div>

                <div class="single-service__content">
                    <img class="signle-post__feature-img" src="{{Voyager::image($service->image)}}" alt="photo" />
                    <p style="margin-top: 45px">
                        {!!$service->body!!}
                    </p>
                    
                </div>

                <div class="single-service__others">
                    <div class="single-service__others-title">XEM THÊM CÁC DỊCH VỤ KHÁC</div>
                    <div class="single-service__others-nav">
                        <div class="single-service__others-nav-button">
                            <img class="single-service__others-nav-icon" src="./assets/img/arrow.png"
                                alt="previous" />
                            <span class="single-service__others-nav-text">Dịch Vụ Hải Quan</span>
                        </div>
                        <div style="flex: 1;">
                            <div class="single-service__others-line"></div>
                        </div>
                        <div class="single-service__others-nav-button">
                            <span class="single-service__others-nav-text">Vận Chuyển Hàng Lẻ</span>
                            <img class="single-service__others-nav-icon" style="transform: rotate(180deg);"
                                src="./assets/img/arrow.png" alt="previous" />
                        </div>
                    </div>
                </div>

        </section>
    </div>




@endsection