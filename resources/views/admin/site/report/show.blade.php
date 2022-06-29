@extends('admin.layouts.master')
@section('content')

    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
            <h4 class="page-title">إدارة التقارير </h4>

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
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark"> {{ __('system.title') }}</label>
                                    
                                <input type="text" name="title" class="form-control" value="@if(isset($data->id)){{ $data->title }}@else{{ old('title') }}@endif" placeholder="العنوان" readonly>
                                    <span id="c_nameArError" class="jsError" role="alert"></span>
                                   
                                </div>
                            </div>
                        </div>
                         
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark"> اسم المحامي</label>
                                  
                                <input type="text" name="title" class="form-control" value="{{$data->lawyer->name}}" placeholder="العنوان" readonly>
                                    <span id="c_nameArError" class="jsError" role="alert"></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark"> اسم العميل</label>
                                    
                                <input type="text" name="title" class="form-control" value="{{$data->user->name}}" placeholder="العنوان" readonly>
                                    <span id="c_nameArError" class="jsError" role="alert"></span>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                   
                   

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label class="form-label text-dark"> التقرير</label>

                            <textarea name="report" class="form-control " rows="10" value=""
                                placeholder="التقرير" id="" readonly>{!!$data->report!!} </textarea>
                            <span id="c_nameArError" class="jsError" role="alert"></span>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label text-dark">الملف  (اختياري)</label>

                    </div>


                    <div class="aks-file-upload-content testing">
                        @if (isset($data->id))
                    
                            <input type="hidden" value="{{$data->file}}" name="file">
                        @foreach (json_decode($data->file) as $image)
                        @php $ext = pathinfo($image, PATHINFO_EXTENSION); 
                         $allowedExts = array("gif", "jpeg", "jpg", "png");@endphp
                        @if(in_array($ext, $allowedExts))
                        <a href="{{ asset('images/report/'.$image) }}"><img  class="aks-file-upload-preview " style="height:200px;width:200px" 
                         src="{{ asset('images/report/'.$image) }}" ></a>
                         @else
                         <a href="{{ asset('images/report/'.$image) }}"><img width="100px"src="{{asset('images\pdf.png')}}"></a>
                          @endif
                         @endforeach
                   
                   @endif
                </div>
                    <span id="c_imgError" class="jsError" role="alert"></span>
                            @error('image')
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
@if(isset($data->id))
<script>
      $("aks-file-upload").change(function(){
          console.log('hhh');
    $(".testing").html(' ');
});
</script>
@endif
@endsection

