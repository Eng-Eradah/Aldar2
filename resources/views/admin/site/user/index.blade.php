@extends('admin.layouts.master')
@section('content')

<div class="side-app mt-5">

    <div class="page-header">
        
    <button type="button" class="btn btn-primary" ><a href="{{route('adduser')}}" class="text-white"><i class="fe fe-plus mr-2"></i>{{ __('system.add') }}</a></button>
    </div>
    <!-- /Page Header-->

    <div class="row">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <div class="text-wrap">

                                    <div class="">
                
                                        @if(session('error'))
                                        <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> {{ session('error') }}</div>
                
                
                                    @endif
                                    @if(session('success'))
                                    <div class="alert alert-info mb-4" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> {{ session('success') }}</div>
                
                                    @endif
                
                
                
                                    </div>

                                </div>

                                <table class="table table-bordered border-top mb-0 ">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <th> الاسم</th>    
                                            <th> الايميل</th>    
                                            <th>الصورة</th>    
                                            <th>الصلاحيات</th>    
                                            <th>{{ __('system.status') }}</th>                                            
                                            <th>{{ __('system.operation') }}</th>    
                                        
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <th>{{$data->name}}</th>    
                                            <th>{{$data->email}}</th>    
                                            <th><img width="200px"src="{{$data->profile_photo_path}}"></th>    
                                            <th>
                                                @foreach($data->roles as $role)
                                                {{$role->display_name}} 
                                            @endforeach
                                            </th>    
                                          
                                            <th>
                                                @if($data->is_active==1)
                                                <span class='badge badge-success'>{{ __('system.active') }}</span>
                                                @else
                                                <span class='badge badge-danger'>{{ __('system.notactive') }}</span>
                                            
                                                @endif
                                                
                                            
                                            </th>        
                                    
                                            
                                            <th>
                                                
                                                <div class="btn-group">
                                                
                                                    @if($data->is_active==1)
                                                    <a href="{{route('toggle_user',$data->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    @else
                                                    <a href="{{route('toggle_user',$data->id)}}" class="btn btn-success"><i class="fa fa-check"></i></a>
                                                    @endif
                                                    
                    
                                                </div>
                                            </th>    
                                            
                                            </tr>
                                        @endforeach
                                        
        
                                    </tbody>
                                    
                                </table>
                                
                                    

                                        
                                    </div>
                                    
                            <div class="card-footer text-left">
                                
                            </div>
                       
                                    </div>



                    </div>
                </div>
            </div>
    </div>
</div>

    
@endsection