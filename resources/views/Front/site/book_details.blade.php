@extends('front.layouts.master')
@section('content')


<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('/front/images/backgrounds/site-footer-bg.png')}})">
    </div>
    <div class="page-header-shape-1"><img src="{{asset('/front/images/shapes/page-header-shape-1.png')}}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">{{__('website.home')}}</a></li>
                <li><span>/</span></li>
                <li>{{__('website.book')}}</li>
            </ul>
            <h2>{{__('website.book')}}</h2>
        </div>
    </div>
</section>
    @if ($book->id > 0)
        <!--Portfolio Details Start-->
         
        <!--Portfolio Details End-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="{{ $book->image }}" alt="" height="400px">
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href=""><i class="far fa-calendar"></i>
                                            {{ $book->created_at->format('j F, Y') }} </a>
                                    </li>

                                </ul>
                                <h3 class="news-details__title">{{ $book->title }}</h3>
                                <p class="news-details__text-1">{!! $book->description !!}</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="sidebar">

                            <div class="sidebar__single sidebar__post">
                                    <div class="portfolio-details__content-right">
                                        <div class="portfolio-details__details-box">
                                            <ul class="list-unstyled portfolio-details__details-list">
                                                <li>
                                                    <p class="portfolio-details__client">{{ __('website.auther') }} :</p>
                                                    <h4 class="portfolio-details__name">{{ $book->auther }}</h4>
                                                </li>
                                                <li>
                                                    <p class="portfolio-details__client"> {{ __('website.publisher') }} :</p>
                                                    <h4 class="portfolio-details__name">{{ $book->publisher }}</h4>
                                                </li>
                                                <li>
                                                    <p class="portfolio-details__client">{{ __('website.category') }}:</p>
                                                    <h4 class="portfolio-details__name">{{ $book->Category->name }}</h4>
                                                </li>
                                                <li>
                                                    <p class="portfolio-details__client">{{ __('website.date') }}:</p>
                                                    <h4 class="portfolio-details__name">{{ $book->date }}</h4>
                                                </li>
                                                <li>
                                                    <p class="portfolio-details__client">{{ __('website.count') }}:</p>
                                                    <h4 class="portfolio-details__name">{{ $book->download_count }}</h4>
                                                </li>
                                                <li class="m-0">
                                                    <div class="error-page__title-box m-0">
                                                        <a href="{{ route('download', $book->id) }}"
                                                            class="thm-btn error-page__btn mt-5">{{ __('website.download') }}</a>
        
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Similar Portfolio Start-->
        <section class="similar-portfolio">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">{{ __('website.related') }} </p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Portfolio Single Start-->
                    @foreach ($books as $data)

                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ $data->image }}" alt="">

                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">{{ $data->Category->name }}</p>
                                        <h4 class="portfolio__title"><a
                                                href="{{ route('book.details', $data->id) }}">{{ $data->title }} </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--Similar Portfolio End-->
    @else
        <!--Error Page Start-->
        <section class="error-page ">

            <div class="container ">
                <div class="row">
                    <div class="col-xl-12  ">
                        <div class="error-page__inner ">
                            <div class="error-page__title-box">
                                <img src="{{ asset('/images/error/404.jpg') }}">
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
