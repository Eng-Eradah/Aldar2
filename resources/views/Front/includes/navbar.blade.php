 <!-- /.preloader -->


 <div class="page-wrapper">
     <header class="main-header-three clearfix">
         <div class="main-header__top">
             <div class="container">
                 <div class="main-header__top-inner">
                     <div class="main-header__top-address">
                         <ul class="list-unstyled main-header__top-address-list">
                             <li>
                                 <i class="icon">
                                     <span class="icon-pin"></span>
                                 </i>
                                 <div class="text">
                                     <p>{{ __('website.address') }}</p>
                                 </div>
                             </li>
                             <li>
                                 <i class="icon">
                                     <span class="icon-email"></span>
                                 </i>
                                 <div class="text">
                                     <p><a>Aldar.Alarabia@gmail.com</a></p>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <div class="main-header__top-right">
                         <div class="main-header__top-menu-box">

                         </div>
                         <div class="main-header__top-social-box">
                             <div class="main-header__top-social">
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fab fa-facebook"></i></a>
                                 <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <nav class="main-menu main-menu-three clearfix">
             <div class="main-menu-three__wrapper clearfix">
                 <div class="container">
                     <div class="main-menu-three__wrapper-inner clearfix">
                         <div class="main-menu-three__left">
                             <div class="main-menu-three__logo">
                                 <a class="navbar-brand" href="{{ route('home') }}"
                                     style="color: #015EAC;">{{ __('website.aldar') }} <span class="logo-dec"
                                         style="color: #be892d;">{{ __('website.arabic') }}</span></a>
                             </div>
                             <div class="main-menu-three__main-menu-box">
                                 <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                 <ul class="main-menu__list">
                                     <li   class="{{ (request()->segment(2) =='home') ? 'current' : '' }}">
                                         <a href="{{ route('home') }}">{{ __('website.home') }} </a>
                                     </li>
                                     <li  class="{{ (request()->segment(2) == 'about') ? 'current' : '' }}">
                                         <a href="{{ route('about') }}">{{ __('website.About2') }}</a>

                                     </li>
                                     <li  class="{{ (request()->segment(2) == 'Goal') ? 'current' : '' }}">
                                         <a href="{{ route('Goal') }}">{{ __('website.goal') }} </a>

                                     </li>
                                     <li  class="{{ (request()->segment(2) == 'services') ? 'current' : '' }}">
                                         <a href="{{ route('services') }}">{{ __('website.service') }}</a>
                                     </li>
                                     <li  class="{{ (request()->segment(2) == 'events') ? 'current' : '' }}">
                                         <a href="{{ route('events') }}">{{ __('website.event') }}</a>

                                     </li>
                                     <li  class="{{ (request()->segment(2) == 'jobs') ? 'current' : '' }}">
                                         <a href="{{ route('jobs') }}">{{ __('website.job') }}</a>

                                     </li>
                                     <li class="{{ (request()->segment(2) == 'Donor') ? 'current' : '' }}">
                                         <a href="{{ route('Donor') }}">{{ __('website.donor') }}</a>

                                     </li>

                                     <li class="dropdown" class="{{ (request()->segment(2) == 'library') ? 'current' : '' }}">
                                         <a href="{{ route('library') }}">{{ __('website.book') }} </a>
                                         <ul class="nav top-menu">
                                             <li>
                                                 <a href="{{ route('library', 1) }}">إصداراتنا </a>

                                             </li>
                                             <li>
                                                 <a href="{{ route('library') }}">{{ __('website.book') }} </a>

                                             </li>
                                         </ul>

                                     </li>
                                     <li class="{{ (request()->segment(2) == 'contact') ? 'current' : '' }}">
                                         <a href="{{ route('contact') }}"> {{ __('website.contact') }}</a>

                                     </li>
                                     <li class="dropdown">
                                         <a>{{ __('system.lang') }} </a>
                                         <ul class="nav top-menu">

                                             @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)


                                                 @foreach ($lang as $langs)

                                                     @if ($localeCode == $langs->lang)
                                                         <li>
                                                             <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;"
                                                                 rel="alternate" hreflang="{{ $localeCode }}"
                                                                 href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                 {{ $properties['native'] }}
                                                             </a>
                                                         </li>
                                                     @endif
                                                 @endforeach


                                             @endforeach
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
         @if($ads->count()>0)
         <div style="background-color: #16243d;color:#fff">
             @foreach ($ads as $adds)

                 <marquee speed="normal"  behavior="loop">{{ $adds->title }}</marquee>
                  
            @endforeach
         </div>
         @endif

     </div><!-- /.stricky-header -->
     <!--Main Slider Start-->
