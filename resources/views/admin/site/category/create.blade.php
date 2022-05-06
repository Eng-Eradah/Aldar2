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
                <form class="card" method="POST" action="{{ route('add_category', $data->id) }}">
                @else
                    <form class="card" method="POST" action="{{ route('add_category') }}">
            @endif
            @csrf
            <div class="row m-2">
                <div class="col-md-12 d-inline ">
                    <div class="form-group col-md-6">
                        <label for="inputState" class="col-form-label">{{ __('system.lang') }}</label>
                        <select id="inputState" name="lang" class="form-control">
                            @foreach ($langs as $lang)

                                <option value="{{ $lang->lang }}" @if (isset($data->lang) && $data->lang == $lang->lang) selected @endif>{{ $lang->value }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group col-md-6">

                        <label class="form-label text-dark"> {{ __('system.title') }}</label>
                        @if (isset($data->id))
                            <input type="hidden" name="id" value="{{ $data->id }}">
                        @endif
                        <input type="text" name="name" class="form-control" value="@if (isset($data->id)) {{ $data->name }} @else {{ old('name') }} @endif"
                        placeholder="{{ __('system.title') }}">
                        <span id="c_nameArError" class="jsError" role="alert"></span>
                        @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.add') }}">
                </div>

            </div>
            </form>



        </div>

    </div>


@endsection

