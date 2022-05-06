<!doctype html>
<html lang="en">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Eudica - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html rtl, html dir rtl, rtl website template, bootstrap 4 rtl template, rtl bootstrap template, admin panel template rtl, admin panel rtl, html5 rtl, academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

			<!-- Favicon -->
            <link rel="icon" href="{{asset('/admin/images/brand/logo.png')}}" type="image/x-icon"/>
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin/images/brand/logo.png')}}" />
    
            <!-- Title -->
            <title>الدار العربية  ـ تسجيل الدخول</title>
    
            <!-- Bootstrap css -->
            <link href="{{asset('/admin/plugins/bootstrap-4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" />
    
            <!-- Sidemenu Css -->
            <link href="{{asset('/admin/plugins/sidemenu/sidemenu-rtl.css')}}" rel="stylesheet" />
    
            <!-- summernote Css -->
            <link href="{{asset('/admin/plugins/summernote/summernote-bs4.min.css')}}" rel="stylesheet" />
    
            <!-- Dashboard Css -->
            <link href="{{asset('/admin/css/style-rtl.css')}}" rel="stylesheet" />
            <link href="{{asset('/admin/css/admin-custom.css')}}" rel="stylesheet" />
    
            <!-- c3.js')}} Charts Plugin -->
            <link href="{{asset('/admin/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
    
            <!-- select2 Plugin -->
            <link href="{{asset('/admin/plugins/select2/select2.min.css')}}" rel="stylesheet" />
    
            <!-- Time picker Plugin -->
            <link href="{{asset('/admin/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
    
            <!-- Date Picker Plugin -->
            <link href="{{asset('/admin/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />
    
            <!-- Custom scroll bar css-->
            <link href="{{asset('/admin/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
    
            <!-- file Uploads -->
            <link href="{{asset('/admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css" />
    
            <!---Font icons-->
            <link href="{{asset('/admin/css/icons.css')}}" rel="stylesheet"/>
    
            <!-- Switcher css -->
            <link  href="{{asset('/admin/switcher/css/switcher-rtl.css')}}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>
    
            <!-- Color Skin css -->
            <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/admin/color-skins/color6.css')}}" />
    
	</head>

	<body class="" style="background-color:#d7e4eb;">

		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img" alt="">
		</div>

		<!--Page-->
		<div class="page page-h">
			<div class="page-content z-documentation-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card mb-0">
								<div class="card-header">
									<h3 class="card-title">قم بتسجيل الدخول إلى حسابك</h3>
									
								</div>
								<div class="card-body">
									@if(session('error'))
									<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> {{ session('error') }}</div>
			
								@endif
                                    <form method="post" action ="{{ route('check_user') }}">
                                        @csrf
									<div class="form-group">
										<label class="form-label text-dark">اسم المستخدم</label>
										<input type="email" class="form-control" name='email'  required>
									</div>
									<div class="form-group">
										<label class="form-label text-dark">كلمة المرور</label>
										<input type="password" name='password' class="form-control" id="exampleInputPassword1" required>
									</div>
									
									<div class="form-footer mt-2">
										<input type="submit" class="btn btn-primary btn-block" value="تسجيل الدخول">
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- JQuery js-->
		<script src="{{asset('/admin/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap js -->
		<script src="{{asset('/admin/plugins/bootstrap-4.3.1/js/popper.min.js')}}"></script>
		<script src="{{asset('/admin/plugins/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>

		<!--JQuery Sparkline Js-->
		<script src="{{asset('/admin/js/jquery.sparkline.min.js')}}"></script>

		<!-- Circle Progress Js-->
		<script src="{{asset('/admin/js/circle-progress.min.js')}}"></script>

		<!-- Star Rating Js-->
		<script src="{{asset('/admin/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Fullside-menu Js-->
		<script src="{{asset('/admin/plugins/sidemenu/sidemenu.js')}}"></script>

		<!--Select2 js -->
		<script src="{{asset('/admin/plugins/select2/select2.full.min.js')}}"></script>

		<!-- Timepicker js -->
		<script src="{{asset('/admin/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{asset('/admin/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- Datepicker js -->
		<script src="{{asset('/admin/plugins/date-picker/spectrum.js')}}"></script>
		<script src="{{asset('/admin/plugins/date-picker/jquery-ui.js')}}"></script>
		<script src="{{asset('/admin/plugins/input-mask/jquery.maskedinput.js')}}"></script>

		<!-- Inline js -->
		<script src="{{asset('/admin/js/select2.js')}}"></script>
		<script src="{{asset('/admin/js/formelements.js')}}"></script>

		<!-- file uploads js -->
        <script src="{{asset('/admin/plugins/fileuploads/js/fileupload.js')}}"></script>

		<!--InputMask Js-->
		<script src="{{asset('/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{asset('/admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!--Counters -->
		<script src="{{asset('/admin/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('/admin/plugins/counters/waypoints.min.js')}}"></script>

        <!--summernote js -->
		<script src="{{asset('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>


		<!-- Custom Js-->
		<script src="{{asset('/admin/js/admin-custom.js')}}"></script>

	</body>
</html>