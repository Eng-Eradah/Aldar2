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
            
                    <form class="card" method="POST" action="{{ route('add_configure') }}">
            @csrf
            <div class="row m-2">
               
                <div class="col-md-12">

                      <input type="hidden" name="title" value="{{$type}}">
                        <label class="form-label text-dark">{{ __('system.descripe') }}</label>
                   
                        <textarea type="text" name="descrption" rows="20"
                            class="form-control textarea">@if(isset($data->id)){{($data->text) }} @else  {{old('descrption')}}@endif</textarea>

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
