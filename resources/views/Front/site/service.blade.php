@extends('front.layouts.master')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider-three clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                                "effect": "fade",
                                "pagination": {
                                "el": "#main-slider-pagination",
                                "type": "bullets",
                                "clickable": true
                                },
                                "navigation": {
                                "nextEl": "#main-slider__swiper-button-next",
                                "prevEl": "#main-slider__swiper-button-prev"
                                },
                                "autoplay": {
                                "delay": 50000000
                                }}'>
            <div class="swiper-wrapper" style="height: 500px;">
                @foreach ($Sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer-three" style="background-image: url({{ $slider->image }});">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">{{ $slider->main_title }}</h2>
                                        <p class="main-slider-three__text">{{ $slider->sub_title }}</p>
                                        <div class="main-slider-three__btn-box">
                                            <a href="{{ $slider->link }}" class="thm-btn main-slider-three__btn">
                                                {{ __('website.Show More') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-three__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    
    <!--Services Three Start-->
    <section class="services-three mt-5">
        <div class="container">
            <div class="services-three__inner">

                <div class="row">
                    <!--Services Three Single Start-->
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp mt-5 " data-wow-delay="100ms">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title text-center">{{ __('website.service') }}</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('/front/images/shapes/section-title-shape-1.png') }}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('/front/images/shapes/section-title-shape-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($Service as $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 wow fadeInUp animated" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;height:350px !important">
                            <div class="services-one__single" >

                                <div class="service-one__content" style="height: 350px !important">

                                    <h2 class="service-one__title"><a>{{ $service->title }}</a></h2>
                                    <p class="service-one__text">{!!$service->text!!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center">
        {!! $Service->links() !!}
        </div>
    @endsection