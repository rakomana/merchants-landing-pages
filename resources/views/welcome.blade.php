@extends('layouts.app')

@section('content')
<body>
      <iframe class="hidden" src="https://"></iframe>
      <div class="allowInherit">
         <span class="hidden" id="cookieScriptData" data-baseloaderurl="" data-cookietext1="By continuing to use our website, you agree to the use of cookies. 
            Click " data-cookietext2=" to find out more about cookies " data-timeout="5000" data-closebtn="show"></span><span class="hidden" id="featureDetectScriptData" data-featuredetecttext="Your browser does not appear support the functionality to run this site.  Please update your browser to use this site: " data-featuredetectlink="https://browser-update.org/update.html" data-featuredetectlinktext="Update your Browser"></span>		
         <header>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem logo">
                     <a href="{{url('/')}}"><img src="img/merchant_logo.png" class="logo-svg" alt="Logo"></a>
                  </div>
                  <div class="flexyItem right alignSelfCenter">
                     <div class="secure">
                        <i class="fas fa-lock"></i> Secure UK Site						
                     </div>
                  </div>
               </div>
            </div>
         </header>

<!-- splash -->
         <div id="splashArea" class="">
            <div id="particles-js">
               <canvas class="particles-js-canvas-el" width="1349" height="678" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="splashLeft" style="background: url(img/merch-left.svg); background-repeat: no-repeat; background-size: 18%; background-position: left center;"></div>
            <div class="splashRight" style="background: url(img/merch-right.svg);  background-repeat: no-repeat; background-position: right center; background-size: 25%;"></div>
            <div class="contentContainer">
               <div class="flexyContainer">
                  <div class="flexyItem">
                     <h1 class="lrg">Looking For <span style="color: #ac4c7c;">The Best<br> Merchant Account</span> Deals?</h1>
                     <h2>Compare Leading Merchant Accounts With One Simple Form</h2>
                     <div class="splashButtonContainer">
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Compare merchant accounts from leading providers</div><br>
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Save £££s in processing fees</div>
                        <div class="splashBullet" style="background: url(img/splash-bullet.svg); background-position: 0% 50%; background-repeat: no-repeat; background-size: 16px; ">Free No Obligation Quote</div>
                     </div>
                     <a class="splashButton pulse" href="{{url('start-quote')}}">Start Free Quote</a>
                  </div>
               </div>
            </div>
            
         </div>
         <!-- end splash -->
         <!--logo area-->
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
</div><br><br><br><br><br><br><br>
         <div id="stepsRow">
            <div class="contentContainer">
               <h1>Compare leading Merchant Account providers in 3 simple steps</h1>
            </div>
            <div class="contentContainer itemsContainer ">
               <div class="flexyContainer container noWrap space-between ico">
                  <div class="flexyItem">
                     <img src="img/step1.svg" class="" data-id="1">                        
                     <h3></h3>
                     <h2>1. Complete our simple assessment form (takes less than 2 minutes)</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/step2.svg" class="" data-id="2">                        
                     <h3></h3>
                     <h2>2. We search a range of Merchant Accounts from a number of reputable providers (all for free and with no obligation).</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/step3.svg" class="" data-id="3">                        
                     <h3></h3>
                     <h2>3. Compare a range of quotes and see how much you could save</h2>
                  </div>
               </div>
            </div>
         </div>
         <div id="muchRow" class="muchRowImages">
            <div class="contentContainer">
               <h1>
                  <div class="flexyContainer">Why use Energize Merchant Services For Merchant Accounts?</div>
               </h1>
            </div>
            <div class="contentContainer itemsContainer ">
               <div class="flexyContainer container noWrap space-between ico">
                  <div class="flexyItem">
                     <img src="img/much1.svg" class="" data-id="1">                        
                     <h3></h3>
                     <h2>Our service is <span class="purp">trusted by thousands of businesses</span> across the UK</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much2.svg" class="" data-id="2">                        
                     <h3></h3>
                     <h2>Compare <span class="coral">Merchant Account</span> providers</h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much3.svg" class="" data-id="3">                        
                     <h3></h3>
                     <h2>Challenge us to <span class="purp">beat any new or existing quote</span></h2>
                  </div>
                  <div class="flexyItem">
                     <img src="img/much4.svg" class="" data-id="4">                        
                     <h3></h3>
                     <h2>Always <span class="coral">free to use and with no obligation</span></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

      <!--info section-->
      <div id="muchRow" class="contentContainer flexyContainer">
   <div class="flexyItem contentArea">
      <div class="">
         <h2 class="">							            Understanding Merchant Accounts						</h2>
      </div>
      <div class="">
         <p class="">							            As the world changes, so too does the nature of business. With the dawn of the internet, online businesses are
            becoming more and more popular and although there is still an abundance of physical stores in the UK, physical
            cash is becoming less common. A study shows that Britain is on course to become a cashless nation within this decade<sup>1</sup>.
            <br><br>
            As the country seems to be moving away from cash, it is becoming increasingly beneficial for businesses to start
            accepting card payments. To do so you will need to have set up a <b>Merchant Account</b>. This is a type of bank account
            that lets your business accept secure debit and credit card payments. This can be done, in store, over the phone,
            or online. Without one of these accounts your business won't be able to process credit or debit card payments
            and runs the risk of you being left behind in the ever-evolving world of business.
            <br><br>
            Still not sold? Read on to discover <b>5 Ways That Card Payments Can Benefit Your Business</b> and a little bit more
            of an insight into the <b>Merchant Account</b> space.
            <br><br>						
         </p>
      </div>
      <div class="">
         <h2 class="">							            5 Ways That Card Payments Can Benefit Your Business
            <br>						
         </h2>
      </div>
      <div class="">
         <h3 class="">							            <br>1. It Makes Things Easier						</h3>
         <p class="">							            Card payments make things much simpler for both you and your customers. On a very basic level, you're no longer having to check
            the authenticity of the cash and then spending time counting out the change. With a card transaction, type the cost into your
            terminal and you're good to go. If you have contactless capabilities, even better! This allows for a much smoother transaction
            time between you and your customers. These types of payment also lower the need for bank visits, to either deposit or change
            cash, saving you valuable time away from your business.
            <br>						
         </p>
         <h3 class="">							            2. Encourages Higher Spending						</h3>
         <p class="">							            How many times have you been out with a budget in mind but then throw it completely out of the window when you
            see something that you like and justify by saying "just putting it on the card?" Well you're not alone, a 2019
            report showed that 85% of consumer payments were spontaneous, totalling £29.7 billion<sup>1</sup>.   By 2024, 50% of all payments are forecasted to come from debit cards whereas 65% of UK adults already currently own a credit card.[1] This just goes to
            show how taking card payments either in person, online or over the phone, can help boost inflowing cash to your business.
            <br>						
         </p>
         <h3 class="">							            3. Increase Your Customer Size						</h3>
         <p class="">							            As mentioned, cash is becoming a thing of the past, and as a result, more and more electronic methods of payments are
            emerging. Although traditional companies such as Visa and Mastercard are still extremely common, companies such as
            Google, Apple and Android have their own dedicated payment services that are becoming increasingly popular.
            It is now even possible to pay directly with your phone on contactless systems, and with 8.5 million people
            registered with mobile payments , this can increase your customer base massively.
            <br>						
         </p>
         <h3 class="">							            4. Improve Cash Flow						</h3>
         <p class="">							            Card payments provide a much more streamlined process than taking cash. Those taken from card payments
            are much more likely to be settled quickly and the proceeds are deposited into your business bank account
            within a matter of days. This cuts out all the hassle surrounding cash, bouncing cheques and invoice
            collection from customers. This can result in a higher rate of efficiency for day to day running of
            your business.
            <br>						
         </p>
         <h3 class="">							            5. Security						</h3>
         <p class="">							            There's always that anxiety of leaving a large sum of money on the premises. No matter how good the venue's security
            is or how heavy the safe that's housing all the cash is, it still sits there, wondering, "what if"? With card payments,
            the money is all stored digitally meaning that there is zero percent chance of theft. This also eliminates any possibility
            of accidental loss or damage to cash reserves, giving you one less thing to worry about at night.
            <br>						
         </p>
      </div>
      <div class="">
         <h2 class="">							            How Do I Take Payments?<br>						</h2>
         <h3 class="">							            In Person						</h3>
         <p class="">							            You will require a <b>PDQ machine</b> that will typically be rented from your <b>Merchant Service Provider</b> as part of your <b>Merchant
            Service Agreement</b>. These can come in numerous forms, be they counter top, wireless or mobile card reader models. This is
            up to you depending on your business. If you're a restaurant for example, it's probably beneficial to have a mobile
            reader so that you can take payments from your guests at their table.
            <br>						
         </p>
         <h3 class="">							            Online						</h3>
         <p class="">							            These can sometimes be referred to as an <b>Internet Merchant Account</b> or <b>IMA</b>. You'll be familiar with these if you've ever made
            an online purchase that involves a "check out" option. These are known as <b>"Payment Gateways"</b> and you'll be equipped with one
            of these, allowing your business to take secure online payments with ease.
            <br>						
         </p>
         <h3 class="">							            Over The Phone						</h3>
         <p class="">							            If you're looking at taking payments over the phone you're going to need a dedicated mail order/ telephone order <b>MOTO Merchant Account</b>,
            with a virtual terminal. The Terminal is a secure webpage that is easily accessed on your end, where you log in, enter the customers
            card details and you're done. Easy.
            <br>						
         </p>
      </div>
      <div class="">
         <h2 class="">							            The Ins &amp; Outs Of Merchant Accounts						</h2>
         <p class="">							            We mentioned that in order to be able to properly and securely process credit and debit card payments, you will need a <b>Merchant Account</b>.
            Below we will discuss the types of <b>Merchant Accounts</b> that are available to you and dig a little more into how they work.
            <br>						
         </p>
      </div>
      <div class="">
         <h2 class="">							            What Type Of Merchant Account Can I Get?						</h2>
         <p class="">							            There are three different types of <b>Merchant Account</b> available, and it's up to you to decide on which one you think is most suitable for your business.
            <br>						
         </p>
         <h3 class="">							            Aggregate Merchant Accounts						</h3>
         <p class="">							            An Aggregate Merchant Account is the most common and generally most suitable for smaller businesses. A <b>Payment Facilitator (PF)</b>
            will act as the middle man between your company and the bank and take cut of the room fee as payment. Similar to an estate
            agent and how they take commission for facilitating the transaction of a property.
            <br><br>
            When you sign up your business will be assigned with a unique code depending on the industry you operate in. You are then
            placed in a pool with similar businesses. This allows for the <b>PF</b> to acquire multiple businesses at once and in turn can
            negotiate a much lower fee with the banks, saving you money.
            <br>						
         </p>
         <h3 class="">							            Dedicated Merchant Accounts						</h3>
         <p class="">							            This is the total opposite of the <b>Aggregate Merchant Account</b>. A <b>Dedicated Merchant Account</b> cuts out the middle man and places you
            firmly in the driving seat. You are responsible for contacting the acquiring bank and setting everything up, including negotiating
            fees. This may be the better account for those who are a bit more savvy to the finance world and don't mind that extra work load
            when it comes to dealing directly with the bank.
            <br>						
         </p>
         <h3 class="">							            High Risk Accounts						</h3>
         <p class="">							            <b>High Risk Accounts</b> are for businesses that are, well, high risk and may struggle getting a traditional <b>Merchant Account</b>.
            There are a few reasons as to why your business may fall into this category. The first is the lifespan of the business.
            How long have you been operating for and how healthy and consistent has turnover been? Have you or any of your business partners been declared bankrupt?
            <br><br>
            The sector your business operates in can also flag you as high risk. Gambling, travel and anything that relies on a subscription
            service to generate revenue will typically fall under this category.
            <br><br>
            Rates in this field are slightly higher, however there are providers that specialise exclusively in this field which
            can be found <a href="{{url('start-quote')}}">HERE</a>.
            <br>						
         </p>
      </div>
      <div class="">
         <h2 class="">							            How Much Will I Have To Pay?						</h2>
         <p class="">							            Ok, so we know that this next bit may be a little bit dull but the team at Commercial Experts really think that you need to
            understand the intricacies of <b>Merchant Accounts</b>, so that when the time comes to get you set up with one, you know exactly
            what it is you're looking for and what the costs are going to be.
            <br><br>
            Fee's will very much vary by provider and your business type, you can compare exact costs by applying <a href="{{url('start-quote')}}">HERE</a>. The way <b>Merchant Account</b>
            fees work however is based on the volume of card transactions processed. The more you take annually, the lower the fees.
            <br><br>
            <b>Merchant Account Core Charges</b> are often split in to two payment categories. Below we've compiled a nifty little table for you
            to see what fees may look like and how they are categorised. Make sure to ask your provider about these (and it may be worth
            taking a note of the contents of the table).
            <br>
         </p>
         <table>
            <tbody>
               <tr>
                  <th>Fee</th>
                  <th>Typical rate</th>
                  <th>Charged</th>
               </tr>
               <tr>
                  <td>Debit cards</td>
                  <td>0.3% - 1%</td>
                  <td>Per transaction</td>
               </tr>
               <tr>
                  <td>Credit cards</td>
                  <td>1% - 2%</td>
                  <td>Per transaction</td>
               </tr>
               <tr>
                  <td>Authorisation fee</td>
                  <td>2p - 4p</td>
                  <td>Per transaction</td>
               </tr>
               <tr>
                  <td>Card terminal rental</td>
                  <td>£15 - £30</td>
                  <td>Monthly</td>
               </tr>
               <tr>
                  <td>Payment gateway</td>
                  <td>£15 - £25</td>
                  <td>Monthly</td>
               </tr>
               <tr>
                  <td>Virtual terminal</td>
                  <td>£10 - £20</td>
                  <td>Monthly</td>
               </tr>
               <tr>
                  <td>Minimum monthly service charge*</td>
                  <td>£5 - £25</td>
                  <td>Monthly</td>
               </tr>
               <tr>
                  <td>Joining fee</td>
                  <td>£50 - £100</td>
                  <td>One-off</td>
               </tr>
               <tr>
                  <td>Early contract termination*</td>
                  <td>£50 - £100</td>
                  <td>One-off</td>
               </tr>
            </tbody>
         </table>
         <b>* A minimum charge if your monthly transaction volume doesn't reach a pre agreed threshold</b>
         <br><br>
         There can of course be some additional background fee's that businesses have to pay if they sign up to a <b>Merchant Account</b> and
         some charges that may potentially be included within the terms your contract. These are typically made up of the following:
         <br><br>						
         <p></p>
         <h3 class="">							            PCI Compliance						</h3>
         <p class="">							            The first of these is <b>Payment Card Industry Compliance</b> or <b>PCI Compliance</b>. This is a <b>Legal Requirement</b> that helps to ensure the
            security of credit card transactions. For a small fee, that will vary depending on provider and can be compared <a href="{{url('start-quote')}}">HERE</a>, providers
            will offer a <b>PCI Compliance Service</b>. Trust us, the hassle of sorting this out yourself isn't worth it and not having it at all
            can result in a sizeable fine.
            <br>						
         </p>
         <h3 class="">							            Chargeback Fees						</h3>
         <p class="">							            These aren't anything to worry about unless you're up to something that perhaps you shouldn't be. This is a
            fee that protects the consumer. Basically, if the consumer believes that a payment is fraudulent, then they
            can challenge it. If it turns out that something suspect is going on and the challenge is upheld, the money
            will be taken from your account and refunded to the consumer. You'll also be charged £15 if this goes ahead.						
         </p>
         <h3 class="">							            Interchange Fees						</h3>
         <p class="">							            <b>Interchange Fees</b>, like <b>PCI Compliance</b> are mandatory when it comes to Merchant Accounts. These are paid by
            the merchant's bank to the customers and forms a discount rate, charged by your merchant account provider
            . Riveting stuff we know.
            <br><br>
            One thing to note however, is that these are <b>Non-negotiable capped rates</b>, so if you're provider quotes
            you anything other than 0.2% of the credit card transaction and 0.3% of debit cards, Commercial Expert
            recommends that you look elsewhere.						
         </p>
      </div>
      <div class="">
         <h2 class="">How Do I Get A Merchant Account?						</h2>
         <p class="">Hopefully that's answered most of the questions that you may have regarding <b>Merchant Accounts</b>. Now
            the last one you may have, is "How do I get one?" The process couldn't be any simpler, all you have to
            do is click the "<a href="{{url('start-quote')}}">Start FREE QUOTE</a>" button and you can start comparing quotes in seconds. This is an absolutely
            free service and there's no obligation to buy, so click the button, follow the prompts and get comparing now.						
         </p>
      </div>
      <div class="pageButtonWrapper">											
         <a href="{{url('start-quote')}}" class="pageButton pulse"> FREE QUOTE</a>
      </div>
      </div>
</div>
      

      @endsection