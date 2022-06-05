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


      <!--About Three Start-->
    <section class="about-three mt-5">
         
         
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="{{asset('/front/images/shapes/testimonial-one-shape-2.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="about-three__right">
                        <div class="section-title text-center">
                            <div class="section-sub-title-box">
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">{{ __('website.About') }}</h2>
                        </div>
                        @foreach ($config as $configs)
                            <p class="about-three__text">{!! $configs->description !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-one-shape-3 float-bob-y">
            <img src="{{asset('/front/images/shapes/testimonial-one-shape-3.png')}}" alt="">
        </div>
    </section>
    @endsection