@extends('layouts.app')

@section('content')

        <!-- splash -->
        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="760" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1" style="display: none;">
                     <span id="progressNumber">10</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1" style="display: none;">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="form1/Backwards"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1" style="display: none;">
                        <div class="meter">
                           <progress max="100" value="10">
                           <span class="widthPercent10"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1" style="display: none;">
                           <span>
                           <a class="progressForwardButton" href="form2"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="#" method="" id="formPageForm" novalidate="true">
                     <input type="hidden" name="csrfToken" id="csrfToken" value="#">
                     <div class="sectionContainer errorMessageBound" data-combinederrorid="ErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem ">
                              <span class="staticField" id="null0" data-displayif="true" data-requiredif="false" data-disabledif="false">
                                 <h1 class="formIntroTxt yell">Qualify To <span>Reduce Your Payment Processing Fees?</span><br>Find Out Now.</h1>
                                 <h2 class="yell">You could save <span>£1000s</span></h2>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound boxed" data-combinederrorid="hasProviderErrorCombined">
                        <div class="formfieldHeader">
                           Do you already have a merchant account provider?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           Tells us if you're looking for a new quote or to beat an existing rate.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop10 width100Percent">
                              <div id="hasProvider0" class="flexyContainer paddingTop20 justifyCentral flex multipleFieldParent has3Children centerByMargin" data-fieldname="hasProvider" data-validatevia="validateArray" data-validateextra="{&quot;values&quot;:[{&quot;value&quot;:&quot;Yes&quot;},{&quot;value&quot;:&quot;No&quot;}]}" data-validateinvalidates="null" data-validatelinkedfields="null" data-enabled="true" data-value="" data-requiredif="true" data-displayif="true" data-disabledif="false">
                                 <div class="flexyItem centerContentsByMargin ">
                                    <button type="submit" name="hasProvider" id="hasProvider0Yes" value="Yes" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField"><a href="{{url('quote-2-yes')}}" style="color: whitesmoke;">Yes</a></button>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <button type="submit" name="hasProvider" id="hasProvider0No" value="No" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField"><a href="{{url('quote-2-yes')}}" style="color: whitesmoke;">No</a></button></button>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden hasProviderError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden hasProviderErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound splashSmlTxt" data-combinederrorid="ErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem ">
                              <span class="staticField" id="null1" data-displayif="true" data-requiredif="false" data-disabledif="false">
                                 <div class="splashSmlTxt">Complete our short form. It only takes a minute</div>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="lineBreak10"></div>
                  </form>
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