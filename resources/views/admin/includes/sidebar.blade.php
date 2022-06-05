
				
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
							<img src="{{Auth::user()->profile_photo_path}}" alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>{{Auth::user()->name}}</h2>
							</div>
						</div>
					</div>
					<ul class="side-menu">
					    
						<li class="slide">
							<a class="side-menu__item"  href="{{route('configure')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> {{ __('system.side.web') }}</span></a>
						
						</li>
						<li class="slide">
						<a class="side-menu__item"  href="{{route('goals')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> {{ __('system.side.goals') }}</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item" href="{{route('service')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> {{ __('system.side.Service') }}</span></a>
						
						</li>
						
						
					 
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">المكتبة</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>	<a class="side-menu__item"  href="{{route('category')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> الاقسام</span></a></li>
								<li><a class="side-menu__item"  href="{{route('book')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> المكتبة</span></a>
								</li>
							
							</ul>
						</li>
						 
						<li class="slide">
							<a class="side-menu__item"  href="{{route('event')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> الفعاليات والاخبار</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('report')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> التقارير</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('job')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> الوظائف</span></a>
						
						</li>
						
						<li class="slide">
							<a class="side-menu__item"  href="{{route('user')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> الستخدمين</span></a>
							
						</li>
							
						<li class="slide">
							<a class="side-menu__item"  href="{{route('donor')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> شركائنا</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('slider')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> {{ __('system.side.slider') }}</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('advertisment')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> الاعلانات</span></a>
						
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{route('lang')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label"> {{ __('system.side.lang') }}</span></a>
						
						</li>
						
					
					</ul>
				</aside>
