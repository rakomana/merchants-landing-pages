@extends('layouts.app')

@section('content')

    <style>
     
        i {
    color: #ac4c7c;
    font-size: 200px;
    line-height: 200px;
    margin-left: -15px;
}

    </style>
        <!-- splash -->

        <div id="splashArea" class="formSplashArea">
   <div id="particles-js">
      <canvas class="particles-js-canvas-el" width="1349" height="728" style="width: 100%; height: 100%;"></canvas>
   </div>
   <div class="contentContainer formAreaContainer">
      <div class="GenericPage">
         <div class="thankYouArea">
            <div>
               <div class="thankYouBg"></div>
               <div id="particles-js"></div>
               <div class="contentContainer">
                  <div class="flexyContainer">
                     <div class="flexyItem">
                        <div id="splashFormContainer" class="left thankBg boxed" style="background-image: url(img/thankyou-bg.svg);
                                background-size: 226px;
                                background-repeat: no-repeat;
                                 background-position: 96% 90%;
                                 z-index: 2222;">
                           <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                              <i class="checkmark">✓</i>
                           </div>
                           <br>
                           <div class="thankYouBlock">Thank you for taking the time to complete our Merchant Services assessment form. 
                              The information that you have provided allows us to match your request to a Merchant Services provider within your area.
                           </div>
                           <h3>What happens next?</h3><br>
                           <ul>
                              <li style="text-align: left; background-image: url(img/tick2.svg);
                                 background-size: 16px 16px;
                                 background-repeat: no-repeat; background-position: 0% 0%;
                                 padding-left: 27px;">You will receive a call from a reputable Merchant Services supplier within your local area.</li>
                              <li style="text-align: left; background-image: url(img/tick2.svg);
                                 background-size: 16px 16px;
                                 background-repeat: no-repeat; background-position: 0% 0%;
                                 padding-left: 27px;">You will be provided with a free, no obligation quote (tailored to your specific business requirements) along with free expert advice.</li>
                              <li style="text-align: left; background-image: url(img/tick2.svg);
                                 background-size: 16px 16px;
                                 background-repeat: no-repeat; background-position: 0% 0%;
                                 padding-left: 27px;">Compare how much you could save.</li>
                           </ul>
                           <pre>

                                </pre>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

          <!--Logo area-->      
            
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
</div>

@endsection