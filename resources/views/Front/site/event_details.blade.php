@extends('front.layouts.master')
@section('content')


    @if ($event->id > 0)
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="{{ $event->image }}" alt="">
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href=""><i class="far fa-calendar"></i>
                                            {{ $event->created_at->format('j F, Y') }} </a>
                                    </li>

                                </ul>
                                <h3 class="news-details__title">{{ $event->title }}</h3>
                                <p class="news-details__text-1">{!! $event->description !!}</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">

                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">{{ __('website.post') }}</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($events as $data)

                                        <li>
                                            <div class="sidebar__post-image" style="margin-left:20px">
                                                <img src="{{ $data->image }}" height="70px" width="70px" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <span class="sidebar__post-content-meta"><i class="far fa-calendar"></i>
                                                        {{ $data->created_at->format('j F, Y') }} </span>
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
