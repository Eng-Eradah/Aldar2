@extends('front.layouts.master')
@section('content')
 

@if($events->count()>0)
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
    @else
    <!--Error Page Start-->
    <section class="error-page ">

        <div class="container ">
            <div class="row">
                <div class="col-xl-12  ">
                    <div class="error-page__inner ">
                        <div class="error-page__title-box">
                            <img src="{{ asset('/images/error/404.jpg') }}" width="600px" >
                            <br>
                            <a href="{{ route('home') }}" class="thm-btn error-page__btn mt-5">{{ __('website.home') }}</a>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Error Page End-->
@endif
    @endsection