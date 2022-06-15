@extends('admin.layouts.master')
@section('content')
<style>


</style>
    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">إضافة وظيفة </h4>
           
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
                <form class="card" method="POST" action="{{ route('add_job', $data->id) }}">
             @else
                    <form class="card" method="POST" action="{{ route('add_job') }}">
            @endif
            @csrf
            <div class="row m-2">
                <div class="col-md-12 ">
                  
                    <div class="form-group">
                        <label class="form-label text-dark"> {{ __('system.title') }}</label>
                        @if(isset($data->id))
                    <input type="hidden" name="id" value="{{$data->id}}">
                        @endif
                        <input type="text" name="title" class="form-control" value="@if(isset($data->id)){{($data->title) }} @else  {{old('title')}}@endif"
                            placeholder="{{ __('system.title') }}">
                        <span id="c_nameArError" class="jsError" role="alert"></span>
                        @error('title')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
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
                <div class="col-md-12">

                    
                        <label class="form-label text-dark">{{ __('system.descripe') }}</label>
                   
                        <textarea type="text" name="descrption" rows="20"
                            class="form-control textarea" id="tinymce">@if(isset($data->id)){{($data->requirment) }} @else  {{old('descrption')}}@endif</textarea>

                        @error('descrption')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

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


