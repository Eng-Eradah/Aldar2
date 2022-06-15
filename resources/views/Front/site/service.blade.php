@extends('front.layouts.master')
@section('content')

<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('/front/images/backgrounds/benefits-bg-2.jpg')}})">
    </div>
    <div class="page-header-shape-1"><img src="{{asset('/front/images/shapes/page-header-shape-1.png')}}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">{{__('website.home')}}</a></li>
                <li><span>/</span></li>
                <li>{{__('website.service')}}</li>
            </ul>
            <h2>{{__('website.service')}}</h2>
        </div>
    </div>
</section>

    @if ($Service)
        <!--Services Three Start-->
        <section class="services-three mt-5">
            <div class="container">
                <div class="section-title text-right mb-3">
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
                <div class="services-three__inner">

                    <div class="row">
                        <!--Services Three Single Start-->

                        @foreach ($Service as $service)
                            <div class="col-xl-3 col-lg-4 col-md-6 mb-5 wow fadeInUp animated mb-5" data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;margin-bottun:10px">
                                <div class="services-one__single">

                                    <div class="service-one__content " style="height: 500px !important">

                                        <h2 class="service-one__title"><a>{{ $service->title }}</a></h2>
                                        <p class="service-one__text">{!! $service->text !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center mb-3" >
            {!! $Service->links() !!}
        </div>
    @else
        <!--Error Page Start-->
        <section class="error-page ">

            <div class="container ">
                <div class="row">
                    <div class="col-xl-12  ">
                        <div class="error-page__inner ">
                            <div class="error-page__title-box">
                                <img src="{{ asset('/images/error/404.jpg') }}" width="600px">
                                <br>
                                <a href="{{ route('home') }}"
                                    class="thm-btn error-page__btn mt-5">{{ __('website.home') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->
    @endif
@endsection
