@extends('master')
@section('content')
<body>
<main>
<section id="banner">
<div class="owl-carousel">@foreach($slide as $sl)
                <div class="banner__item d-flex align-items-center bg--cover" style="background-image: url({{ Voyager::image( $sl->image ) }});">
                    <div class="curtain"></div>
                    <div class="banner__content text-center text-md-left">
                        <h2 class="title--size-56 -size-ipad-32 -size-phone-24 -txt-light text-uppercase">{{$sl->name}}</h2>
                        <p class="subtitle--size-20 -size-phone-16 -txt-light ">{{$sl->desription}}</p>
                        <a href="#" class="btn__cta btn__primary -size-phone-14 ">Tìm hiểu ngay</a>
                    </div>
                </div>@endforeach

            </div>>
        </section>
        

        <!-- Body Home -->
        <section id="introduction" class="bg--contain">
            <div class="container__section row ">
                <div class="col-12 col-lg-6 text-center text-lg-left order-1">
                    <h2 class="title__section ">Hơn <strong class="-txt-hightlight">52.000</strong> khách hàng tin dùng</h2>
                    <p class="subtitle">
                        <strong>NGO PHAT LOGISTICS</strong> là một trong những nhà cung cấp dịch vụ vận tải quốc tế, dịch vụ giao nhận, khai thuế hải quan và vận chuyển nội địa hàng đầu tại Việt Nam
                    </p>
                    <div class="box__quote">
                        <p class="text">{{$body->content}}</p>
                        <div class="d-lg-flex d-inline-block">
                            <div class="author__avatar -circle m-auto m-lg-0"></div>
                            <div class="author__name text ml-3">{{$body->representative_name}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-5 order-0 order-lg-2 text-center text-lg-right">
                    <a href="#video-popup" data-module='popup-video' class="box__video -icon -size-60"><img src="{{Voyager::image($body->background_video)}}" alt=""></a>
                </div>
                <!-- videos -->
                <div id="video-popup" class="video__wrapper">
                    <div class="popup">
                        <span class="close" style="font-size: 32px;" data-module='popup-video' id="close-video">&times;</span>
                        <iframe class="embedded-video" width="640" height="360" src="{{$body->video}}" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="container__section boxes__icon d-none d-md-flex">
                <div class="col-md-3 col-12 box__icon text-center">
                    <img src="./assets/img/icon/Group (1).svg" alt="">
                            
                    <div class="subtitle">Hơn 1000+ đơn hàng vận chuyển mỗi ngày</div>
                </div>
                <div class="col-md-3 col-12 box__icon text-center">
                    <img src="./assets/img/icon/Group 2.svg" alt="">
                    <div class="subtitle">Tiết kiệm hơn 50% kinh phí cho doanh nghiệp</div>
                </div>
                <div class="col-md-3 col-12 box__icon text-center">
                    <img src="./assets/img/icon/clock.svg" alt="">
                    <div class="subtitle">Thời gian phản hồi nhanh chóng</div>
                </div>
                <div class="col-md-3 col-12 box__icon text-center">
                    <img src="./assets/img/icon/Group.svg" alt="">
                                                        
                    <div class="subtitle">Hơn 52.000 khách hàng tin dùng</div>
                </div>


            </div>
        </section>

        <section id="services" class="bg--cover">
            <div class="curtain"></div>
            <div class="container__section row align__items--center text-center text-md-left">
                <div class="content col-md-6 col-12">
                    <h2 class="title__section -txt-light">Dịch vụ đa dạng</h2>
                    <p class="subtitle--txt-light mb-0">{{$body->paragraph_1}}</p>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-center justify-content-md-end align-items-center">
                    <a href="#" class="btn__cta btn__primary -size-phone-14 mt-4 mt-md-0 ">Yêu cầu báo giá</a>
                </div>
            </div>
            <div class="owl-carousel-5  controls-outline ">
                @foreach($services as $sv)
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="{{Voyager::image($sv->image)}}" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        {{$sv->name}}
                    </h3>
                    <p class="subtitle--size-16">
                    {{$sv->description}}
                    </p>
                    <a href="{{route('service',$sv->id_service)}}" class="see-more">Xem thêm</a>
                </article>
                @endforeach
            </div>
        </section>

            <!-- contact -->
        <section id="contact" class="bg--cover">
            <div class="container__section" style='margin: unset'>
                <form action="">
                    <div class="card card__contact">
                        <h2 class="title__section">Đặt lịch hẹn tư vấn <strong class="-txt-hightlight">miễn phí</strong></h2>
                        <p class="subtitle--size-17 -txt-smoke">
                            {{$body->paragraph_2}}
                        </p>
                        <div class="row mx-0">
                            <div class="col-md-6 col-12 bordered">
                                <input type="text" placeholder="Tên của bạn" required>
                                <span><img src="./assets/img/icon-form/user-6.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <input type="tel" placeholder="Số điện thoại" required>
                                <span><img src="./assets/img/icon-form/telephone.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <input type="email" placeholder="Địa chỉ e-mail" required>
                                <span><img src="./assets/img/icon-form/black-back-closed-envelope-shape.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <input type="select" placeholder="Dịch vụ cần hỗ trợ">
                                <span><img src="./assets/img/icon-form/Group.svg" alt=""></span>
                            </div>
                            <div class="col-12 bordered">
                                <textarea name="" id="" rows="4" placeholder="Nội dung..."></textarea>
                            </div>
                            <div class="col-12 text-right ">
                                <button type="submit" class="btn__cta btn__primary -size-phone-14   phone-fluid">gửi yêu cầu</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <!-- post news -->
        <section id="news">
            <div class="container__section">
                <h2 class="title__section mb-5">Tin tức <strong class="-txt-hightlight">nổi bật</strong></h2>
                <div class="owl-carousel-3 controls-outline dots-dark">
                    @foreach($new_post as $post)
                    <article class="card card__post">
                        <div class="card__avatar">
                            <img src="{{Voyager::image($post->image)}}" alt="" class="img__fluid">
                        </div>
                        <div class="card__content">
                            <h3 class="title--size-14  -txt-dark">
                                {{$post->title}}
                            </h3>
                            <p class="subtitle--size-12 -txt-smoke">
                                {{$post->meta_description}}
                            </p>
                        </div>
                        <a href="{{route('post',$post->id)}}" class="see-more">Xem thêm</a>
                    </article>
                    @endforeach
                   

                </div>
            </div>
        </section>

        
        <!-- customer -->
        <section id="customers">
            <div class="container__section">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h2 class="title__section">
                            Hơn <strong class="-txt-hightlight">10+ đối tác</strong> trên thế giới
                        </h2>
                        <p class="subtitle--txt-smoke -size-17">
                        {{$body->paragraph_2}}
                        </p>
                    </div>
                    <div class="col-md-6 col-12 text-right">
                        <img src="./assets/img/customers.png" alt="Danh sách khách hàng thân thiết">
                    </div>
                </div>
            </div>
        </section>

        <!-- consult -->
        <section id="consult" class="bg--cover">
            <div class="curtain"></div>
            <div class="container__section">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-left text-center ">
                        <h2 class="title__section -txt-light">Sẵn sàng để bắt đầu</h2>
                        <p class="title--size-28 -size-ipad-18 -size-phone-16 -txt-light mt-3">Đăng ký hoặc liên hệ với chúng tôi</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-right text-center mt-3 ">
                        <a href="{{route('form')}}" class="btn__cta btn__primary -size-phone-14 ">Liên hệ ngay</a>
                    </div>
                </div>
            </div>
        </section>               
</main>
</body>
    @endsection