@extends('front.layouts.master')
@section('content')

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
                    <li>{{ __('website.apply') }}</li>
                </ul>
                <h2>{{ __('website.apply') }}</h2>
            </div>
        </div>
    </section>
    <section class="faq-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
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
                    <div class="faq-one__single">
                        <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1"
                            data-grp-name="faq-one-accrodion-1">
                            <form action="{{route('applyJob',$id)}}" method="post" class="card" enctype="multipart/form-data">
                             @csrf
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4> {{__('website.info')}}</h4>
                                    </div>
                                    <div class="accrodion-content" style="display: none;">
                                        <div class="inner">
                                            <div class="row m-3">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}"
                                                        placeholder="{{ __('website.name') }}">
                                                        @error('name')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <input type="email" name="email" id="" class="form-control"
                                                        placeholder="{{ __('website.email') }}" value="{{ old('email') }}">
                                                        @error('email')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="phone" id="" class="form-control"
                                                        placeholder="{{ __('website.phone') }}" value="{{ old('phone') }}">
                                                        @error('phone')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="address" id="" class="form-control"
                                                        placeholder="{{ __('website.addres') }}" value="{{ old('address') }}">
                                                        @error('address')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <input type="date" name="birth_date" id="" class="form-control"
                                                        placeholder="{{ __('website.date') }}" value="{{ old('birth_date') }}">
                                                        @error('birth_date')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror

                                                </div>
                                            </div>

                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion ">
                                    <div class="accrodion-title">
                                        <h4> {{__('website.education')}}</h4>
                                    </div>
                                    <div class="accrodion-content" style="">
                                        <div class="inner">
                                            <div class="row m-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputState"
                                                        class="col-form-label">{{ __('website.degree') }}</label>

                                                    <select id="inputState" name="degree" class="form-control">


                                                        <option value="Doctoral" selected>Doctoral Degree</option>
                                                        <option value="Master">Master Degree</option>
                                                        <option value="Bechelor">Bechelor Degree</option>
                                                        <option value="Diploma">Diploma Degree</option>
                                                    </select>
                                                    @error('degree')
                                                    <div class=" text-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputState"
                                                        class="col-form-label">{{ __('website.year') }}</label>

                                                    <input type="date" name="date" id="" class="form-control"
                                                        placeholder="{{ __('website.date') }}" value="{{ old('date') }}">
                                                        @error('date')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputState"
                                                        class="col-form-label">{{ __('website.experience') }}</label>

                                                    <input type="text" name="experience" id="" class="form-control"
                                                        placeholder="{{ __('website.date') }}">
                                                        @error('experience')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="col-md-12">


                                                    <label
                                                        class="form-label text-dark">{{ __('website.another_info') }}</label>

                                                    <textarea type="text" name="information" rows="20"
                                                        class="form-control textarea"
                                                        id="tinymce"> {{ old('information') }}</textarea>

                                                    @error('information')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row  m-3">
                                                <div class="form-group col-md-12">
                                                    <label class="form-label text-dark">{{ __('website.cv') }}</label>

                                                    <input type="file" class="dropify" data-default-file="{{ old('cv') }}" name="cv"
                                                    data-height="180" accept=".pdf"/>


                                                    <span id="c_imgError" class="jsError" role="alert"></span>
                                                </div>
                                            </div>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="card-footer text-left bg-white mt-3">
                                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.save') }}">
                                </div>
                            </form>  
                        </div>
                       
                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
@endsection
