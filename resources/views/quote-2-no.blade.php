@extends('layouts.app')

@section('content')
        <!-- splash -->

        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="634" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1" style="">
                     <span id="progressNumber">30</span>% Complete
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
                           <progress max="100" value="30">
                           <span class="widthPercent20"></span>
                           </progress>
                        </div>
                     </div>
                     <div class="flexyItem">
                        <div class="meterBut pagedContent hideOnPage1" style="">
                           <span>
                           <a class="progressForwardButton" href="form3"><i class="fas fa-arrow-right" href="img/download.png"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <form action="{{url('40-percent')}}" method="GET" id="formPageForm" novalidate="true">
                     <div class="sectionContainer errorMessageBound boxed hidden" data-combinederrorid="cardPaymentAmountErrorCombined">
                        <div class="formfieldHeader">
                           How much does your business process per month via credit/debit cards?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg" data-at2x=""> 
                           </div>
                           Select how much of your monthly revenue is made up from credit/debit card transactions.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop10 width100Percent">
                              <div id="cardPaymentAmount0" class="flexyContainer paddingTop20 justifyCentral flex sml multipleFieldParent has3Children centerByMargin" data-fieldname="cardPaymentAmount" data-validatevia="validateArray" data-validateextra="{&quot;values&quot;:[{&quot;value&quot;:1000},{&quot;value&quot;:10000},{&quot;value&quot;:15000},{&quot;value&quot;:50000},{&quot;value&quot;:100000},{&quot;value&quot;:100001}]}" data-validateinvalidates="null" data-validatelinkedfields="null" data-enabled="true" data-value="" data-requiredif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;Yes&quot;}}]}" data-displayif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;Yes&quot;}}]}" data-disabledif="false">
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount01000" value="1000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Upto £1,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount010000" value="10000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£1,000 - £10,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount050000" value="50000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£10,000 - £50,000</a>
                                 </div>
                                 <div class="flexyLineBreak">&nbsp;</div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount0100000" value="100000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£50,000 - £100,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount0100001" value="100001" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£100,000+</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount015000" value="15000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Unsure</a>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden cardPaymentAmountError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden cardPaymentAmountErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound boxed" data-combinederrorid="cardPaymentAmountErrorCombined">
                        <div class="formfieldHeader">
                           How Much Does Your Business Turnover Every Month?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg" data-at2x=""> 
                           </div>
                           This Will Help To Determine Which Merchant Account Is Best You.				
                        </div>
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem paddingTop10 width100Percent">
                              <div id="cardPaymentAmount1" class="flexyContainer paddingTop20 justifyCentral flex sml multipleFieldParent has3Children centerByMargin" data-fieldname="cardPaymentAmount" data-validatevia="validateArray" data-validateextra="{&quot;values&quot;:[{&quot;value&quot;:1000},{&quot;value&quot;:10000},{&quot;value&quot;:15000},{&quot;value&quot;:50000},{&quot;value&quot;:100000},{&quot;value&quot;:100001}]}" data-validateinvalidates="null" data-validatelinkedfields="null" data-enabled="true" data-value="" data-requiredif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;No&quot;}}]}" data-displayif="{&quot;checks&quot;:[{&quot;*hasProvider&quot;:{&quot;op&quot;:&quot;equal&quot;,&quot;value&quot;:&quot;No&quot;}}]}" data-disabledif="">
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount11000" value="1000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Upto £1,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount110000" value="10000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£1,000 - £10,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount150000" value="50000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£10,000 - £50,000</a>
                                 </div>
                                 <div class="flexyLineBreak">&nbsp;</div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount1100000" value="100000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£50,000 - £100,000</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount1100001" value="100001" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">£100,000+</a>
                                 </div>
                                 <div class="flexyDivider"></div>
                                 <div class="flexyItem centerContentsByMargin ">
                                    <a href="{{url('40-percent')}}" type="submit" name="cardPaymentAmount" id="cardPaymentAmount115000" value="15000" class="squareFormButton aTypeOfButton fieldForValidation byAjaxSubmit multipleField my-btn">Unsure</a>
                                 </div>
                              </div>
                              <div>
                                 <label class="fieldValidationError hidden cardPaymentAmountError">&nbsp;</label>
                              </div>
                           </div>
                        </div>
                        <div>
                           <label class="fieldValidationError hidden cardPaymentAmountErrorCombined">&nbsp;</label>
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