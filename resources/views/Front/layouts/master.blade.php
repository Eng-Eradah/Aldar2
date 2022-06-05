@include('front.includes.header')
@include('front.includes.navbar')
<!--/sidebar-->

<!--App-Content-->
    @yield('content')
 
@stack('tiny')
@section("scripts")
@include('front.includes.footer')
