@extends('admin.layouts.master')
@section('content')
    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">{{ __('system.add') }} </h4>

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
                <form class="card" method="POST" action="{{ route('add_event', $data->id) }}" enctype="multipart/form-data">
                @else
                    <form class="card" method="POST" action="{{ route('add_event') }}" enctype="multipart/form-data">
            @endif              
             @csrf
                <div class="row m-2">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-4">
                            <label for="inputState" class="col-form-label">{{ __('system.lang') }}</label>
                            <select id="inputState" name="lang" class="form-control">
                                @foreach ($langs as $lang)

                                    <option value="{{ $lang->lang }}" @if(isset($data->lang) && ($data->lang==$lang->lang)) selected  @endif>{{ $lang->value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-dark"> {{ __('system.title') }}</label>
                            @if (isset($data->id))
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="logo" value="{{$data->image}}">
                                @endif
                        <input type="text" name="title" class="form-control" value="@if(isset($data->id)){{ $data->title}}@else{{ old('title') }}@endif"
                            placeholder="{{ __('system.title') }}">
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('title')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> {{ __('system.descripe') }}</label>
                           
                            <textarea  name="description" class="form-control" value=""
                            placeholder="" id="tinymce">@if (isset($data->id)) {{ $data->description }} @else {{ old('description') }} @endif</textarea>
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('description')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-dark">الصورة الرمزية </label>

                    </div>


                    <input type="file" class="dropify" data-default-file="@if(isset($data->image)) {{ $data->image }} @endif" name="image" data-height="180"  accept="image/*"/>


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



 
