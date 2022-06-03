@include('admin.includes.header')
@include('admin.includes.sidebar')
<!--/sidebar-->

<!--App-Content-->
<div class="app-content  my-3 my-md-5" style="margin-top: 40px !important;">
    @yield('content')
 </div>
</div>
@stack('tiny')
@section("scripts")
@include('admin.includes.footer')
