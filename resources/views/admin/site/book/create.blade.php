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
                                @endif
                            <input type="text" name="title" class="form-control" value="@if(isset($data->id)){{ $data->title }}@else{{ old('title') }}@endif" placeholder="العنوان">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('title')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> الكاتب </label>

                            <input type="text" name="auther" class="form-control" value="@if(isset($data->id)){{ $data->auther }}@else{{ old('auther') }}@endif" placeholder="الكاتب ">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('auther')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label text-dark"> رابط التحميل</label>

                            <input type="text" name="download_link" class="form-control" value="@if(isset($data->id)){{ $data->download_link }}@else{{ old('download_link') }}@endif" placeholder="رابط التحميل">
                                <span id="c_nameArError" class="jsError" role="alert"></span>
                                @error('download_link')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">إصدارتنا</label>
                                <input class="form-check-input  mr-2" type="checkbox" id="blankCheckbox" name="version"
                                    value="1" @if (isset($data->id)) 
                                    @if ($data->version) checked @endif @endif />

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> {{ __('system.descripe') }}</label>

                            <textarea name="description" class="form-control textarea" value=""
                                placeholder="{{ __('system.description') }}">@if (isset($data->id)){{ $data->description }}@else{{ old('subTitle') }}@endif </textarea>
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                            @error('description')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-dark">الصورة الرمزية (اختياري)</label>

                    </div>


                    <input type="file" class="dropify" data-default-file="@if (isset($data->image)) {{ $data->image }} @endif" name="image" data-height="180"  accept="image/*"/>


                    <span id="c_imgError" class="jsError" role="alert"></span>

                </div>
                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value=" {{ __('system.add') }}">
                </div>

            </div>
            </form>



        </div>

    </div>


@endsection


@push('tiny')

    <script>
        tinymce.init({
            selector: '.textarea',
            language_url: '/public/langs/ar.js',
            height: "480",
            language: 'ar',
            directionality: 'rtl',
            contextmenu: 'link image table',
            plugins: 'image advlist lists imagetools code table link emoticons searchreplace ',
            toolbar: 'undo redo  image  | table | link | emoticons | styleselect | bold italic |  alignleft aligncenter alignright alignjustify  bullist numlist outdent indent forecolor backcolor ',
            menu: {
                favs: {
                    title: 'المفضلة',
                    items: '   searchreplace | emoticons'
                }
            },
            menubar: 'favs edit view insert format  help',
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
              URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
              images_upload_url: 'postAcceptor.php',
              here we add custom filepicker only to Image dialog
             */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });

    </script>


@endpush
