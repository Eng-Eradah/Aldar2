@extends('front.layouts.master')
@section('content')


    @if ($item->count() > 0)
        <!--pricing Start-->
        <section class="pricing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">{{ __('website.job') }}</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('/front/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="pricing__tab">
                    <div class="pricing__tab-box tabs-box">

                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="monthly">
                                <div class="pricing__main-content-box">
                                    <div class="row">

                                        @foreach ($item as $data)

                                            <div class="col-xl-4 col-lg-4">
                                                <div class="pricing__single">
                                                    <div class="pricing-shape-1">
                                                        <img src="{{ asset('/front/images/shapes/pricing-shape-1.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="pricing__single-top" style="width:100%">
                                                        <div class="pricing__img" style="width:100%">
                                                            <img src="{{ asset('/front/images/resources/pricing-img-2.png') }}"
                                                                style="width:100%" alt="">
                                                        </div>


                                                    </div>
                                                    <div class="pricing__content mt-5">
                                                        <p style="display: inline; "><i class="far fa-calendar "
                                                                style="margin-left: 20px"></i>{{ $data->start_date }}</p>
                                                        <p style="display: inline; "><i class="far fa-calendar "
                                                                style="margin-left: 20px"></i>{{ $data->end_date }}</p>
                                                    </div>
                                                    <div class="pricing__single-bottom">
                                                        <h3 class="pricing__title">{{ $data->title }}</h3>
                                                        <div class="list-unstyled pricing__points">
                                                            @php echo substr($data->requirment,0,300)@endphp
                                                        </div>
                                                        <div class="pricing__btn-box">
                                                            <a href="{{ route('event.details', $data->id) }}"
                                                                class="thm-btn pricing__btn">{{ __('website.apply') }}</a>
                                                            <a href="{{ route('job.details', $data->id) }}"
                                                                class="thm-btn pricing__btn">{{ __('website.details') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing End-->
        <div class="d-flex justify-content-center">
            {!! $item->links() !!}
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
