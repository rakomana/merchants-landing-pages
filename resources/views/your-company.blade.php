@extends('layouts.app')

@section('content')

        <!-- splash -->
      <div id="implement">
         <form @submit.prevent="sendQuote">
        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="760" style="width: 100%; height: 100%;"></canvas>
            </div>
            <section v-if="step == 1">
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
                              <input autocomplete="off" class="inputField inputFieldAkira singleField fieldForValidation byChange" v-model="form.company_name" name="company_name" id="companyName0" value="" data-validatevia="validateText" data-validateextra="{&quot;pattern&quot;:&quot;^[A-Za-z0-9 '*&amp;,.-]+$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="text" pattern="^[A-Za-z0-9 '*&amp;,.-]+$" required="">
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
                            <a href="{{url('address')}}" style="text-decoration: none; color: whitesmoke;">
                              <button @click.prevent="nextStep" class="formButton pulse">
                                 Continue 
                                 <i class="fas fa-arrow-right"></i>
                              </button>
                           </a>
                        </div>
                     </div>
                     <div class="lineBreak10"></div>
               </div>
            </div>
         </section>
         <section v-if="step == 2">
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1">
                     <span id="progressNumber">70</span>% Complete
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
                           <progress max="100" value="70">
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
                              <input autocomplete="off" class="inputField inputFieldAkira singleField fieldForValidation byChange" v-model="form.full_name" name="full_name" id="fullName0" value="" data-validatevia="validateSplitString" data-validateextra="{&quot;validateVia&quot;:&quot;validateText&quot;,&quot;pattern&quot;:&quot;^[a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?'-]+[ ][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?][a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæ?ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝ?Æ?'-]+$&quot;,&quot;delimiter&quot;:&quot; &quot;,&quot;minLengthPart&quot;:&quot;2&quot;,&quot;endFields&quot;:[&quot;firstName&quot;,&quot;lastName&quot;]}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="text" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+[ ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$" required=""><label class="inputLabel inputLabelAkira" for="fullName">
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
                           <button @click.prevent="prevStep" class="formButton pulse"> 
                              <i class="fas fa-arrow-left"></i>
                              Previous
                           </button>
                           <button @click.prevent="nextStep" class="formButton pulse">
                              Continue 
                              <i class="fas fa-arrow-right"></i>
                           </button>
                        </div>
                     </div>
                     <div class="lineBreak10"></div>
               </div>
            </div>
         </section>
         <section v-if="step == 3">
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
                              <input autocomplete="off" class="inputField inputFieldAkira suggestEmailDomains singleField fieldForValidation byChange" name="email" v-model="form.email" id="email0" value="" data-validatevia="validateEmailExternally" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" type="email" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="email">
                              <span class="inputLabelContent inputLabelContentAkira">e.g. quote.name@company.com</span>
                              </label>
                              </span>
                              <div id="esb-email" class="flexyContainer WithWrap paddingTop20 hidden">
                                 <div class="flexyItem center nogrow">
                                    <button name="email" id="emailSuggestion0" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@gmail.com</button>
                                 </div>
                                 <div class="flexyDivider">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button name="email" id="emailSuggestion1" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@hotmail.co.uk</button>
                                 </div>
                                 <div class="flexyLineBreak">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button name="email" id="emailSuggestion2" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@hotmail.com</button>
                                 </div>
                                 <div class="flexyDivider">&nbsp;</div>
                                 <div class="flexyItem center nogrow">
                                    <button name="email" id="emailSuggestion3" value="" class="FormButton squareFormButton aSuggestionButton breakWordWordWrap">...@outlook.com</button>
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
                           <button @click.prevent="prevStep" class="formButton pulse"> 
                              <i class="fas fa-arrow-left"></i>
                              Previous
                           </button>
                           <button @click.prevent="nextStep" class="formButton pulse">
                              Continue 
                              <i class="fas fa-arrow-right"></i>
                           </button>
                        </div>
                     </div>
                     <div class="lineBreak10"></div>
               </div>
            </div>
         </section>
         <section v-if="step == 4">
            <div class="contentContainer formAreaContainer">
               <div class="contentContainer">
                  <div class="meterTxt pagedContent hideOnPage1">
                     <span id="progressNumber">90</span>% Complete
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
                                       <div class="textRotation" data-textarray="[&quot;Thank you for your application %!firstName!%...&quot;,&quot;You may receive an email at the end of this process, please check your spam.&quot;,&quot;We're starting our search for you now...&quot;,&quot;It may take upto 2 minutes for our search to complete...&quot;,&quot;Please do not close your screen or click away from this page...&quot;,&quot;Still searching %!firstName!%...&quot;,&quot;Whilst we're waiting for a decision %!firstName!%, let's play a quick game to pass the time...&quot;,&quot;Think of a number... any number...&quot;,&quot;I'm going to guess what you're thinking... I'm ALWAYS right...&quot;,&quot;Add 3 to the number that you've thought of...&quot;,&quot;Now double it...&quot;,&quot;Subtract 4 from your new number...&quot;,&quot;Now cut this number in half...&quot;,&quot;Subtract your new number from your original number...&quot;,&quot;Have you worked out what your new number is?&quot;,&quot;Ready for my guess?&quot;,&quot;Ok... your answer is...&quot;,&quot;One...&quot;,&quot;Am I right?&quot;,&quot;I did say that I'm always right...&quot;,&quot;Still searching %!firstName!%, we're almost there now...&quot;]" data-delaytime="5000">Thank you for your application paul</div>
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
                              <input autocomplete="off" class="inputField inputFieldAkira singleField" v-model="form.phone_number" name="phone_number" id="telephone10" value="" data-validatevia="validateTelephoneExternally" data-validateextra="{&quot;max&quot;:11,&quot;pattern&quot;:&quot;^[0][7][0-9]{9}$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="true" data-disabledif="false" placeholder="" maxlength="11" type="tel" pattern="^[0][7][0-9]{9}$" required=""><label class="inputLabel inputLabelAkira" for="telephone1">
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
                           <button class="formButton pulse"><i class="fas fa-arrow-left"></i>Previous</button>
                           <button @click.prevent="sendQuote" class="formButton pulse">Get Quote <i class="fas fa-arrow-right"></i></button>
                        </div>
                     </div>
                     <div class="sectionContainer errorMessageBound" data-combinederrorid="ErrorCombined">
                        <div class="flexyContainer justifyCentral">
                           <div class="errorMessageBound flexyItem ">
                              <span class="staticField" id="null1" data-displayif="true" data-requiredif="false" data-disabledif="false">
                                 <div class="splashSmlTxtTwo">By selecting Get Quote, you confirm that you have read and agree with our <a href="#" style="color: #252464;">Privacy Policy</a>, our <a href="#" style="color: #252464;">Terms &amp; Conditions</a> and agree to be contacted by a reputable <a href="#" data-display="partnerList" class="openIziModal" style="color: #252464;">merchant account supplier</a> by Telephone, Email and SMS to discuss your options and provide a quote (with no obligation).					</div>
                              </span>
                           </div>
                        </div>
                        <div class="lineBreak10"></div>
                     </div>
               </div>
            </div>
         </section>
         </div>

          <!--Logo area-->
          <div class="">
          
            <hr>
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
            </div>
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
       autoplaySpeed: 5000,
       arrows: true,
       gap: 00,
      

       
     }); 
</script>
<script>
   const App = new Vue({
       el: "#implement",
       data: {
           step: 1,
           totalsteps: 4,
           error: null,
           loading: false,
           form: {
               company_name: null,
               full_name: null,
               email: null,
               phone_number: null,
           }
       },
       methods: {
           nextStep: function() {
               this.step++;
           },
           prevStep: function() {
               this.step--;
           },
           sendQuote: function() {
               this.loading = true
               axios.post('/api/quote', this.form)
               .then(response => {
                   this.loading = false
                   window.location.href = '/api/quote';
               })
               .catch(error => {
                   this.loading = false
                   swal("Oops!", "Something is wrong!", "warning");
               })
           }
       }
   })
</script>

</div>
</form>
</div>
@endsection