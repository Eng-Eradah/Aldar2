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
                <form class="card" method="POST" action="{{ route('add_report', $data->id) }}"
                    enctype="multipart/form-data">
                @else
                    <form class="card" method="POST" action="{{ route('add_report') }}" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="row m-2">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark"> {{ __('system.title') }}</label>
                                    @if (isset($data->id))
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <input type="hidden" name="logo" value="{{ $data->image }}">
                                    @endif
                                <input type="text" name="title" class="form-control" value="@if(isset($data->id)){{ $data->title }}@else{{ old('title') }}@endif" placeholder="العنوان">
                                    <span id="c_nameArError" class="jsError" role="alert"></span>
                                    @error('title')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputState" class="col-form-label">المستخدم</label>
                                <select id="inputState" name="user_id" class="form-control">
                                    @foreach ($users as $user)

                                        <option value="{{ $user->id }}" @if (isset($data->user_id) && $data->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                   
                   

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> التقرير</label>

                            <textarea name="report" class="form-control textarea" value=""
                                placeholder="التقرير">@if (isset($data->id)){{ $data->report }}@else{{ old('report') }}@endif </textarea>
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('report')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-dark">الملف  (اختياري)</label>

                    </div>


                    <input type="file" class="dropify" data-default-file="@if(isset($data->image)){{ $data->image }}@else{{ old('image') }}@endif" name="image" data-height="180"  accept=".pdf"/>


                    <span id="c_imgError" class="jsError" role="alert"></span>
                            @error('image')
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

