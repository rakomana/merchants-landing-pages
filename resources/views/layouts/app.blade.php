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
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script src="https://kit.fontawesome.com/780c19c6e7.js" crossorigin="anonymous"></script>
   </head>

   <body>
      <iframe class="hidden" src="https://"></iframe>
      <div class="allowInherit">
         <span class="hidden" id="cookieScriptData" data-baseloaderurl="" data-cookietext1="By continuing to use our website, you agree to the use of cookies. 
            Click " data-cookietext2=" to find out more about cookies " data-timeout="5000" data-closebtn="show"></span><span class="hidden" id="featureDetectScriptData" data-featuredetecttext="Your browser does not appear support the functionality to run this site.  Please update your browser to use this site: " data-featuredetectlink="https://browser-update.org/update.html" data-featuredetectlinktext="Update your Browser"></span>		
         <header>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem logo">
                     <a href="{{url('/')}}"><img src="{{asset('img/merchant_logo.png')}}" class="logo-svg" alt="Logo"></a>
                  </div>
                  <div class="flexyItem right alignSelfCenter">
                     <div class="secure">
                        <i class="fas fa-lock"></i> Secure UK Site						
                     </div>
                  </div>
               </div>
            </div>
         </header>

        @yield('content')

      <!--Footer start-->
      <footer>
         <div class="contentContainer">
            <div class="footerLogo">
               <img src="{{asset('img/merchant_logo.png')}}" data-at2x="resources/images/logo-white@2x.png">
            </div>
            <a href="#">Face-to-Face Payments</a><span>|</span>
            <a href="#">Online Payments</a><span>|</span><a href="#">Who We Are</a><span>|</span>
            <a href="#">Contact Us</a><span>|</span><a href="#">EPOS</a><span>|</span><a href="#">Mobile App</a><span>|</span>
            <a href="#">Privacy Policy</a><br><br>
            © 2020 Energize Merchant Services	
         </div>
      </footer>