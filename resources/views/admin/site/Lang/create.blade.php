@extends('admin.layouts.master')
@section('content')

    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">إدارة اللغات </h4>

        </div>
        <!-- /Page Header-->

        <div class="col-lg-12 col-md-12 col-md-12 ">

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
            @if (isset($data->id))
                <form class="card" method="POST" action="{{ route('add_lang',$data->id) }}">
                @else
                    <form class="card" method="POST" action="{{ route('add_lang') }}">
            @endif
            @csrf
            <div class="row m-2">
                <div class="col-md-12 d-inline ">
                    
                        <div class="form-group col-md-6">

                        <label class="form-label text-dark"> اللغة</label>
                        @if (isset($data->id))
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            @endif
                        <input type="text" name="name" class="form-control" value="@if (isset($data->id)) {{ $data->value }} @else {{ old('name') }} @endif"
                        placeholder="اللغة">
                        <span id="c_nameArError" class="jsError" role="alert"></span>
                        @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">

                        <label class="form-label text-dark"> الاختصار</label>
                       
                        <input type="text" name="lang" class="form-control" value="@if (isset($data->id)) {{ $data->lang }} @else {{ old('lang') }} @endif"
                        placeholder="الاختصار">
                        <span id="c_nameArError" class="jsError" role="alert"></span>
                        @error('lang')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.save') }}">
                </div>

            </div>
            </form>



        </div>

    </div>


@endsection

