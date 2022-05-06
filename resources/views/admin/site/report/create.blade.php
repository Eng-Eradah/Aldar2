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
                                <label for="inputState" class="col-form-label">المستخدم</label>
                                <select id="inputState" name="user_id" class="form-control">
                                    @foreach ($users as $user)

                                        <option value="{{ $user->id }}" @if (isset($data->user_id) && $data->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
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