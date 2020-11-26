@extends('layouts.app')

@section('content')

        <!-- splash -->
<div id="implement">
   <form @submit.prevent="sendQuote">
        <div id="splashArea" class="formSplashArea">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="760" style="width: 100%; height: 100%;"></canvas>
            </div>
            <span style="color: white; text-align: center;" v-for="e in error">@{{e}}</span>
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
                           <a class="progressBackButton" href="{{url('40-percent')}}"><i class="fas fa-arrow-left"></i></a>
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
                           <a class="progressForwardButton" href="{{url('address')}}"><i class="fas fa-arrow-right"></i></a>
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
                              <input autocomplete="off" v-model="form.house_number" class="inputField inputFieldAkira doAddressLookupInput street_number short_name singleField fieldForValidation byChange" name="house" v-model="form.street_name" id="house0" value="" data-validatevia="validateText" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="house">
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
                              <input autocomplete="off" v-model="form.street_name" class="inputField inputFieldAkira doAddressLookupInput route long_name singleField fieldForValidation byChange" name="street" id="street0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:1}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="street">
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
                              <input autocomplete="off" v-model="form.town" class="inputField inputFieldAkira doAddressLookupInput postal_town long_name singleField fieldForValidation byChange" name="town" id="town0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="town">
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
                              <input autocomplete="off" v-model="form.country" class="inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange" name="county" id="county0" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="county">
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
                              <input autocomplete="off" v-model="form.post_code" class="inputField inputFieldAkira doAddressLookupInput postal_code short_name singleField fieldForValidation byChange" name="postcode" id="postcode0" value="" data-validatevia="validateText" data-validateextra="{&quot;pattern&quot;:&quot;^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$" required=""><label class="inputLabel inputLabelAkira" for="postcode">
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
                  </form>
               </div>
            </div>
         </section>
         <section v-if="step == 3">
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
         <section v-if="step == 4">
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
         <section v-if="step == 5">
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
   </form>
      </div>
          <!--Logo area-->      
            
        <div class="main ">
                    <div class="grid-full">
            <div class="slides">
              <div>
                <img src="{{asset('img/elavon-logo-346.png')}}">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="{{asset('img/eposnow-logo.png')}}">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="{{asset('img/PAX_Technology_Inc_logo.png')}}">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="{{asset('img/Ingenico_Logo.png')}}">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="{{asset('img/register-by-smart-volution-logo.png')}}">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="{{asset('img/Pocket Apps Green Logo.webp')}}">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="{{asset('img/elavon-logo-346.png')}}">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="{{asset('img/eposnow-logo.png')}}">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="{{('img/PAX_Technology_Inc_logo.png')}}">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="{{asset('img/Ingenico_Logo.png')}}">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="{{asset('img/register-by-smart-volution-logo.png')}}">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="{{asset('img/Pocket Apps Green Logo.webp')}}">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="{{asset('img/elavon-logo-346.png')}}">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="{{asset('img/eposnow-logo.png')}}">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="{{asset('img/PAX_Technology_Inc_logo.png')}}">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="{{asset('img/Ingenico_Logo.png')}}">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="{{asset('img/register-by-smart-volution-logo.png')}}">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="{{asset('img/Pocket Apps Green Logo.webp')}}">
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
<script>
   const App = new Vue({
       el: "#implement",
       data: {
           step: 1,
           totalsteps: 5,
           error: null,
           loading: false,
           form: {
               company_name: null,
               full_name: null,
               email: null,
               phone_number: null,
               house_number: null,
               street_name: null,
               town: null,
               country: null,
               post_code: null,
           }
       },
       methods: {
           nextStep: function() {
               if(this.step == 1)
                {
                    this.error = null
                    if(!this.form.company_name)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                }

                if(this.step == 2)
                {
                    this.error = null
                    if(!this.form.house_number)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    if(!this.form.street_name)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    if(!this.form.town)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    if(!this.form.country)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                    if(!this.form.post_code)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                }

                if(this.step == 3)
                {
                    this.error = null
                    if(!this.form.full_name)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                }
                
                if(this.step == 4)
                {
                    this.error = null
                    if(!this.form.email)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                }
                

                this.step++;
           },
           prevStep: function() {
               this.step--;
           },
           sendQuote: function() {
               if(this.step == 5)
                {
                    this.error = null
                    if(!this.form.phone_number)
                    {
                        this.error = 'please fill in the missing values'
                        return false;
                    }
                }
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
@endsection