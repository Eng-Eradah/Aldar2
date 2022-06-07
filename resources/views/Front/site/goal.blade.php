@extends('front.layouts.master')
@section('content')


    @if ($goals->count() > 0)
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

                            <div class="col-xl-4 col-lg-4 mb-5 wow fadeInUp animated mb-3" data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp; height:400px !important;">
                                <div class="feature-one__single" style="height:400px !important;">
                                    <div class="feature-one__single-inner" style="height:400px !important;">
                                        <div class="feature-one__icon">
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">{{ $goal->title }}</a></h3>
                                        <p class="feature-one__text">{!! $goal->text !!}</p>
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
