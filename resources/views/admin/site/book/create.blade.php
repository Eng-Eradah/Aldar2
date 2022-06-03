@extends('admin.layouts.master')
@section('content')
    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">إضافة كتاب جديد</h4>

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
                <form class="card" method="POST" action="{{ route('add_book', $data->id) }}"
                    enctype="multipart/form-data">
                @else
                    <form class="card" method="POST" action="{{ route('add_book') }}" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="row m-2">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">{{ __('system.lang') }}</label>
                                <select id="" name="lang" class="form-control">
                                    @foreach ($langs as $lang)

                                        <option value="{{ $lang->lang }}" @if (isset($data->lang) && $data->lang == $lang->lang) selected @endif>{{ $lang->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputState" class="col-form-label">القسم</label>
                                <select id="inputState" name="category_id" class="form-control">
                                    @foreach ($category as $cat)

                                        <option value="{{ $cat->id }}" @if (isset($data->category_id) && $data->category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> {{ __('system.title') }}</label>
                                @if (isset($data->id))
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <input type="hidden" name="logo" value="{{ $data->image }}">
                                    <input type="hidden" name="oldFile" value="{{ $data->file }}">
                                @endif
                                <input type="text" name="title" class="form-control" value="@if (isset($data->id)) {{ $data->title }}@else{{ old('title') }} @endif" placeholder="العنوان">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('title')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> الكاتب </label>

                                <input type="text" name="auther" class="form-control" value="@if (isset($data->id)) {{ $data->auther }}@else{{ old('auther') }} @endif" placeholder="الكاتب ">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('auther')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> دار النشر </label>

                                <input type="text" name="publisher" class="form-control" value="@if (isset($data->id)) {{ $data->publisher }}@else{{ old('publisher') }} @endif"
                                placeholder="الكاتب ">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('publisher')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> تاريخ النشر  </label>

                                <input type="date" name="date" class="form-control" value="@if(isset($data->id)){{$data->date}}@else
                                {{ old('date') }} @endif"
                                >
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('date')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> {{ __('system.descripe') }}</label>

                            <textarea name="description" class="form-control textarea" value=""
                                placeholder="{{ __('system.description') }}" id="tinymce">@if (isset($data->id)){{ $data->description }}@else{{ old('subTitle') }}@endif </textarea>
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('description')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
               
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label text-dark">اختيار الملف</label>

                        </div>


                        <input type="file" class="dropify" data-default-file="@if (isset($data->file)) {{ $data->file }} @endif"
                        name="file" data-height="180" accept=".pdf"/>

                        @error('file')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror
                        <span id="c_imgError" class="jsError" role="alert"></span>

                    </div>
                
                <div class="col-6">

                    <div class="form-group">
                        <label class="form-label text-dark">الصورة الرمزية</label>

                    </div>


                    <input type="file" class="dropify" data-default-file="@if (isset($data->image)) {{ $data->image }} @endif" name="image"
                    data-height="180" accept="image/*"/>

                    @error('image')
                        <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    <span id="c_imgError" class="jsError" role="alert"></span>

                </div>
            
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
