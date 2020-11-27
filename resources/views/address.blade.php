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
               
               <form action="{{url('your-name')}}" method="" id="formPageForm" novalidate="true" class="sectionContainer boxed ">
                  
                  <div class="formfieldHeader">
                           What is your company's address?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           We use your address information to ensure that quotes are as accurate as possible for your area.				
                        </div>

                        <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="inputLabelContent inputLabelContentAkira">House Number or Name</div>
                      <input type="search" class="inputField inputFieldAkira doAddressLookupInput street_number short_name singleField fieldForValidation byChange " id="addrs_1" placeholder="Start typing your address..." autocomplete="off" name="house" value="" data-validatevia="validateText" data-validateextra="" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""><label class="inputLabel inputLabelAkira" for="house"></input>
                     </span>
                     <div>
                           <label class="fieldValidationError hidden houseErrorCombined">&nbsp;</label>
                        </div>
                     </div>
                     

                     <!--<div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                      <div class="inputLabelContent inputLabelContentAkira">Street Name</div>
                      <input type="text" class="inputField inputFieldAkira doAddressLookupInput route long_name singleField fieldForValidation byChange" id="addrs_2" name="street" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:1}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""></input>
                      </span>
                      <div>
                                 <label class="fieldValidationError hidden streetError">&nbsp;</label>
                              </div>
                     </div>
  
                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                      <div class="inputLabelContent inputLabelContentAkira">Town</div>
                     <input class="inputField inputFieldAkira doAddressLookupInput postal_town long_name singleField fieldForValidation byChange" id="suburb" name="town" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""></input>
                     </span>
                     </div>
  
                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                      <div class="inputLabelContent inputLabelContentAkira">City</div>
                      <input class="inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange" id="city" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""></input>
                      </span>
                     </div>

                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                      <div class="inputLabelContent inputLabelContentAkira">Country</div>
                      <input class="inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange" id="country" value="" data-validatevia="validateText" data-validateextra="{&quot;min&quot;:3}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^.{0,}$" required=""></input>
                      </span>
                     </div>-->
  
                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                      <div class="inputLabelContent inputLabelContentAkira">Postcode</div>
                      <input class="inputField inputFieldAkira doAddressLookupInput postal_code short_name singleField fieldForValidation byChange" id="postcode" value="" data-validatevia="validateText" data-validateextra="{&quot;pattern&quot;:&quot;^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$&quot;}" data-validatelinkedfields="null" data-validateinvalidates="null" data-requiredif="true" data-displayif="{&quot;matchType&quot;:&quot;or&quot;,&quot;checks&quot;:[{&quot;*fullAddress&quot;:{&quot;backendmatched&quot;:true,&quot;op&quot;:&quot;hidden&quot;,&quot;value&quot;:null}}]}" data-disabledif="false" placeholder="" type="text" pattern="^[[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]?[ ]?[0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$" required=""></input>
                      </span>
                     </div>

                      <div class="appButtonWrapper">
                            <a style="text-decoration: none; color: whitesmoke;"><button type="submit" class="formButton pulse">Continue <i class="fas fa-arrow-right"></i></button></a>
                        </div>

                  </form>
                  </div>
            </div>
         </div>
               
                  <!--<form action="{{url('your-name')}}" method="" id="formPageForm" novalidate="true" class="sectionContainer boxed " >
                  <div class="formfieldHeader">
                           What is your company's address?				
                        </div>
                        <div class="fieldInfoTxt">
                           <div class="infoIco">
                              <img src="img/info.svg"> 
                           </div>
                           We use your address information to ensure that quotes are as accurate as possible for your area.				
                        </div>
                        <br><br>
                  <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                        <label class="inputLabelContent inputLabelContentAkira">Address Search</label>
                        <input class="search-bar form-control inputField inputFieldAkira doAddressLookupInput street_number short_name singleField fieldForValidation byChange"/>
                     </div>
                     </span>
                     </div>
                <hr/>
                <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                         <label class="inputLabelContent inputLabelContentAkira">House Number</label>
                        <input class="address-line-1 form-control inputField inputFieldAkira doAddressLookupInput route long_name singleField fieldForValidation byChange"/>
                      </div>
                        </span>
                        </div>

                        <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                        <label class="inputLabelContent inputLabelContentAkira">Address Line 2</label>
                        <input class="address-line-2 form-control inputField inputFieldAkira doAddressLookupInput postal_town long_name singleField fieldForValidation byChange" />
                     </div>
                     <span>

                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                        <label class="inputLabelContent inputLabelContentAkira">Town</label>
                        <input class="address-town form-control inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange"/>
                     </div>
                     </span>
                     </div>

                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                      <label class="inputLabelContent inputLabelContentAkira ">Postcode</label>
                        <input class="address-zip form-control inputField inputFieldAkira doAddressLookupInput postal_code short_name singleField fieldForValidation byChange"/>
                     </div>
                     </span>
                     </div>

                     <div class="errorMessageBound flexyItem paddingTop20 noGrowDesktop">
                        <span class="inputContainer inputContainerAkira small inputFilled">
                     <div class="form-group">
                     <label class="inputLabelContent inputLabelContentAkira ">Country</label>
                     <input class="address-country form-control inputField inputFieldAkira doAddressLookupInput administrative_area_level_1 short_name singleField fieldForValidation byChange"/>
                  </div>
                  </span>
                  </div>
                  <div class="appButtonWrapper">
                            <a style="text-decoration: none; color: whitesmoke;"><button type="submit" class="formButton pulse">Continue <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                  </div></div>
               </form>


               </div>
            </div>
         </div>-->

         <!--<style>
            form{
	padding: 50px;
	width: 500px;
	margin: auto;
}
         </style>


         <script>
            new clickToAddress({
    accessToken: '264d8-1fe06-a86f1-06348',
    dom: {
        search:     'search-bar',
        town:       'address-town',
        postcode:   'address-zip',
        line_1:     'address-line-1',
        line_2:     'address-line-2',
        country:   	'address-country'
    },
	domMode: 'class',
	gfxMode: 1

   countryMatchWith: "text",
    enabledCountries: ["Poland", "Hungary", "United Kingdom"]

    onResultSelected: function(c2a, elements, address){
        console.log("Congratulations, You just picked an address!");
    },
    onCountyChange: function(c2a, elements, address){
        console.log("County Changed");
    }
});
         </script>-->

          <!--Logo area-->      
            
          <div class="main ">
                    <div class="grid-full">
            <div class="slides" style="padding-bittom:0px; vertical-align:center;">
              <div>
                <img src="img/elavon-logo-346.png"  style="width: 50%;
        height: auto; justify-content: center;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png"  style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="img/elavon-logo-346.png" style="width: 50%;
        height: auto;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png" style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               <div></div>
               <div>
                <img src="img/elavon-logo-346.png" style="width: 50%;
        height: auto;">
             
            </div><!--/1-->
            <div></div>
            <div>
                
              <img src="img/eposnow-logo.png" style="width: 50%;
        height: auto;">
            </div><!--/2-->
            <div></div>
            <div>
              <img src="img/PAX_Technology_Inc_logo.png" style="width: 50%;
        height: auto;">
            </div><!--/3-->
            <div></div>
            <div>
             <img src="img/Ingenico_Logo.png" style="width: 50%;
        height: auto;">
            </div><!--/4-->
            <div></div>
            <div>
                <img src="img/register-by-smart-volution-logo.png" style="width: 50%;
        height: auto;">
               </div><!--/5-->
               <div></div>
               <div>
                <img src="img/Pocket Apps Green Logo.webp" style="width: 50%;
        height: auto;">
               </div><!--/6-->
               
            </div></div>
            
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