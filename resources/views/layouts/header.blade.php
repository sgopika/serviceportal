<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Citizen Serivce Portal </title>
<link rel="shortcut icon" type="image" href="assets/images/favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Official Web Portal of Government of Kerala."/>
<meta name="keywords" content="Kerala, Government, keralagov, C-DIT"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="C-DIT" />
<meta name="copyright" content="C-DIT" />
<meta name="robots" content="follow"/>
<script type="text/javascript">
var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
var u="//product.cdit.org/matomo/";
_paq.push(['setTrackerUrl', u+'matomo.php']);
_paq.push(['setSiteId', '1']);
var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<!-- ========================= CSS here ========================= -->
<link rel="stylesheet" href="{{ asset('assets/newdesign/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/newdesign/css/LineIcons.3.0.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/newdesign/css/tiny-slider.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/newdesign/css/glightbox.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/newdesign/css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/newdesign/webfont.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/newdesign/css/service_custom.css') }}">
<link href="{{ asset('assets/newdesign/fonts/fontawesome/css/all.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/newdesign/owl/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/newdesign/owl/assets/owl.theme.default.min.css')}}">

	<script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script> 





</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
You are using an <strong>outdated</strong> browser. Please
<a href="https://browsehappy.com/">upgrade your browser</a> to improve
your experience and security.
</p>
<![endif]-->

<!-- Preloader -->
<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>
<!-- /End Preloader -->

<!-- Start Header Area -->
<header class="header navbar-area">
<!-- Start Topbar -->
<div class="topbar">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="top-left">
<ul class="menu-top-link">
<li>
<div class="select-position">
	<input type="hidden" value="{{ $sessionbil }}">
	<select id="select5" class="lang">
		@if($sessionbil==1)
			<option value="1" id="mal" >മലയാളം</option>  
			<option value="0" id="eng" selected>English</option>
		@elseif($sessionbil==2)	
			<option value="1" id="mal" selected>മലയാളം</option>  
			<option value="0" id="eng" >English</option>
		@endif     
	</select>
	
</div>
</li>
<li><a href="" class="text-white">About the portal</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-middle">
<!-- <ul class="useful-links">
<li><a href="index.html">Home</a></li>
<li><a href="about-us.html">About Us</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>-->
</div>
</div>
<div class="col-lg-4 col-md-4 col-12 d-sm-block">
<div class="top-end">                            
<ul class="user-login">
<!-- <li><i class="lni lni-user"></i>&nbsp; <a href="#">Skip to Main Content</a></li> -->
{{-- @php  @endphp
@if(Session::get('parichayid')!='')
	<li>
	<a style="cursor: pointer;" href="{{ route('logout') }}">Sign Out</a>
	</li>
	<li>
	<a style="cursor: pointer;" href="">{{ Session::get('janparichayusername') }}</a>
	</li>
@else
	<li>
	<a style="cursor: pointer;"  href="{{ url('janparichaylogin') }}">Sign In</a>
	</li>
	<li>
	<a style="cursor: pointer;"  onclick="window.open('https://janparichay.pp.nic.in/v1/assets/register.html?service=passive&active=true&rm_5=false&continue=https%3A%2F%2Fjan_com%2Fmail%2F&pp=1&scc=1&lmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&sid=KL0001','name','width=600,height=400')">Register</a>
	</li>
@endif --}}




</ul>
</div>
</div>
</div>
</div>
</div>
<!-- End Topbar -->
<!-- Start Header Middle -->
<div class="header-middle">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-6 col-12">
<!-- Start Header Logo -->
<a class="navbar-brand" href="index.php">
<img src="{{ asset('assets/newdesign/images/logo/gov_logo.png') }}" alt="Logo">
</a>
<!-- End Header Logo -->
</div>
<div class="col-lg-4 col-md-6 d-xs-none">
<!-- Start Main Menu Search -->
<div class="main-menu-search">
<!-- navbar search start -->

<div class="nav-social">
<img src="{{ asset('assets/newdesign/images/logo/logo.png') }}" alt="Logo">
</div>


</div>
<!-- navbar search Ends -->
</div>
<!-- End Main Menu Search -->
</div>

</div>
</div>
</div>
<!-- End Header Middle -->
<!-- Start Header Bottom -->

<!-- End Header Bottom -->
</header>
<!-- End Header Area -->