@extends('front.layouts.master')
@section('content')


    @if ($books->count() > 0)
        <!--Similar Portfolio Start-->
        <section class="similar-portfolio">
            <div class="container">
                <div class="section-title text-center mt-5">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">{{ __('website.book') }}</p>
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
        <div class="d-flex justify-content-center">
            {!! $books->links() !!}
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
