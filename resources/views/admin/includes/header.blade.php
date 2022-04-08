<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="E learning Platform" name="description">
    <meta content="abo7midi" name="author">
    <meta name="keywords" content="e learning,training,learning"/>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/admin/images/brand/logo.ico" type="image/x-icon')}}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin//images/brand/logo.ico')}}" />

    <!-- Title -->
    <title> {{ $title ?? '' }}</title>
<!-- Tabs Style -->
<link href="{{asset('/admin/plugins/tabs/tabs.css')}}" rel="stylesheet" />

    <!-- Bootstrap css -->
    <link href="{{asset('/admin/plugins/bootstrap-4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="{{asset('/admin/plugins/sidemenu/sidemenu-rtl.css')}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{asset('/admin/css/style-rtl.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/css/admin-custom.css')}}" rel="stylesheet" />

    <!-- c3.js Charts Plugin -->
    <link href="{{asset('/admin/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{asset('/admin/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />


    <!-- file Uploads -->
    <link href="{{asset('/admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css" />


    <!-- select2 Plugin -->
    <link href="{{asset('/admin/plugins/select2/select2.min-rtl.css')}}" rel="stylesheet" />


    <!---Font icons-->

    <link href="{{asset('/admin/css/icons.css')}}" rel="stylesheet"/>


    <!-- Switcher css -->
    <link  href="{{asset('/admin/switcher/css/switcher-rtl.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

    <!-- Data table css -->
    <link href="{{asset('/admin/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/plugins/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" />

    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/admin/color-skins/color6.css')}}" />

    <link href="{{asset('/admin/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />

   
</head>


<body class="app sidebar-mini" @if(isset($user_type)) @if($user_type=='family' || $user_type=='client') onload="initialize()" @endif @endif>

    		<!--Page-->
		<div class="page">
			<div class="page-main">

    <!--App-Header-->
    <div class="app-header1 header py-1 d-flex">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="header-brand" href="#">
                    <img src="{{asset('images/brand/logo-ar.png')}}"  class="header-brand-img" alt="{{ __('system.logo') }}">
                </a>
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                <div class="header-navicon">
                    <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                
                <div class="d-flex order-lg-2 mr-auto">
                    
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">اختيار الدولة</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body d-flex  justify-content-center">
            <div class="row mr-5">

                
          
                
     
    
    </div>
          </div>
         
        </div>
      </div>
    </div>
              
                     {{-- @endif --}}              
                    <div class="dropdown d-none d-md-flex" >
                        <a  class="nav-link icon">
                            <i class="fe fe-log-out"></i>
                        </a>
                    </div>
    
                    <div class="dropdown d-none d-md-flex">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class=" nav-unread badge badge-danger  badge-pill" id="num"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" id="notiBody">
    
                        </div>
                    </div>
                    <div class="dropdown ">
                        <a href="#" class="nav-link pl-0 leading-none user-img" data-toggle="dropdown">
                            {{-- <img src="{{!empty(user()->user()->profiles()->where('name', 'image')->first())?asset(user()->user()->profiles()->where('name', 'image')->first()->value):asset('/public/assets/images/users/female/25.jpg')}}" alt="profile-img" class="avatar avatar-md brround"> --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow ">
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon icon icon-user"></i> حسابي
                            </a>
    
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon icon icon-power"></i> خروج
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/App-Header-->