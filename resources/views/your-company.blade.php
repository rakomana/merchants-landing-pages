@extends('layouts.app')

@section('content')

        <!-- splash -->

        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="760" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1" style="">
                     <span id="progressNumber">50</span>% Complete
                  </div>
                  <div class="flexyContainer applyMeter pagedContent hideOnPage1" style="">
                     <div class="flexyItem">
                        <div class="meterBut">
                           <span>
                           <a class="progressBackButton" href="form1/Backwards"><i class="fas fa-arrow-left"></i></a>
                           </span>
                        </div>
                     </div>
                     <div class="flexyItem pagedContent hideOnPage1" style="">
                        <div class="meter">
                           <progress max="100" value="50">
                           <span class="widthPercent10"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1" style="">
                           <span>
                           <a class="progressForwardButton"><i class="fas fa-arrow-right"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('address')}}" method="post, GET" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound boxed boxedSubmit" data-combinederrorid="companyNameErrorCombined">
                        <div class="formfieldHeader">
                           What is your company name?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           Please enter the name (or trading name) of your business.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop20 center">
                              <span class="inputContainer inputContainerAkira small">
                              <input autocomplete="off" class="inputField inputFieldAkira singleField fieldForValidation byChange" name="companyName" id="companyName0" value="" data-validatevia="validateText" data-validateextra="{&quot;pattern&quot;:&quot;^[A-Za-z0-9 '*&amp;,.-]+$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="text" pattern="^[A-Za-z0-9 '*&amp;,.-]+$" required="">
                              <label class="inputLabel inputLabelAkira" for="companyName">
                              <span class="inputLabelContent inputLabelContentAkira" requied>e.g. Company Ltd</span>
                              </label>
                              </span>
                              <div>
                                 <label class="fieldValidationError hidden companyNameError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden companyNameErrorCombined">&nbsp;</label>
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