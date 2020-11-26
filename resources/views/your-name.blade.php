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
                     <span id="progressNumber">70</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="{{url('address')}}"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1">
                        <div class="meter">
                           <progress max="100" value="70">
                           <span class="widthPercent60"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1">
                           <span>
                           <a class="progressForwardButton" href="{{url('your-email')}}"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('your-email')}}" method="" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound boxed boxedSubmit" data-combinederrorid="fullNameErrorCombined">
                        <div class="formfieldHeader">
                           What is your full name?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           Please enter your forename and surname.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira singleField fieldForValidation byChange" name="fullName" id="fullName0" value="" data-validatevia="validateSplitString" data-validateextra="{&quot;validateVia&quot;:&quot;validateText&quot;,&quot;pattern&quot;:&quot;^[a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?'-]+[ ][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?'-]+$&quot;,&quot;delimiter&quot;:&quot; &quot;,&quot;minLengthPart&quot;:&quot;2&quot;,&quot;endFields&quot;:[&quot;firstName&quot;,&quot;lastName&quot;]}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="text" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+[ ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$" required=""><label class="inputLabel inputLabelAkira" for="fullName">
                              <span class="inputLabelContent inputLabelContentAkira">e.g. Adam Smith</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden fullNameError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden fullNameErrorCombined">&nbsp;</label>
                        </div>
                        <div class="appButtonWrapper">
                           <button type="submit" class="formButton pulse">Continue <i class="fas fa-arrow-right"></i></button>
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