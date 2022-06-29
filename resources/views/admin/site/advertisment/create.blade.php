@extends('admin.layouts.master')
@section('content')
    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">إدارة الاعلانات </h4>

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

            <form class="card" method="POST" action="{{ route('add_ads') }}" enctype="multipart/form-data">
                @csrf
                

                    <div class="row col-12">
                        <div class="col-6">
                            <div class="form-group col-12">
                                <label for="inputState" class="col-form-label">{{ __('system.lang') }}</label>
                            <select id="inputState" name="lang" class="form-control">
                                @foreach ($langs as $lang)

                                    <option value="{{ $lang->lang }}" @if (isset($data->lang) && $data->lang == $lang->lang) selected @endif>{{ $lang->value }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group col-12">
                                <label class="form-label text-dark"> {{ __('system.title') }}</label>
                                @if (isset($data->id))
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                @endif
                                 <input type="text" name="title" class="form-control" value="@if (isset($data->id)) {{ $data->main_title }} @else
                                {{ old('title') }} @endif"
                                placeholder="{{ __('system.title') }}">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('title')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row col-12">
                        <div class="col-6">
                            <div class="form-group col-12">
                                <label class="form-label text-dark"> تاريخ البدء</label>
                                @if (isset($data->id))
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                     @endif
                                     <input class="form-control" value="@if(isset($data->id)){{$data->start_date}}@else {{ old('start_date') }} @endif" name="start_date" type="date">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('start_date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group col-12">
                                <label class="form-label text-dark"> تاريخ الانتهاء </label>
    
                                <input  class="form-control" value="@if(isset($data->id)){{$data->end_date}}@else {{ old('end_date') }} @endif" name="end_date" type="date">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('end_date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> {{ __('system.descripe') }}</label>
                            @if (isset($data->id))
                                <input type="hidden" name="id" value="{{ $data->id }}">
                            @endif
                        <input type="text" name="description" class="form-control" value="@if (isset($data->id)) {{ $data->sub_title }} @else
                            {{ old('description') }} @endif"
                            placeholder="{{ __('system.description') }}">
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('description')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-dark">الصورة الرمزية (اختياري)</label>

                    </div>


                    <input type="file" class="dropify" data-default-file="@if (isset($data->image)) {{ $data->image }} @endif" name="image" data-height="180" accept="image/*" />


                    <span id="c_imgError" class="jsError" role="alert"></span>

                </div>
                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.save') }}">
                </div>

        </div>
        </form>



    </div>

    </div>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#tinymce',
            height: 600
        });

    </script>
@endsection
