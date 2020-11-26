@extends('layouts.app')

@section('content')
        <!-- splash -->
        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="634" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1">
                     <span id="progressNumber">20</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="{{url('start-quote')}}"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1">
                        <div class="meter">
                           <progress max="100" value="20">
                           <span class="widthPercent20"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1">
                           <span>
                           <a class="progressForwardButton" href="{{url('quote-2-yes-2')}}"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('quote-2-yes-2')}}" method="GET" id="formPageForm" novalidate="true">
                     <input type="hidden" name="csrfToken" id="csrfToken" value="9613f12001ce9ce17308178f504bf5bced4ee59edb786e96be113d420153fc04">
                     <div class="sectionContainer errorMessageBound boxed" data-combinederrorid="currentProviderErrorCombined">
                        <div class="formfieldHeader">
                           Who is your current provider?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           If your current provider is not listed, please select "Other".				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop10 width100Percent">
                              <div id="currentProvider0" class="flexyContainer paddingTop20 justifyCentral flex multipleFieldParent has3Children centerByMargin" data-fieldname="currentProvider" data-validatevia="validateArray" data-validateextra="{&quot;values&quot;:[{&quot;value&quot;:&quot;Worldpay&quot;},{&quot;value&quot;:&quot;Retail Merchant Services&quot;},{&quot;value&quot;:&quot;Elavon&quot;},{&quot;value&quot;:&quot;First Data&quot;},{&quot;value&quot;:&quot;Stripe&quot;},{&quot;value&quot;:&quot;Other&quot;},{&quot;value&quot;:&quot;Barclaycard&quot;}]}" data-validateinvalidates="null" data-validatelinkedfields="null" data-enabled="true" data-value="" data-requiredif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;Yes&quot;}}]}" data-displayif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;Yes&quot;}}]}" data-disabledif="false">
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0Worldpay" value="Worldpay" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Worldpay</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0RetailMerchantServices" value="Retail Merchant Services" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Retail Merchant Services</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0Elavon" value="Elavon" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Elavon</a>
                                 </div>
                                 <div class="flexyLineBreak">&nbsp;</div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0FirstData" value="First Data" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">First Data</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0Barclaycard" value="Barclaycard" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Barclaycard</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('quote-2-yes-2')}}" type="submit" name="currentProvider" id="currentProvider0Other" value="Other" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Other</a>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden currentProviderError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden currentProviderErrorCombined">&nbsp;</label>
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