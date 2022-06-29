@extends('front.layouts.master')
@section('content')
<style>
    .service-one__title:before{
        background-image:none;
    }
</style>
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('/front/images/backgrounds/benefits-bg-2.jpg') }})">
        </div>
        <div class="page-header-shape-1"><img src="{{ asset('/front/images/shapes/page-header-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                    <li><span>/</span></li>
                    <li>{{ __('website.About2') }}</li>
                </ul>
                <h2>{{ __('website.About2') }}</h2>
            </div>
        </div>
    </section>
    <!--About Three Start-->
    @if ($donor)
        
    <section class="insurance-page-one">
        <div class="services-one__container">
            <div class="row">
                <!--Services One Single Start-->
    @foreach ($donor as $donors)
               
                <div class="col-xl-3 col-lg-2 col-md-3 wow fadeInUp animated mb-5">
                   
                <div class="card" style="width: 18rem;">
                    <img src="{{$donors->image}}" class="card-img-top news-one__img mb-5" alt="...">
                    <div class="card-body">
                      <h4 class="card-text text-center" style="color:#015fc9 ">{{$donors->name}}</h4>
                    </div>
                  </div>  
                </div>

    @endforeach
              
                 
                
                <!--Services One Single End-->
            </div>
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
