<style>
.trade{
  padding: 6px 24px 8px 24px;
  border-radius: 50px;
  background: #cf1a0c;
  color: #fff;
}
.trade:hover{
  background: #308306;
}
/* .navbar .dropdown ul a:active{
  color: #8bc34a;
} */
  </style>

<body>

<!-- ======= Top Bar ======= -->
<!-- <div id="topbar" class="fixed-top d-flex align-items-center ">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
      <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
    </div>
    <div class="cta d-none d-md-block">
      <a href="#about" class="scrollto">Trade Now</a>
    </div>
  </div>
</div> -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo">
        <a href="<?php echo base_url();?>">
    <img src="<?php echo base_url(); ?>/public/assets/img/logo/logo.png" alt="" class="img-fluid" style="height: 5rem;"></a>
    </h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href=index.html" class="logo"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto <?php if($page == 'index') {echo 'active'; } ?>" href="<?php echo base_url(); ?>">Home</a></li>
        <li class="dropdown "><a class="<?php if($page == 'company_profile' || $page == 'contactUs') { echo 'active';} ?>" href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a  href="<?php echo base_url("company_profile"); ?>">Company Profile</a></li>
            <li><a href="<?php echo base_url("contactUs"); ?>">Contact Us</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="<?php if($page == 'MT5Desktop' || $page == 'MT5Mobile' || $page == 'webTrader' || $page == 'depositWithdrawals' || $page == 'Account_Types') { echo 'active';} ?>" href="#"><span>Trading</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url("MT5Desktop"); ?>">MT5 Desktop</a></li>
            <li><a href="<?php echo base_url("MT5Mobile"); ?>">MT5 Mobile</a></li>
            <li><a href="<?php echo base_url("webTrader"); ?>">Web Trader</a></li>
            <li><a href="<?php echo base_url("depositWithdrawals"); ?>">Deposit & Withdrawals</a></li>
            <li><a href="<?php echo base_url("Account_Types"); ?>">Account Types</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class=" <?php if($page == 'forex' || $page == 'indices' || $page == 'commodity' || $page == 'stocks' || $page == 'metals' || $page == 'exchangeFuture') { echo 'active';} ?>" href="#"><span>Markets</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo base_url("forex"); ?>">Forex</a></li>
            <li><a href="<?php echo base_url("indices"); ?>">Indices</a></li>
            <li><a href="<?php echo base_url("commodity"); ?>">Commodities Energy</a></li>
            <li><a href="<?php echo base_url("stocks"); ?>">Stocks</a></li>
            <li><a href="<?php echo base_url("metals"); ?>">Metals</a></li>
            <li><a href="<?php echo base_url("exchangeFuture"); ?>">Exchange Futures</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class=" <?php if($page == 'economic_calender') { echo 'active';} ?>" href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Learning Booklet</a></li>
            <li><a href="<?php echo base_url("economic_calender"); ?>">Economic Calender</a></li>
          </ul>
        </li>
        &nbsp;&nbsp;
        <!-- <li class="dropdown"><a href="#"><span>Contact</span></a> -->
          <!-- <ul>
            <li><a href="#">Market News</a></li>
            <li><a href="#">Economic Calendar</a></li>
            <li><a href="#">Trading FAQ</a></li>
          </ul> -->
        <!-- </li> -->
        <!-- <btn href="#about" class="scrollto">Trade Now</btn> -->
        <a href="<?php echo base_url("enquiry"); ?>" class="trade" target="_blank" style="padding: 6px 24px 8px 24px;">Register</a>
        
      </ul>
        

      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
