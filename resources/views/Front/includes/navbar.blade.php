 
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header-three clearfix">
        <div class="main-header__top">
            <div class="container">
                <div class="main-header__top-inner">
                    <div class="main-header__top-address">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-pin"></span>
                                </i>
                                <div class="text">
                                    <p>{{__('website.address')}}</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="icon-email"></span>
                                </i>
                                <div class="text">
                                    <p><a href="Aldar.Alarabia@gmail.com">Aldar.Alarabia@gmail.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-menu-box">
                            
                        </div>
                        <div class="main-header__top-social-box">
                            <div class="main-header__top-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three clearfix">
            <div class="main-menu-three__wrapper clearfix">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner clearfix">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                            </div>
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class=" current megamenu">
                                        <a href="{{route('home')}}">{{__('website.home')}} </a>
                                        
                                    </li>
                                    <li class="">
                                        <a href="{{route('about')}}">{{__('website.About')}}</a>
                                         
                                    </li>
                                    <li class="">
                                        <a href="{{route('Goal')}}">{{__('website.goal')}} </a>
                                         
                                    </li>
                                    <li class="">
                                        <a href="{{route('services')}}">{{__('website.service')}}</a>
                                    </li>
                                    <li >
                                        <a href="{{route('events')}}">{{__('website.event')}}</a>
                                       
                                    </li>
                                    <li >
                                        <a href="{{route('jobs')}}">{{__('website.job')}}</a>
                                       
                                    </li>
                                   
                                    <li class="dropdown">
                                        <a href="{{route('library')}}">{{__('website.book')}} </a>
                                        <ul class="nav top-menu">
                                            <li>
                                        <a href="{{route('library',1)}}">إصداراتنا </a>
                                               
                                            </li>
                                            <li>
                                                <a href="{{route('library')}}">{{__('website.book')}} </a>
                                                       
                                            </li>
                                        </ul>
                                   
                                    </li>
                                    <li >
                                        <a href="{{route('contact')}}"> {{__('website.contact')}}</a>
                                       
                                    </li>
                                    <li class="dropdown">
                                        <a  >{{__('system.lang')}}  </a>
                                        <ul class="nav top-menu">
                                
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                       
                                            
                                            @foreach ($lang as $langs)
                                               
                                            @if($localeCode==$langs->lang)
                                            <li>
                                        <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;" rel="alternate"
                                            hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                        @endif
                                        @endforeach
                                
                                   
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
  <!--Main Slider Start-->
  @if($Sliders->count()>0)
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
  @else
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
                  <div class="swiper-slide">
                      <div class="image-layer-three" style="background-image: url({{asset('/front/images/resource/logo-2.png')}});">
                      </div>
                      <!-- /.image-layer -->

                      <div class="container">
                          <div class="row">
                              <div class="col-xl-12">
                                  <div class="main-slider-three__content">
                                      <h2 class="main-slider-three__title">{{__('system.logo')}}</h2>
                                      <div class="main-slider-three__btn-box">
                                          <a href="{{route('home')}}" class="thm-btn main-slider-three__btn">
                                              {{ __('website.Show More') }}</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

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
@endif