<?php 
use App\Models\Cms;
$home11 = Cms::where("slug", "subscribe-to-our-newsletter")->first();
$site_infos = DB::table("admins")->where("slug", "admin-healthhoodlum")->select("site_name","site_address","site_logo","site_favicon","site_phone","site_about","site_email","instagram","youtube","twitter","facebook")->first();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/SiteImages/'. $site_infos->site_favicon) }}" />
	<!-- PAGE TITLE HERE -->
	<title>Health Hoodlum - Yoga and Meditation</title>
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('User/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('User/css/style.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('User/css/skin/skin-5.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('User/css/templete.css') }}">
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('User/plugins/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('User/plugins/revolution/css/navigation.css') }}">
	@yield('css')
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playball|Playfair+Display:400,400i,700,700i,900,900i|Prata&display=swap" rel="stylesheet"> 
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
	<header class="site-header header header-transparent navstyle1 mo-left">
		<!-- main header -->
		<div class="sticky-header  main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
				
					<!-- website logo -->
					<div class="logo-header mostion"><a href="{{ route("index") }}">
						@if (isset($site_infos->site_logo) && !empty($site_infos->site_logo) && File::exists(public_path('storage/SiteImages/' . $site_infos->site_logo)))
                              
							  <img src="{{ asset('storage/SiteImages/'. $site_infos->site_logo) }}" width="193"
								height="89" alt="">
                           @else
                           
						   <img src="{{ asset('noimg.png') }}" width="193"
								height="89" alt="">
                           @endif
					</a></div>
					
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- extra nav -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul>
								
								<li class="dropdown-nav">
									<a href="javascript:void" class="login-btn"><i class="fa fa-user-circle"></i></a>
									<ul class="sub-menu">
									@auth
									<li>
										<a href="{{ route('user.profile') }}">Profile</a>
									</li>
									<li><form method="POST" action="{{ route('logout') }}">
										@csrf
										<a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="login-btn">Log out</a>
										
									</form></li>
									
									@else
										<li>
											<a href="{{ route('login') }}">Login</a>
										</li>
										<li>
											<a href="{{ route('register') }}">Signup</a>
										</li>
									@endauth	
								    </ul>
							</li>
								
								

								
								<li><a href="{{ route("user.contactUs") }}" class="btn-head"><i class="fa fa-phone"></i> Contact Us</a></li>
							</ul>
						</div>
					</div>
					
					<!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end"  id="navbarNavDropdown">
                        <ul class=" nav navbar-nav">
							<li class="{{ Route::currentRouteName() == "index" ? "active" : "" }}"><a href="{{ route("index") }}">Home</a></li>
							@php
								if( Route::currentRouteName() == "whatIdo" || Route::currentRouteName() == "whoIam" || Route::currentRouteName() == "whoICanHelp" || Route::currentRouteName() == "user.whatIsIntegrative"){
									$classActive = "active";
								}else{
									$classActive = "";
								}
							@endphp
							<li class="{{ $classActive }}"><a href="javascript:;">About Company<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route("whatIdo") }}">What I do</a></li>
									<li><a href="{{ route("user.whatIsIntegrative") }}">What is integrative functional care</a></li>
									<li><a href="{{ route("whoIam") }}">Who I am</a></li>
									<li><a href="{{ route('whoICanHelp') }}">Who I can help</a></li>
								</ul>
							</li>
							<li class="{{ Route::currentRouteName() == "services" ? "active" : "" }}"> <a href="{{ route('services') }}">Services</a></li>
							<li class="{{ Route::currentRouteName() == "user.blogs" ? "active" : "" }}"> <a href="{{ route('user.blogs') }}">Blog</a></li>
							<li class="{{ Route::currentRouteName() == "user.videos" ? "active" : "" }}"> <a href="{{ route("user.videos") }}">Videos</a></li>
							<li class="{{ Route::currentRouteName() == "user.quiz" ? "active" : "" }}"> <a href="{{ route("user.quiz") }}">Quiz</a></li>
							<li class="{{ Route::currentRouteName() == "user.lab" ? "active" : "" }}"> <a href="{{ route("user.lab") }}">Lab</a></li>
						</ul>
                    </div>
	
				</div>
			</div>
		</div>
		<!-- main header END -->
	</header>
	<!-- header END -->
    <!-- Content -->
    @yield('content')
    <!-- Content END-->
	
    <!-- Footer -->
    <footer class="site-footer yoga-footer">
        <div class="footer-top">
			<div class="container p-t20">
                <div class="row">
					<div class="col-lg-12 text-center m-b30">
						<div class="section-head text-center text-white">
							<h2 class="h2"><span class="text-white">{{ $home11->title }}</span></h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
							<p>{{ $home11->short_desc }}</p>
						</div>
						<form role="search" method="post" action="{{ route("user.sendNewsletter") }}" class="newsletter m-b30">
							@csrf
							<div class="mb-2"></div>
							@if(Session::has('msg_s'))
								<p class="alert text-warning">{{ Session::get('msg_s') }}</p>
							@endif
							<div class="input-group">
								<input name="email_n" class="form-control" placeholder="Email address" type="email">
								
								<span class="input-group-btn">
									<button name="submit" value="Submit" type="submit" class="site-button m-l10 radius-xl">Subscribe</button>
								</span> 
							</div>
							@if ($errors->has('email_n'))
    
                                    <span class="text-danger float-left">{{ $errors->first('email_n') }}</span>
    
                                @endif
						</form>
						<ul class="list-inline d-flex justify-content-center footer-social">
                            <li><a href="{{ $site_infos->facebook }}" class="fa fa-facebook-f bg-primary m-lr5"></a></li>
                            <li><a href="{{ $site_infos->twitter }}" class="fa fa-twitter bg-primary m-lr5"></a></li>
                            <li><a href="{{ $site_infos->instagram }}" class="fa fa-instagram bg-primary m-lr5"></a></li>
                            <li><a href="{{ $site_infos->youtube }}" class="fa fa-youtube bg-primary m-lr5"></a></li>
                        </ul>
					</div>
				</div>
			</div>	
            <div class="container saf-footer">
                <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_about">
							<h5 class="m-b15">About Us</h5>
							<div class="dez-separator bg-primary"></div>
                            <p>{{ $site_infos->site_about }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h5 class="m-b15">Our services</h5>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li><a href="{{ route("index") }}">Home </a></li>
                                <li><a href="{{ route("user.contactUs") }}">Contact Us</a></li>
								<li><a href="{{ route("user.aboutUs") }}">About Us</a></li>
								<li><a href="{{ route("user.packages") }}">Package</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b15">Contact us</h5>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
								<li><i class="fa fa-map-marker"></i><strong>address</strong> {{ $site_infos->site_address }} </li>
								<li><i class="fa fa-phone"></i><strong>phone</strong>{{ $site_infos->site_phone }}(24/7 Support Line)</li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-left"> <span>© Copyright @php
						echo date("Y");
					@endphp. All Rights Reserved.</span> </div>
					<div class="col-lg-6 text-right "> <a href="{{ route("whoIam") }}"> About</a> <a href="{{ route('user.help') }}"> Help Desk</a> <a href="{{ route("user.privacyPolicy") }}"> Privacy Policy</a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop icon-up style3"><i class="fa fa-arrow-up"></i></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{ asset('User/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('User/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('User/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('User/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('User/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('User/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('User/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('User/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('User/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('User/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('User/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('User/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('User/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('User/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('User/plugins/switcher/js/switcher.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('User/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->

<!-- revolution JS FILES -->
<script src="{{ asset('User/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('User/') }}plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('User/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('User/js/rev.slider.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_2();
});	/*ready*/

</script>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		panel.style.maxHeight = null;
		} else {
		panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	});
	}
</script>
</body>
</html>