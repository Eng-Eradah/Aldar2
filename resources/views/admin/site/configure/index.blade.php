@extends('admin.layouts.master')
@section('content')

<div class="side-app mt-5">

    <div class="page-header">
        
    </div>
    <!-- /Page Header-->

    <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabs style</h3>
                    </div>
                    <div class="card-body p-6">
                        <div class="panel panel-primary">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab1" class="active" data-toggle="tab">{{ __('system.Abouts') }}</a></li>
                                        <li><a href="#tab2" data-toggle="tab">{{ __('system.Brifes') }}</a></li>
                                        <li><a href="#tab3" data-toggle="tab">{{ __('system.Visions') }}</a></li>
                                        <li><a href="#tab4" data-toggle="tab">{{ __('system.Missions') }}</a></li>
                                        <li><a href="#tab5" data-toggle="tab">{{ __('system.Scopes') }}</a></li>
                                        <li><a href="#tab6" data-toggle="tab">{{ __('system.Strategys') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content ">
                                    <div class="tab-pane active " id="tab1">
                                        <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','AboutUs')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($about->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                            <br>
                                            <br>
                                            
                                        <div class="contect mt-5 d-block">
                                        <p>
                                        @if(isset($about->description))
                                        {{$about->description}}
                                    @endif</p>
                                    </div></div>
                                    <div class="tab-pane  " id="tab2">
                                        <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','Brife')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($Brife->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                        <br>
                                        <br>
                                        
                                    <div class="contect mt-5 d-block">
                                    <p>
                                        @if(isset($Brife->description))
                                        {{$Brife->description}}
                                    @endif</p>
                                </div>
                            </div>
                                    <div class="tab-pane " id="tab3">
                                       <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','Vision')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($Vision->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                        <br>
                                        <br>
                                        
                                    <div class="contect mt-5 d-block">
                                    <p>
                                        @if(isset($Vision->description))
                                        {{$Vision->description}}
                                    @endif</p>
                                </div>     
                                    </div>
                                    <div class="tab-pane  " id="tab4">
                                        <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','Mission')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($Mission->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                        <br>
                                        <br>
                                        
                                    <div class="contect mt-5 d-block">
                                    <p>
                                        @if(isset($Mission->description))
                                        {{$Mission->description}}
                                    @endif</p>
                                </div> 
                                    </div>
                                    <div class="tab-pane  " id="tab5">
                                        <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','Scope')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($Scope->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                        <br>
                                        <br>
                                        
                                    <div class="contect mt-5 d-block">
                                    <p>
                                        @if(isset($Scope->description))
                                        {{$Scope->description}}
                                    @endif</p>
                                </div> 
                                    </div>
                                    <div class="tab-pane  " id="tab6">
                                        <button type="button" class="btn btn-primary"  style="float:left;"><a href="{{route('addconfigure','Strategy')}}" class="text-white"><i class="fe fe-plus mr-2"></i>@if(isset($Strategy->description)){{ __('system.update') }}@else{{ __('system.add') }}@endif</a></button>
                                        <br>
                                        <br>
                                        
                                    <div class="contect mt-5 d-block">
                                    <p>
                                        @if(isset($Strategy->description)){{$Strategy->description}}
                                    @endif</p>
                                </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

    
@endsection