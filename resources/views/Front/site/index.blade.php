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
    <!--Goal Three End-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">

                <div class="section-title text-right">
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

                        <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp; height:400px !important;">
                            <div class="feature-one__single" style="height:400px !important;">
                                <div class="feature-one__single-inner" style="height:400px !important;">
                                    <div class="feature-one__icon" >
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape" >
                                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{route('Goal')}}">{{ $goal->title }}</a></h3>
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
    <!--Services Three Start-->
    <section class="services-three">
        <div class="container">
            <div class="services-three__inner">

                <div class="row">
                    <!--Services Three Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">{{ __('website.service') }}</p>
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
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="services-one__single">

                                <div class="service-one__content">

                                    <h2 class="service-one__title"><a>{{ $service->title }}</a></h2>
                                    <p class="service-one__text">@php echo substr($service->text,0,300)@endphp ...</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!--Services Three End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">{{ __('website.donor') }}</p>
                            <div class="section-title-shape-1">
                                <img src="{{ asset('/front/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{ asset('/front/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                        "0": {
                                            "spaceBetween": 30,
                                            "slidesPerView": 2
                                        },
                                        "375": {
                                            "spaceBetween": 30,
                                            "slidesPerView": 2
                                        },
                                        "575": {
                                            "spaceBetween": 30,
                                            "slidesPerView": 3
                                        },
                                        "767": {
                                            "spaceBetween": 50,
                                            "slidesPerView": 4
                                        },
                                        "991": {
                                            "spaceBetween": 50,
                                            "slidesPerView": 5
                                        },
                                        "1199": {
                                            "spaceBetween": 100,
                                            "slidesPerView": 5
                                        }
                                    }}'>
                            <div class="swiper-wrapper">
                                @foreach ($donors as $donor)

                                    <div class="swiper-slide">
                                        <img src="{{ $donor->image }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->


   
    <!--We Provide Start-->
    <section class="we-provide">
        <div class="we-provide-bg"
            style="background-image: url({{ asset('/front/images/backgrounds/we-provide-bg.jpg') }}')}});">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">


                </div>
            </div>
            <div class="we-provide__tab">
                <div class="we-provide__tab-box tabs-box">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="we-provide__tab-btn-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#choose" class="tab-btn active-btn"><span>
                                            {{ __('website.brife') }}</span></li>
                                    <li data-tab="#values" class="tab-btn"><span>{{ __('website.mission') }} </span></li>
                                    <li data-tab="#mission" class="tab-btn "><span> {{ __('website.vission') }}</span>
                                    </li>
                                    <li data-tab="#goals" class="tab-btn"><span> {{ __('website.scope') }}</span></li>
                                    <li data-tab="#rewards" class="tab-btn"><span>{{ __('website.startigy') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="we-provide__tab-main-content">
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab" id="values">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="{{ asset('/front/images/shapes/we-provide-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">رؤيتنا</h3>
                                                <p class="we-provide__tab-main-content-text">{!! $Vision->description !!}</p>

                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="{{ asset('/front/images/resources/we-provide-tab-main-content-right-img.jpg') }}')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab " id="mission">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="{{ asset('/front/images/shapes/we-provide-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">رسالتنا</h3>
                                                <p class="we-provide__tab-main-content-text">{!! $Mission->description !!}</p>

                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="{{ asset('/front/images/resources/we-provide-tab-main-content-right-img-2.jpg') }}')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="goals">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="{{ asset('/front/images/shapes/we-provide-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">نطاق عملنا</h3>
                                                <p class="we-provide__tab-main-content-text">{!! $Scope->description !!}</p>

                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="{{ asset('/front/images/resources/we-provide-tab-main-content-right-img-3.jpg') }}')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="rewards">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="{{ asset('/front/images/shapes/we-provide-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <h3 class="we-provide__tab-main-content-title">نطاق عملنا</h3>
                                                <p class="we-provide__tab-main-content-text">{!! $Strategy->description !!}</p>

                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="{{ asset('/front/images/resources/we-provide-tab-main-content-right-img-4.jpg') }}')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab active-tab" id="choose">
                                        <div class="we-provide__tab-main-content-inner">
                                            <div class="we-provide-shape-1">
                                                <img src="{{ asset('/front/images/shapes/we-provide-shape-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="we-provide__tab-main-content-left">
                                                <div class="we-provide__tab-main-content-icon">
                                                    <span class="icon-mission"></span>
                                                </div>
                                                <p class="we-provide__tab-main-content-text">{!! $Brife->description !!}
                                                </p>

                                            </div>
                                            <div class="we-provide__tab-main-content-right">
                                                <div class="we-provide__tab-main-content-right-img">
                                                    <img src="{{ asset('/front/images/resources/we-provide-tab-main-content-right-img-5.jpg') }}')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We event End-->
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
                    
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
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
@endsection
