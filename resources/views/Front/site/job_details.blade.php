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
                <li>{{__('website.job')}}</li>
            </ul>
            <h2>{{__('website.job')}}</h2>
        </div>
    </div>
</section>
    @if ($item)
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">

                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li style="margin-left: 30px"><a href=""><i class="far fa-calendar"></i>
                                            {{ $item->start_date }} </a>
                                    </li>
                                    <li><a href=""><i class="far fa-calendar"></i> {{ $item->end_date }} </a>
                                    </li>

                                </ul>
                                <h3 class="news-details__title">{{ $item->title }}</h3>
                                <p class="news-details__text-1">{!! $item->requirment !!}</p>

                            </div>
                            <div class="pricing__btn-box">
                                <a href="{{ route('apply', $item->id) }}"
                                    class="thm-btn pricing__btn">{{ __('website.apply') }}</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">

                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">{{ __('website.last_job') }}</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($items as $data)

                                        <li>

                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <span class="sidebar__post-content-meta"><i class="far fa-calendar"></i>
                                                        {{ $data->end_date }} </span>
                                                    <a href="">{{ $data->title }}</a>
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
