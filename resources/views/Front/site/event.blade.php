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


      <!--We Provide End-->
    <section class="news-one">
        <div class="team-one__shape-1 float-bob-y">
            <img src="{{asset('/front/images/shapes/team-one-shape-1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                 
                <h2 class="section-title__title">{{ __('website.last_article') }}</h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                @foreach ($events as $event)
                    
                <div class="col-xl-4 col-lg-4 wow mb-5 fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{$event->image}}" alt="">
                            
                            <div class="news-one__arrow-box">
                                <a href="{{route('event.details',$event->id)}}" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="{{route('event.details',$event->id)}}"><i class="far fa-calendar"></i> {{$event->created_at->format('j F, Y')}} </a>
                                </li>
                               
                            </ul>
                            <h3 class="news-one__title"><a href="{{route('event.details',$event->id)}}">{{$event->title}}</a></h3>
                            <p class="news-one__text">@php echo substr($event->description,0,300)@endphp</p>
                            <div class="news-one__read-more">
                                <a href="{{route('event.details',$event->id)}}"> {{ __('website.Show More') }} <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <style>
        
    </style>
    <div class="d-flex justify-content-center">
    {!! $events->links() !!}
    </div>
    @endsection