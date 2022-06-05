 
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header-three clearfix" >
         
        <nav class="main-menu main-menu-three clearfix" >
            <div class="main-menu-three__wrapper clearfix">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner clearfix">
                        <div class="main-menu-three__left" style="height:90px">
                            <div class="main-menu-three__logo">
                                <a class="navbar-brand" href="{{route('home')}}">الدار <span class="logo-dec" style="color: #be892d;">العربية</span></a>
                            </div>
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="{{route('home')}}">{{__('website.home')}} </a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('about')}}">{{__('website.About')}}</a>
                                         
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('Goal')}}">{{__('website.goal')}} </a>
                                         
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('services')}}">{{__('website.service')}}</a>
                                      
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('events')}}">{{__('website.event')}}</a>
                                       
                                    </li>
                                    <li>
                                        <a href="{{route('library')}}">{{__('website.book')}} </a>
                                    </li>
                                    <li class="dropdown">
                                        <a  >{{__('system.lang')}} </a>
                                        <ul class="nav top-menu">

                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                       
                                            
                                            @foreach ($lang as $langs)
                                               
                                            @if($localeCode==$langs->lang)
                                            <li>
                                        <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;" rel="alternate"
                                            hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                        @endif
                                        @endforeach

                                   
                                    @endforeach
                                </ul>
                            </li>

                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
