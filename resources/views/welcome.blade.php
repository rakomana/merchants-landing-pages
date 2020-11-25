@extends('layouts.app')

@section('content')
<!-- splash -->
         <div id="splashArea" class="">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="678" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="splashLeft"></div>
            <div class="splashRight"></div>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem">
                     <h1 class="lrg">Looking For <span style="color: #252464;">The Best<br> Merchant Account</span> Deals?</h1>
                     <h2>Compare Leading Merchant Accounts With One Simple Form</h2>
                     <div class="splashButtonContainer">
                        <div class="splashBullet">Compare merchant accounts from leading providers</div>
                        <div class="splashBullet">Save £££s in processing fees</div>
                        <div class="splashBullet">Free No Obligation Quote</div>
                     </div>
                     <a class="splashButton pulse" href="{{url('start-quote')}}">Start Free Quote</a>
                  </div>
               </div>
            </div>
            
         </div>
         <!-- end splash -->
         <!--logo area-->
          <!--Logo area-->
          <div class="">
          
            <hr>
            <div class="main ">
                    <div class="grid-full">
            <div class="slides">
              <div>
                <img src="img/elavon-logo-346.png">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp">
               </div><!--/6-->
               <div></div>
            </div>
                </div>
            </div>
            
            <script>
                //Pass an object literal for settings
  $('.slides').slick({
       
       dots: false,
       infinite: true,
       slidesToShow: 4,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 500,
       arrows: true,
       gap: 00,
      

       
     }); 
            </script>
</div><br><br><br><br><br><br><br>
         <div id="stepsRow">
            <div class="contentContainer">
               <h1>Compare leading Merchant Account providers in 3 simple steps</h1>
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
                     <h2>2. We search a range of Merchant Accounts from a number of reputable providers (all for free and with no obligation).</h2>
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
                  <div class="flexyContainer">Why use Energize Merchant Services For Merchant Accounts?</div>
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
                     <h2>Compare <span class="coral">Merchant Account</span> providers</h2>
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

      

      @endsection