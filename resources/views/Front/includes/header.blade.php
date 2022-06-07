<!DOCTYPE html>
<html lang="en">


<!-- index3.html  ,  09:41:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="baseUrl:" content="@yield('baseurl','medical-house.net')">
    <meta name="title" content="@yield('pagetitle',__('content.SITENAME'))">
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <meta name="ROBOTS" content="INDEX,FOLLOW,all">
    <meta name='language' content='ar' />
    <meta name='audience' content='all' />
    <meta name='rating' content='general' />
    <meta name='revisit' content='1days' />
    <meta name='revisit-after' content='1days' />
    <meta name='resource-type' content='document' />
    <meta name='googlebot' content='index, follow, ydir, odp, imageindex' />
    <meta name='slurp' content='index, follow, ydir, odp, archive' />
    <meta name='resource-type' content='document' />
    <meta name="description" content="@yield('description')">
    <meta name="logo:" content="@yield('logo')">
    <meta name="image:" content="@yield('image')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="{{ __('content.SITENAME') }}">
    <meta name="publisher" content="{{ __('content.SITENAME') }}">
    <meta name="type:" content="HTML,CSS,bootstrap">
    <meta name="copyright" content="medical-house.net">
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
    {{-- Facebook --}}
    <meta property="og:title" content="@yield('pagetitle',__('content.SITENAME'))" />
    <meta property="og:type" content="HTML,CSS,bootstrap" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:alt" content="@yield('pagetitle',__('content.SITENAME'))" />
    <meta property="og:url" content="@yield('baseurl')" />
    <meta property="og:locale" content="ar" />
    <meta property="og:site_name" content="{{ __('content.SITENAME') }}">
    <meta property="og:description" content="@yield('description')">
    {{-- twitter --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@yield('twitter')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image:alt" content="@yield('pagetitle',__('content.SITENAME'))" />
    <meta name="twitter:image:src" content="@yield('image')" />
    <meta name="twitter:site" content="@yield('twitter')" />
    <meta name="twitter:title" content="@yield('pagetitle',__('content.SITENAME'))" />

    <title>@yield('pagetitle',__('content.SITENAME'))</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/front/images/resources/logo-2.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/front/images/resources/logo-2.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/front/images/resources/logo-2.png') }}" />
    <link rel="manifest" href="{{ asset('/front/images/resources/site.webmanifest') }}" />
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('/front/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/insur-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('/front/css/insur.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/insur-responsive.css') }}" />
    @if(app()->getLocale()=='ar')
    <link rel="stylesheet" href="{{ asset('/front/css/style-ar.css') }}" />
    @endif 
</head>

<body class="custom-cursor">
