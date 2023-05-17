<style>
.stepwizard-step p {
    margin-top: 10px;    
}

.process-row {
    display: table-row;
}

.process {
    display: table;     
    width: 100%;
    position: relative;
}

.process-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.process-row:before {
    top: 50px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.process-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.process-step p {
    margin-top:10px;
    
}

.btn-circle {
  width: 100px;
  height: 100px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
  </style>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MX Bull International</span></h2>
          <p class="animate__animated animate__fadeInUp">Your trading journey is in safe hands!<br/><br/> Trade with MX Bull International, your trusted broker.</p>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Trading</a>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Try Free Demo</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Fully Equipped Broker</h2>
          <p class="animate__animated animate__fadeInUp">Open a free stock investing account with<br/><br/> MX Bull International and set yourself free of commission.</p>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Trading</a>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Try Free Demo</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Join a world-recognized Forex Broker</h2>
          <p class="animate__animated animate__fadeInUp">Trade with Confidence and benefit from<br/><br/> an award-winning platform within 2 minutes!</p>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Trading</a>
          <a href="<?php echo base_url("enquiry")?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Try Free Demo</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container" style="    transform: none;">
      <p>
        <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=in#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22localhost%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D" style="box-sizing: border-box; height: 40px; width: 100%; "></iframe>
      </p>
        <div class="row" >
          <div class="col-md-6 col-lg-1 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
           


          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/forex1.png" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">Forex</a></h4>
              <p class="description">Be a part of FOREX market trading with a market size worth US $ 702 Billion.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/metal.png" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">Metals</a></h4>
              <p class="description">Trade CFDs on Spot Metals and unmask new trading opportunities</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/indices.png" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">Indices</a></h4>
              <p class="description">Trade CFDs on popular Indices from across all the region</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/energies.png" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">Energies</a></h4>
              <p class="description">Trade CFDs on Spot Energies such as Brent oil, WTI and Natural Gas and Diversify your portfolio</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/stocks.png" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">Stocks</a></h4>
              <p class="description">Trade thousands of international stocks from one single interface</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            

          
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trade A Wide Selection Of Financial Assets</h2>  
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>MX Bull International offers CFD trading on a wide range of different financial assets with the lowest spreads and no commissions. Choose from over 500+ financial instruments, from five different asset classes: Forex, Stocks, Indices, Energies and Precious Metals; All available on both MT4 and MT5 platforms.</p>
            <a href="<?php echo base_url("company_profile");?>" class="btn-learn-more">Learn More</a>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          <img src="<?php echo base_url(); ?>/public/assets/img/Home/png.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
 
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
            <h3 style="color: #054a85;"><b>MX Bull International Accounts are essentially made to please our customers</b></h3>
        </div>

        <div class="row" >
          <div class="col-md-6 col-lg-1 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/accountFunding.png" class="img-fluid" alt=""></div><br/>
              <h5 class="title"><a style="color:#3f2400;">Account Funding</a></h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/customer-service.png" class="img-fluid" alt=""></div><br/>
              <h5 class="title"><a style="color:#3f2400;">Customer Support</a></h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/tradingAcademy.png" class="img-fluid" alt=""></div><br/>
              <h5 class="title"><a style="color:#3f2400;">Trading Academy</a></h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/accountComparission.png" class="img-fluid" alt=""></div><br/>
              <h5 class="title"><a style="color:#3f2400;">Accounts Comparison</a></h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/withdrawal.png" class="img-fluid" alt=""></div><br/>
              <h5 class="title"><a style="color:#3f2400;">Withdrawal</a></h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
       <div class="section-title">
          <h2 style="color:#ffffff;">One Masterkey To Unlock Numerous Opportunities</h2>
        </div>
      <div class="row" >
          <div class="col-md-6 col-lg-1 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <h4 class="title"><a href="<?php echo base_url("forex"); ?>" style="color:#ffffff;">Forex</a></h4><br/>
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/forex.png" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
              <h4 class="title"><a href="<?php echo base_url("metals"); ?>" style="color:#ffffff;">Metals</a></h4><br/>
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/metals.png" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
             <h4 class="title"><a href="<?php echo base_url("indices"); ?>" style="color:#ffffff;">Indices</a></h4><br/>
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/indices1.png" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
             <h4 class="title"><a href="<?php echo base_url("commodity"); ?>" style="color:#ffffff;">Energies</a></h4><br/>
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/energies1.png" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="padding: 10px 10px;text-align: center;">
             <h4 class="title"><a href="<?php echo base_url("stocks"); ?>"style="color:#ffffff;">Stocks</a></h4><br/>
              <div class="icon"><img src="<?php echo base_url(); ?>/public/assets/img/icon/stock.png" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          </div>

        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up" style="transform: none;">

        <div class="section-title">
          <h2>Compliment your trading with our exclusive tools</h2>
          <p>MX Bull International | Trade Forex, Commodities and Indices Sign up to MX Bull International and be part of a growing trading family from the four corners of the planet.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div><img src="<?php echo base_url(); ?>/public/assets/img/icon/EcomomicEarningsCalendars.png" class="img-fluid" alt=""></div>
              <div class="member-info" style="margin-top: 5%;">
              <span><h4>Ecomomic & Earnings Calendars</h4></span>
                <!-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> -->
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div><img src="<?php echo base_url(); ?>/public/assets/img/icon/Webinars.png" class="img-fluid" alt=""></div>
              <div class="member-info" style="margin-top: 5%;">
              <span><h4>Webinars</h4></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div><img src="<?php echo base_url(); ?>/public/assets/img/icon/DailyMarketnews.png" class="img-fluid" alt=""></div>
              <div class="member-info" style="margin-top: 5%;">
              <span><h4>Daily Market News</h4></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div><img src="<?php echo base_url(); ?>/public/assets/img/icon/EducationalResources.png" class="img-fluid" alt=""></div>
              <div class="member-info" style="margin-top: 5%;">
              <span><h4>Educational Resources</h4></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div><img src="<?php echo base_url(); ?>/public/assets/img/icon/AccuindexVPSandmore!.png" class="img-fluid" alt=""></div>
              <div class="member-info" style="margin-top: 5%;">
              <span><h4>MX Bull International VPS and more!</h4></span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> 

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="section-title">
          <h2 style="color: #ffffff;">Getting started is easy</h2>
        </div>
        <div class="process">
            <div class="process-row">
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #dc1d1d"><h2 style="color: #ffffff;">1</h2></button>
                    <p>Choose an account tier and submit your application</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #ff9800;"><h2 style="color: #ffffff;">2</h2></button>
                    <p>Add funds quickly and securely via debit card or bank transfer</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-success btn-circle" disabled="disabled"><h2>3</h2></button>
                    <p>Access 4,000+ instruments across all asset classes</p>
                </div> 
                
            </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid"><br/><br/>
      <br/>
      <br/>


        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box" data-aos="fade-right">
              <a><img src="<?php echo base_url(); ?>/public/assets/img/Home/mobile1.png" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3> <strong>A Platform for Today’s Traders</strong></h3><br/><br/>
              <p>MX Bull International upholds a collection of trading platforms. easy and comfortable to use. Available for IOS, Android, macOS, and Windows devices.</p>
            </div><br/><br/>
            <div>
            <!-- <a target="_blank" rel="noreferrer" href="https://mobile.mqstore.net/files/metatrader5.apk" class="mx-2 mx-sm-4">
              <img src="<//?php echo base_url();?>/public/assets/img/icon/1mt5.png" alt="Accuindex Platform Traders">
            </a> -->
            <a target="_blank" rel="noreferrer" href="https://mobile.mqstore.net/files/metatrader5.apk" class="mx-2 mx-sm-4">
              <img src="<?php echo base_url();?>/public/assets/img/icon/android1.png" alt="Accuindex Platform Traders">
            </a>
            <a target="_blank" rel="noreferrer" href="https://download.mql5.com/cdn/mobile/mt5/ios?hl=en&utm_source=www.metatrader5.com&utm_campaign=install.metaquotes" class="mx-2 mx-sm-4">
              <img src="<?php echo base_url();?>/public/assets/img/icon/apple 1.png" alt="Accuindex Platform Traders" >
            </a>
            <a target="_blank" rel="noreferrer" href=" https://download.mql5.com/cdn/web/metaquotes.software.corp/mt5/mt5setup.exe" class="mx-2 mx-sm-4">
              <img src="<?php echo base_url();?>/public/assets/img/icon/windows.png" alt="Accuindex Platform Traders">
            </a>
            <a target="_blank" rel="noreferrer" href=" https://download.mql5.com/cdn/web/metaquotes.software.corp/mt5/MetaTrader5.dmg" class="mx-2 mx-sm-4">
              <img src="<?php echo base_url();?>/public/assets/img/icon/macos.png" alt="Accuindex Platform Traders">
            </a>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding: 40px 0;">
      <div class="container">
        <div class="section-title">
          <h2 style="color: #ffffff;">MX Bull International Tools</h2>
        </div>
        <div class="row" data-aos="zoom-in" style="text-align:center;">
          
       
              <div class="py-5 position-relative row" style="z-index: 5;">
                  <div class="col-lg-3 col-md-6 col-6"><a class="text-decoration-none cursor-pointer">
                    <div class="item"><img src="<?php echo base_url();?>/public/assets/img/icon/desktopTradingPlatform.png" alt="Accuindex Platform Traders" class="img-fluid"><br/><br/>
                    <h6 style="color:#fff;">Desktop trading <br> platform</h6>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <a class="text-decoration-none cursor-pointer">
                  <div class="item"><img src="<?php echo base_url();?>/public/assets/img/icon/mobileTradingApp.png" alt="Accuindex Platform Traders" class="img-fluid"><br/><br/>
                  <h6 style="color:#fff;">Mobile Trading <br> APPS</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
              <a class="text-decoration-none cursor-pointer">
                <div class="item"><img src="<?php echo base_url();?>/public/assets/img/icon/webTradingPlatform.png" alt="Accuindex Platform Traders" class="img-fluid"><br/><br/>
                <h6 style="color:#fff;">Web Trading <br> Platform</h6>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <a class="text-decoration-none cursor-pointer">
              <div class="item">
                <img src="<?php echo base_url();?>/public/assets/img/icon/clientPortal.png" alt="Accuindex Platform Traders" class="img-fluid"><br/><br/>
                <h6 style="color:#fff;"> Client Portal</h6>
              </div>
            </a>
          </div>
        </div>
</div>
      </div>
    </section><!-- End Cta Section -->

    
    <section id="why-us" class="why-us">
      <div class="container-fluid"><br/><br/>
      <br/>
      <br/>


        <div class="row">

          
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3> <strong>Quickly transfer funds to and from your MX Bull International trading account</strong></h3>
              <p>MX Bull International clients around the world can now enjoy the flexibility and convenience that comes with our newly introduced AccuPay Mastercard.</p>
            </div>

            <div class="accordion-list">
              <ol>
                <li data-aos="fade-up" data-aos-delay="100">
                Directly linked to your Accuindex trading account.
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                Secure Online and Offline transactions.
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                Withdraw your trading profits via ATMs globally.
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                Online client support.
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                A dedicated mobile app to manage your deposits and withdrawals with ease.(Get the app).
                </li>

              </ol>
            </div>

          </div>
          <div class="col-lg-5 align-items-stretch position-relative video-box" data-aos="fade-right">
              <a><img src="<?php echo base_url(); ?>/public/assets/img/Home/Asset.png" class="img-fluid" alt=""></a>
          </div>

        </div>

      </div>
    </section>
    

  </main><!-- End #main -->

  