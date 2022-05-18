@extends('admin.layouts.master')
@section('content')
<style>
    
input[type="date"] {
  display:block;
  position:relative;
  padding:1rem 3.5rem 1rem 0.75rem;
  
  font-size:1rem;
  font-family:monospace;
  
  border:1px solid #8292a2;
  border-radius:0.25rem;
  background:
    white
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' viewBox='0 0 20 22'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23688EBB' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' transform='translate(1 1)'%3E%3Crect width='18' height='18' y='2' rx='2'/%3E%3Cpath d='M13 0L13 4M5 0L5 4M0 8L18 8'/%3E%3C/g%3E%3C/svg%3E")
    right 1rem
    center
    no-repeat;
  
  cursor:pointer;
}
input[type="date"]:focus {
  outline:none;
  border-color:#3acfff;
  box-shadow:0 0 0 0.25rem rgba(0, 120, 250, 0.1);
}

</style>
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label text-dark"> تاريخ البدء</label>
                            @if (isset($data->id))
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                 @endif
                            <input id="start_date" class="input-text js-input" value="@if(isset($data->id)){{$data->start_date}}@else {{ old('start_date') }} @endif" name="start_date" type="date">
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('start_date')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label text-dark"> تاريخ الانتهاء </label>

                            <input id="end_date" class="input-text js-input" value="@if(isset($data->id)){{$data->end_date}}@else {{ old('end_date') }} @endif" name="end_date" type="date">
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
                            class="form-control textarea">@if(isset($data->id)){{($data->requirment) }} @else  {{old('descrption')}}@endif</textarea>

                        @error('descrption')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                </div>
                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.add') }}">
                </div>

            </div>
            </form>



        </div>

    </div>


@endsection


