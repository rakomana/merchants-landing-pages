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
                     <span id="progressNumber">80</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="form5/Backwards"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1">
                        <div class="meter">
                           <progress max="100" value="80">
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
                  <form action="{{url('your-number')}}" method="" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound boxed boxedSubmit" data-combinederrorid="emailErrorCombined">
                        <div class="formfieldHeader">
                           What is your email address?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           We may need to email details of your quote.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 center">
                              <span class="inputContainer inputContainerAkira small inputFilled">
                              <input autocomplete="off" class="inputField inputFieldAkira suggestEmailDomains singleField fieldForValidation byChange" name="email" id="email0" value="" data-validatevia="validateEmailExternally" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="email" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="email">
                              <span class="inputLabelContent inputLabelContentAkira">e.g. quote.name@company.com</span>
                              </label>
                              </span>
                              <div id="esb-email" class="flexyContainer WithWrap paddingTop20 hidden">
                                 <div class="flexyItem center nogrow">
                                    <button type="submit" name="email" id="emailSuggestion0" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@gmail.com</button>
                                 </div>
                                 <div class="flexyDivider">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button type="submit" name="email" id="emailSuggestion1" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@hotmail.co.uk</button>
                                 </div>
                                 <div class="flexyLineBreak">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button type="submit" name="email" id="emailSuggestion2" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@hotmail.com</button>
                                 </div>
                                 <div class="flexyDivider">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button type="submit" name="email" id="emailSuggestion3" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@outlook.com</button>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden emailError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden emailErrorCombined">&nbsp;</label>
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
</div>

@endsection