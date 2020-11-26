@extends('layouts.app')

   @section('content')

        <!-- splash -->

        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="1110" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1">
                     <span id="progressNumber">54</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="{{url('your-company')}}"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1">
                        <div class="meter">
                           <progress max="100" value="54">
                           <span class="widthPercent60"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1">
                           <span>
                           <a class="progressForwardButton" href="{{url('your-name')}}"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('your-name')}}" method="" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound boxed hidden" data-combinederrorid="fullAddressErrorCombined">
                        <div class="formfieldHeader">
                           What is your company's address?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg" data-at2x="resources/images/info@2x.png"> 
                           </div>
                           We use your address information to ensure that quotes are as accurate as possible for your area.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem noGrowDesktop paddingTop20">
                              <span class="inputContainer inputContainerAkira small">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookup singleField fieldForValidation byChange" name="fullAddress" id="fullAddress0" value="" data-validatevia="validateFalse" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*county&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*house&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*postcode&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*street&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*town&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}}]}" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*county&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*house&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*postcode&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*street&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}},{&quot;*town&quot;:{&quot;op&quot;:&quot;present&quot;,&quot;value&quot;:false}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$"><label class="inputLabel inputLabelAkira" for="fullAddress">
                              <span class="inputLabelContent inputLabelContentAkira">Start typing your address</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden fullAddressError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden fullAddressErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound addressSearch boxedSplit boxedSplitStart marginTopMinus30 whiteBackground roundedtop" data-combinederrorid="houseErrorCombined">
                        <div class="formfieldHeader">
                           What is your company's address?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg" data-at2x="resources/images/info@2x.png"> 
                           </div>
                           We use your address information to ensure that quotes are as accurate as possible for your area.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookupInput street_number short_name singleField fieldForValidation byChange" name="house" id="house0" value="" data-validatevia="validateText" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="house">
                              <span class="inputLabelContent inputLabelContentAkira">House Number or Name</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden houseError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden houseErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound addressSearch boxedSplit boxedSplitMiddle marginTopMinus30 whiteBackground paddingTop20" data-combinederrorid="streetErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookupInput route long_name singleField fieldForValidation byChange" name="street" id="street0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:1}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="street">
                              <span class="inputLabelContent inputLabelContentAkira">Street Name</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden streetError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden streetErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound addressSearch boxedSplit boxedSplitMiddle marginTopMinus30 whiteBackground paddingTop20" data-combinederrorid="townErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookupInput postal_town long_name singleField fieldForValidation byChange" name="town" id="town0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="town">
                              <span class="inputLabelContent inputLabelContentAkira">Town</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden townError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden townErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound addressSearch boxedSplit boxedSplitMiddle marginTopMinus30 whiteBackground paddingTop20" data-combinederrorid="countyErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange" name="county" id="county0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="county">
                              <span class="inputLabelContent inputLabelContentAkira">County</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden countyError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden countyErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound addressSearch boxedSplit boxedSplitMiddle paddingBottom20 marginTopMinus30 whiteBackground roundedBottom boxedSubmit paddingTop20" data-combinederrorid="postcodeErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira doAddressLookupInput postal_code short_name singleField fieldForValidation byChange" name="postcode" id="postcode0" value="" data-validatevia="validateText" data-validateextra="{&quot;pattern&quot;:&quot;^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$" required=""><label class="inputLabel inputLabelAkira" for="postcode">
                              <span class="inputLabelContent inputLabelContentAkira">Postcode</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden postcodeError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden postcodeErrorCombined">&nbsp;</label>
                        </div>
                        <div class="appButtonWrapper">
                            <a style="text-decoration: none; color: whitesmoke;"><button type="submit" class="formButton pulse">Continue <i class="fas fa-arrow-right"></i></button></a>
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