@extends('admin.layouts.master')
@section('content')

    <div class="side-app">

        <!-- Page Header-->
        <div class="page-header">
        <h4 class="page-title"> {{$types}}  </h4>

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
                    <div class="form-group col-md-4">
                        <label for="inputState" class="col-form-label">{{ __('system.lang') }}</label>
                        <select id="inputState" name="lang" class="form-control">
                            @foreach ($langs as $lang)

                                <option value="{{ $lang->lang }}" @if(isset($data->lang) && ($data->lang==$lang->lang)) selected  @endif>{{ $lang->value }}</option>
                            @endforeach
                        </select>
                    </div>
                      <input type="hidden" name="title" value="{{$type}}">
                        <label class="form-label text-dark">{{ __('system.descripe') }}</label>
                   
                        <textarea type="text" name="descrption" rows="20"
                            class="form-control textarea" id="tinymce">@if(isset($data->id)){{$data->description }} @else  {{old('descrption')}}@endif</textarea>

                        @error('descrption')
                            <div class=" text-danger">{{ $message }}</div>
                        @enderror

                </div>
                
                <div class="card-footer text-left">
                    <input type="submit" name="send" class="btn btn-primary" value="حفظ">
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


   


