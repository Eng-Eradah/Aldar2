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


   
    <!--Goal Three End-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">

                <div class="section-title text-left">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">{{ __('website.goal') }}</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Feature One Single Start-->
                    @foreach ($goals as $goal)

                        <div class="col-xl-4 col-lg-4 mb-5 wow fadeInUp animated" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp; height:400px !important;">
                            <div class="feature-one__single" style="height:400px !important;">
                                <div class="feature-one__single-inner" style="height:400px !important;">
                                    <div class="feature-one__icon" >
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape" >
                                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">{{ $goal->title }}</a></h3>
                                    <p class="feature-one__text">{!!$goal->text!!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--Feature One Single End-->
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center">
        {!! $goals->links() !!}
        </div>
    @endsection