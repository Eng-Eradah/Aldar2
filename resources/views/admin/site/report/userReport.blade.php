@extends('admin.layouts.master')
@section('content')

<div class="side-app mt-5">

    @role('lawyer')
    <div class="page-header">
    <button type="button" class="btn btn-primary" ><a href="{{route('addreport')}}" class="text-white"><i class="fe fe-plus mr-2"></i>{{ __('system.add') }}</a></button>
</div>
@endrole
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

                                <table class="table table-bordered border-top mb-0  ">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <th> {{ __('system.title') }}</th>    
                                            <th> التقرير</th>    
                                            <th>اسم العميل </th>    
                                            <th>اسم المحامي</th>   
                                            <th>الملفات</th>   
                                             
                                            <th>{{ __('system.status') }}</th>    
                                            @role('lawyer')
                                            <th>{{ __('system.operation') }}</th>   

                                        @endrole
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item as $data)
                                        
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <th>{{$data->title}}</th>    
                                            <td>@php echo substr($data->report,0,200)@endphp</td>
                                            <th>{{$data->user->name}}</th>    
                                             <td>{{$data->lawyer->name}}</td>
                                             <td><div class="btn-group">
                                                <a href="{{route('show',$data->id)}}" class="btn btn-info"><i class="fa fa-address-card"></i></a>
                                             </div></td>
                                                <th>
                                                @if($data->is_active==1)
                                                <span class='badge badge-success'>{{ __('system.active') }}</span>
                                                @else
                                                <span class='badge badge-danger'>{{ __('system.notactive') }}</span>
                                            
                                                @endif
                                                
                                            
                                            </th>        
                                    
                                            @role('lawyer')
                                            <th>
                                                
                                                <div class="btn-group">
                                                    <a href="{{route('addreport',$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                
                                                    @if($data->is_active==1)
                                                    <a href="{{route('toggle_report',$data->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    @else
                                                    <a href="{{route('toggle_report',$data->id)}}" class="btn btn-success"><i class="fa fa-check"></i></a>
                                                    @endif
                                                    
                    
                                                </div>
                                            </th>  
                                           
                                            @endrole 
                                            
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