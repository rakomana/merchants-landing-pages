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
                     <span id="progressNumber">90</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="{{url('your-email')}}"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1">
                        <div class="meter">
                           <progress max="100" value="90">
                           <span class="widthPercent60"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1">
                           <span>
                           <a class="progressForwardButton" href="form7"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="#" method="post" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound hidden" data-combinederrorid="ErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem ">
                              <span class="staticField autoHide" data-delay="3000" id="null0" data-displayif="true" data-requiredif="false" data-disabledif="false">
                                 <div id="formFakeProcessingPage">
                                    <div class="lenderBackgroundContainer"> </div>
                                    <div class="formIntro">
                                       <h1>Processing your application . . .</h1>
                                    </div>
                                    <div class="loaderInlineBox">
                                       <div class="loaderImageInline">
                                          <img src="#" class="logo-svg">
                                       </div>
                                       <div id="loaderInline"></div>
                                    </div>
                                    <div class="waitInfoTxt">
                                       <div class="waitIco">
                                       </div>
                                       <div class="textRotation" data-textarray="[&quot;Thank you for your application %!firstName!%...&quot;,&quot;You may receive an email at the end of this process, please check your spam.&quot;,&quot;We're starting our search for you now...&quot;,&quot;It may take upto 2 minutes for our search to complete...&quot;,&quot;Please do not close your screen or click away from this page...&quot;,&quot;Still searching %!firstName!%...&quot;,&quot;Whilst we're waiting for a decision %!firstName!%, let's play a quick game to pass the time...&quot;,&quot;Think of a number... any number...&quot;,&quot;I'm going to guess what you're thinking... I'm ALWAYS right...&quot;,&quot;Add 3 to the number that you've thought of...&quot;,&quot;Now double it...&quot;,&quot;Subtract 4 from your new number...&quot;,&quot;Now cut this number in half...&quot;,&quot;Subtract your new number from your original number...&quot;,&quot;Have you worked out what your new number is?&quot;,&quot;Ready for my guess?&quot;,&quot;Ok... your answer is...&quot;,&quot;One...&quot;,&quot;Am I right?&quot;,&quot;I did say that I'm always right...&quot;,&quot;Still searching %!firstName!%, we're almost there now...&quot;]" data-delaytime="5000">Thank you for your application</div>
                                    </div>
                                 </div>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound boxed boxedSubmit" data-combinederrorid="telephone1ErrorCombined">
                        <div class="formfieldHeader">
                           ...and finally, what is your mobile number?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           We may need to text details of your quote.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                              <span class="inputContainer inputContainerAkira small">
                              <input autocomplete="off" class="inputField inputFieldAkira singleField fieldForValidation byChange" name="telephone1" id="telephone10" value="" data-validatevia="validateTelephoneExternally" data-validateextra="{&quot;max&quot;:11,&quot;pattern&quot;:&quot;^[0][7][0-9]{9}$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" maxlength="11" type="tel" pattern="^[0][7][0-9]{9}$" required=""><label class="inputLabel inputLabelAkira" for="telephone1">
                              <span class="inputLabelContent inputLabelContentAkira">e.g.  07700771071</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden telephone1Error">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden telephone1ErrorCombined">&nbsp;</label>
                        </div>
                        <div class="appButtonWrapper">
                           <button type="submit" class="formButton pulse">Get Quote <i class="fas fa-arrow-right"></i></button>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound" data-combinederrorid="ErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem ">
                              <span class="staticField" id="null1" data-displayif="true" data-requiredif="false" data-disabledif="false">
                                 <div class="splashSmlTxtTwo">By selecting Get Quote, you confirm that you have read and agree with our <a href="https://energizemerchantservices.com/privacy" style="color: #252464;">Privacy Policy</a>, our <a href="#" style="color: #252464;">Terms &amp; Conditions</a> and agree to be contacted by a reputable <a href="#" data-display="partnerList" class="openIziModal" style="color: #252464;">merchant account supplier</a> by Telephone, Email and SMS to discuss your options and provide a quote (with no obligation).					</div>
                              </span>
                           </div>
                        </div>
                        <div class="lineBreak10"></div>
                     </div>
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