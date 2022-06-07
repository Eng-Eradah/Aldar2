@extends('front.layouts.master')
@section('content')


    <!--About Three Start-->
    @if ($config->count() > 0)
        <section class="about-three mt-5">


            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="{{ asset('/front/images/shapes/testimonial-one-shape-2.png') }}" alt="">
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
                <img src="{{ asset('/front/images/shapes/testimonial-one-shape-3.png') }}" alt="">
            </div>
        </section>
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
