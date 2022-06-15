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
                <li>{{__('website.contact')}}</li>
            </ul>
            <h2>{{__('website.contact')}}</h2>
        </div>
    </div>
</section>
<section class="contact-page">
    <div class="text-wrap">

        <div class="">

            @if (session('error'))
                <div class="alert alert-danger text-right" role="alert"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('error') }}</div>


            @endif
            @if (session('success'))
                <div class="alert alert-info mb-4 text-right" role="alert"><button type="button" class="close"
                        data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success') }}</div>

            @endif



        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-right">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title  ">{{__('website.contact')}}</p>
                            <div class="section-title-shape-1">
                                <img src="{{asset('/front/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{asset('/front/images/shapes/section-title-shape-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contact-page__call-email">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        <form action="{{route('send_contact')}}"  class="comment-one__form contact-form-validated" novalidate="novalidate">
                        @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="{{__('website.name')}}" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="{{__('website.email')}}" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="{{__('website.phone')}}" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="{{__('website.subject')}}" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="{{__('website.message')}}"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">{{__('website.send')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
    @endsection