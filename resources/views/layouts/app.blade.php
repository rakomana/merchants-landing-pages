<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Prince Rakomana">
      <!-- Place favicon.ico in the root directory -->
      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/animation-v2.css')}}">
      <link rel="stylesheet" href="{{asset('css/featuredetect-v1.css')}}">
      <link rel="stylesheet" href="{{asset('css/global.css')}}">
      <link rel="stylesheet" href="{{asset('css/odometer-v1.css')}}">
      <link rel="stylesheet" href="{{asset('css/slick-v1.css')}}">

      <script src="{{asset('js/cdn-script.js')}}"></script>
      <script src="{{asset('js/cookiePopup-v1.js')}}"></script>
      <script src="{{asset('js/featureDetectSyntax-v1.js')}}"></script>
      <script src="{{asset('js/featureDetect-v1.js')}}"></script>
      <script src="{{asset('js/odoremeter-v1.min.js')}}"></script>
      <script src="{{asset('js/particles.js')}}"></script>
      <script src="{{asset('js/runScripts-v1.js')}}"></script>
      <script src="{{asset('js/script.js')}}"></script>
      <script src="{{asset('js/slick-v1.js')}}"></script>
     
      <script src="https://kit.fontawesome.com/780c19c6e7.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
   </head>

   <div class="visibleWhileLoading formLoaderOverlay done">
			<div class="letsTxt">Starting Quote Engine</div>
			<div class="loaderImage">
				<img src="resources/images/small-logo.svg" class="logo-svg" data-at2x="resources/images/small-logo@2x.png">
			</div>
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
  			<div class="loader-section section-right"></div>
		</div>

        @yield('content')

        

      <!--Footer start-->
      <footer>
         <div class="contentContainer">
            <div class="footerLogo">
            <a href="{{url('/')}}"><img src="{{asset('img/merchant_logo.png')}}"></a>
            </div>
            <a href="#">Face-to-Face Payments</a><span>|</span>
            <a href="#">Online Payments</a><span>|</span><a href="#">Who We Are</a><span>|</span>
            <a href="#">Contact Us</a><span>|</span><a href="#">EPOS</a><span>|</span><a href="#">Mobile App</a><span>|</span>
            <a href="#">Privacy Policy</a><br><br>
            © 2020 Energize Merchant Services	
         </div>
      </footer>