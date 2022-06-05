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

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="{{$event->image}}" alt="">
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="far fa-calendar"></i> {{$event->created_at->format('j F, Y')}} </a>
                                    </li>
                                   
                                </ul>
                                <h3 class="news-details__title">{{$event->title}}</h3>
                                <p class="news-details__text-1">{!!$event->description!!}</p>
                            </div>
                           
                         
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                             
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($events as $data )
                                        
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-calendar"></i> {{$data->created_at->format('j F, Y')}} </span>
                                                <a href="news-details.html">{{$data->title}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->
 
     
    @endsection