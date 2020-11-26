@extends('layouts.app')
@section('content')

        <!-- splash -->

        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="578" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1" style="">
                     <span id="progressNumber">40</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1" style="">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="{{url('quote-2-yes-2')}}"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1" style="">
                        <div class="meter">
                           <progress max="100" value="40">
                           <span class="widthPercent50"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1" style="">
                           <span>
                           <a class="progressForwardButton" href="{{url('your-company')}}"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('your-company')}}" method="" id="formPageForm" novalidate="true">
                     <div class="sectionContainer   boxed boxedSubmit" data-combinederrorid="paymentAcceptanceMethodCollectionErrorCombined">
                        <div class="formfieldHeader">
                           How would you like to accept payments?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           Please select the primary way that you accept payments				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop10 width100Percent">
                              <div id="paymentAcceptanceMethodCollection0" class="flexyContainer paddingTop20 justifyCentral flex multipleFieldParent has3Children centerByMargin" data-fieldname="paymentAcceptanceMethodCollection" data-validatevia="validateArray" data-validateextra="{&quot;values&quot;:[{&quot;value&quot;:&quot;Face To Face&quot;},{&quot;value&quot;:&quot;Over The Phone&quot;},{&quot;value&quot;:&quot;Online&quot;}]}" data-validateinvalidates="null" data-validatelinkedfields="null" data-enabled="true" data-value="Face To Face" data-requiredif="true" data-displayif="true" data-disabledif="false">
                                 <div class="flexyItem centerContentsByMargin ">
                                    <button type="submit" name="paymentAcceptanceMethodCollection" id="paymentAcceptanceMethodCollection0FaceToFace" value="Face To Face" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField checked my-btn" data-checked="true">Face To Face</button>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <button type="submit" name="paymentAcceptanceMethodCollection" id="paymentAcceptanceMethodCollection0OverThePhone" value="Over The Phone" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Over The Phone</button>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <button type="submit" name="paymentAcceptanceMethodCollection" id="paymentAcceptanceMethodCollection0Online" value="Online" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Online</button>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden paymentAcceptanceMethodCollectionError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden paymentAcceptanceMethodCollectionErrorCombined">&nbsp;</label>
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