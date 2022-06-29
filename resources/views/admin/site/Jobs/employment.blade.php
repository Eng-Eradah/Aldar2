@extends('admin.layouts.master')
@section('content')

<div class="side-app mt-5">

    
    <!-- /Page Header-->

    <div class="row mt-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
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

                                <table class="table table-bordered border-top mb-0 table-responsive ">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <th> الاسم</th>    
                                            <th> العنوان </th>    
                                            <th> الايميل </th>    
                                            <th>رقم التلفون</th>    
                                            <th> الدرجة التعليميه</th>    
                                            <th> سنة التخرج</th>    
                                            <th> سنوات الخبرة</th>    
                                            <th>تاريخ الميلاد</th>    
                                            <th> السيرة الذاتية</th>    
                                            <th>معلومات اضافية</th>                                            
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item as $data)
                                        
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->name}}</td>
                                            <th>{{$data->address}}</th>    
                                            <th>{{$data->email}}</th>    
                                            <td>{{$data->phone}}</td> 
                                            <td>{{$data->degree}}</td> 
                                            <td>{{$data->date}}</td> 
                                            <td>{{$data->experience}}</td> 
                                            <td>{{$data->birth_date}}</td> 
                                            <th><a href="{{$data->cv}}"><img width="100px"src="{{asset('images\pdf.png')}}"></a></th>    
   
                                            <th>{{$data->information}}</th>    
                                          
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