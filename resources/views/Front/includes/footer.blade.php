   <!--Site Footer Start-->
   <footer class="site-footer">
    <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.png);">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="{{asset('/front/images/resources/footer-logo.png')}}" width="200px" alt=""></a>
                        </div>
                         
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">{{__('website.contact')}}</h3>
                        <ul class="footer-widget__contact-list list-unstyled clearfix">
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="Aldar.Alarabia@gmail.com">Aldar.Alarabia@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>{{__('website.address')}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="footer-widget__open-hour">
                            <h3 class="footer-widget__open-hour-title">{{__('website.open_hour')}}</h3>
                            <h3 class="footer-widget__open-hour-text">Mon – Sat: 8:00 am to 6:00 pm Sunday:
                                Closed</h3>
                        </div>
                    </div>
                </div>
              
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <h3 class="footer-widget__title">{{__('website.content')}}</h3>
                        
                        <div class="footer-widget__phone">
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp">
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                       
                                        <div class="text">
                                            <p><a href="{{route('home')}}">{{__('website.home')}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                       
                                     <div class="text">
                                         <p><a href="{{route('about')}}">{{__('website.About')}}</a></p>
                                     </div>
                                 </li>
                                 
                                 <li>
                                       
                                     <div class="text">
                                         <p><a href="{{route('Goal')}}">{{__('website.goal')}}</a></p>
                                     </div>
                                 </li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp">
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    
                                    <li>
                                       
                                     <div class="text">
                                         <p><a href="{{route('services')}}">{{__('website.service')}}</a></p>
                                     </div>
                                 </li>
                                 <li>
                                       
                                     <div class="text">
                                         <p><a href="{{route('events')}}">{{__('website.event')}}</a></p>
                                     </div>
                                 </li>
                                 <li>
                                       
                                     <div class="text">
                                         <p><a href="{{route('library')}}">{{__('website.book')}}</a></p>
                                     </div>
                                 </li>
                                </ul>
                             </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            {{ __('system.law') }}© 2022  <a href="#" class="fs-14 text-black">{{ __('system.logo') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('/front/images/resources/logo-2.png') }}"
                    width="143" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
 

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('/front/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/front/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/front/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('/front/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('/front/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('/front/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('/front/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('/front/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('/front/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('/front/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('/front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/front/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('/front/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/front/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('/front/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('/front/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('/front/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('/front/vendors/circleType/jquery.lettering.min.js') }}"></script>




<!-- template js -->
<script src="{{ asset('/front/js/insur.js') }}"></script>
</body>


<!-- index3.html  ,  09:44:03 GMT -->

</html>
