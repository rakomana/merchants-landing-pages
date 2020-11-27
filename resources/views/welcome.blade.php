@extends('layouts.app')

@section('content')
<body>
      <iframe class="hidden" src="https://"></iframe>
      <div class="allowInherit">
         <span class="hidden" id="cookieScriptData" data-baseloaderurl="" data-cookietext1="By continuing to use our website, you agree to the use of cookies. 
            Click " data-cookietext2=" to find out more about cookies " data-timeout="5000" data-closebtn="show"></span><span class="hidden" id="featureDetectScriptData" data-featuredetecttext="Your browser does not appear support the functionality to run this site.  Please update your browser to use this site: " data-featuredetectlink="https://browser-update.org/update.html" data-featuredetectlinktext="Update your Browser"></span>		
         <header>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem logo">
                     <a href="{{url('/')}}"><img src="img/merchant_logo.png" class="logo-svg" alt="Logo"></a>
                  </div>
                  <div class="flexyItem right alignSelfCenter">
                     <div class="secure">
                        <i class="fas fa-lock"></i> Secure UK Site						
                     </div>
                  </div>
               </div>
            </div>
         </header>

<!-- splash -->
         <div id="splashArea" class="">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="678" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="splashLeft" style="background: url(img/merch-left.svg); background-repeat: no-repeat; background-size: 18%; background-position: left center;"></div>
            <div class="splashRight" style="background: url(img/merch-right.svg);  background-repeat: no-repeat; background-position: right center; background-size: 25%;"></div>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem">
                     <h1 class="lrg">Looking For <span style="color: #ac4c7c;">The Best<br>Merchants Rates?</h1>
                     <h2>Compare Leading Merchant Rates With One Simple Form</h2>
                     <div class="splashButtonContainer">
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Compare merchant rates from leading providers</div><br>
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Save £££s in processing fees</div>
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Free No Obligation Quote</div>
                     </div>
                     <a class="splashButton pulse" href="{{url('start-quote')}}">Start Free Quote</a>
                  </div>
               </div>
            </div>
            
         </div>
         <!-- end splash -->
         <!--logo area-->
          <!--Logo area-->      
            
            <div class="main ">
                    <div class="grid-full">
            <div class="slides" style="padding-bittom:0px; vertical-align:center;">
              <div>
                <img src="img/elavon-logo-346.png"  style="width: 50%;
        height: auto; justify-content: center;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png"  style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="img/elavon-logo-346.png" style="width: 50%;
        height: auto;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png" style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="img/elavon-logo-346.png" style="width: 50%;
        height: auto;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png" style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               
            </div></div>
            
                </div>
         
            
            <script>
                //Pass an object literal for settings
  $('.slides').slick({
       
   slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase:'linear',
        infinite: true,
        focusOnSelect: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }]
    });
            </script>
</div><br><br><br><br><br><br><br>
         <div id="stepsRow">
            <div class="contentContainer">
               <h1>Compare leading Merchant Account rates in 3 simple steps</h1>
            </div>
            <div class="contentContainer itemsContainer ">
               <div class="flexyContainer container noWrap space-between ico">
                  <div class="flexyItem">
                     <img src="img/step1.svg" class="" data-id="1">                        
                     <h3></h3>
                     <h2>1. Complete our simple assessment form (takes less than 2 minutes)</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/step2.svg" class="" data-id="2">                        
                     <h3></h3>
                     <h2>2. We search a range of available fees from acquiring banks (all for free and with no obligation).</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/step3.svg" class="" data-id="3">                        
                     <h3></h3>
                     <h2>3. Compare a range of quotes and see how much you could save</h2>
                  </div>
               </div>
            </div>
         </div>
         <div id="muchRow" class="muchRowImages">
            <div class="contentContainer">
               <h1>
                  <div class="flexyContainer">Why Choose Energize Merchant Services For Your Merchant Rates?</div>
               </h1>
            </div>
            <div class="contentContainer itemsContainer ">
               <div class="flexyContainer container noWrap space-between ico">
                  <div class="flexyItem">
                     <img src="img/much1.svg" class="" data-id="1">                        
                     <h3></h3>
                     <h2>Our service is <span class="purp">trusted by thousands of businesses</span> across the UK</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much2.svg" class="" data-id="2">                        
                     <h3></h3>
                     <h2>Compare <span class="coral">Merchant Rates</span> providers</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much3.svg" class="" data-id="3">                        
                     <h3></h3>
                     <h2>Challenge us to <span class="purp">beat any new or existing quote</span></h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much4.svg" class="" data-id="4">                        
                     <h3></h3>
                     <h2>Always <span class="coral">free to use and with no obligation</span></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

      <!--info section-->
     
      

      @endsection