<style>
        #hero1{
        background: url("<?php echo base_url(); ?>/public/assets/img/companyProfile.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        }
        table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f1f8ff;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
.table_btn{
  border: 1px solid;
  padding: 7px;
  border-radius: 20px;
  background-color: #0a558c;
  color: #fff;
}
.table_btn:hover{
  background-color: #fff;
  color: #0a558c;

}
.read_btn{
  background-color: #fff;
  color: #1c3863;
  border-radius: 50px;
  padding: 3px 15px 5px 15px;
  border: 1px solid #1c3863;
}
.read_btn:hover{
  color: #1c3863;
}

.accordion-list ul li:before {
  content: '✓';
  padding-right: 10px;
}
   </style> 
   
    <section id="hero1" class="d-flex justify-cntent-center align-items-center">
        <div id="hero1Carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel"><br/><br/><br/><br/>
            <h1 class="logo" style="text-align: center; color:#fff;">
            Account Types
            </h1>
        </div>
    </section>


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

      
        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Micro Account</h3>
              <ul>
                <li>The minimum deposit is $100</li>
                <li>Flexible leverage up to 1:500</li>
                <li>The Minimum trade volume is 0.01</li>
                <li>The stop out level is 40%</li>
                <li>The Margin call is of 110%</li>
                <li>Dedicated Support 24/5</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo base_url("Account_Types")?>/#acnt_comparison" class="read_btn">Read More</a>
                <a href="<?php echo base_url("enquiry");?>" class="btn-buy" style="padding: 5px 15px 5px 15px;">Open Account</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Premium</h3>
              <ul>
                <li>The minimum deposit is $500</li>
                <li>Flexible leverage up to 1:200</li>
                <li>The Minimum trade volume is 0.01</li>
                <li>The stop out level is 40%</li>
                <li>The Margin call is of 110%</li>
                <li>Dedicated Support 24/5</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo base_url("Account_Types")?>/#acnt_comparison" class="read_btn">Read More</a>
                <a href="<?php echo base_url("enquiry");?>" class="btn-buy" style="padding: 5px 15px 5px 15px;">Open Account</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>ECN Classic</h3>
              <ul>
                <li>The minimum deposit is $1,000</li>
                <li>Flexible leverage up to 1:200</li>
                <li>The Minimum trade volume is 0.10</li>
                <li>The stop out level is 70%</li>
                <li>The Margin call is of 110%</li>
                <li>Dedicated Support 24/5</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo base_url("Account_Types")?>/#acnt_comparison" class="read_btn">Read More</a>
                <a href="<?php echo base_url("enquiry");?>" class="btn-buy" style="padding: 5px 15px 5px 15px;">Open Account</a>
              </div>
            </div>
          </div>
        </div><br/><br/>
        <div class="row">
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box featured">
              <!-- <span class="advanced">VIP</span> -->
              <h3>ECN Elite</h3>
              <!-- <h4><sup>$</sup>49<span> / month</span></h4> -->
              <ul>
                <li>The minimum deposit is $10,000</li>
                <li>Flexible leverage up to 1:100</li>
                <li>The Minimum trade volume is 1.0</li>
                <li>The stop out level is 70%</li>
                <li>The Margin call is of 110%</li>
                <li>Dedicated Support 24/7</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo base_url("Account_Types")?>/#acnt_comparison" class="read_btn">Read More</a>
                <a href="<?php echo base_url("enquiry");?>" class="btn-buy" style="padding: 5px 15px 5px 15px;">Open Account</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box featured">
              <!-- <span class="advanced">VIP</span> -->
              <h3>VIP</h3>
              <!-- <h4><sup>$</sup>49<span> / month</span></h4> -->
              <ul>
                <li>The minimum deposit is $50,000</li>
                <li>Flexible leverage up to 1:100</li>
                <li>The Minimum trade volume is 1.0</li>
                <li>The stop out level is 70%</li>
                <li>The Margin call is of 110%</li>
                <li>Personal Account manager 24/7</li>
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo base_url("Account_Types")?>/#acnt_comparison" class="read_btn">Read More</a>
                <a href="<?php echo base_url("enquiry");?>" class="btn-buy" style="padding: 5px 15px 5px 15px;">Open Account</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    <section id="acnt_comparison" class="team section-bg">
      <div class="container" data-aos="fade-up">
          <h1 class="logo" style="text-align: center; color:#111;">
            Account Comparison
          </h1>
          <p style="text-align: center;">Click on the accounts above so you can compare them.</p>
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="member-info">
              <table>
                <thead>
                    <tr>
                    <th scope="col">Account Types</th>
                    <th scope="col">Micro</th>
                    <th scope="col">Premium</th>
                    <th scope="col">ECN Classic</th>
                    <th scope="col">ECN Elite</th>
                    <th scope="col">VIP</th>
                    </tr>
                </thead>
                
                <tbody>
                        <tr>
                            <td><b>Minium Deposit</b></td>
                            <td>$100</td>
                            <td>$500</td>
                            <td>$1000</td>
                            <td>$10000</td>
                            <td>$50000</td>
                        </tr>
                        <tr>
                            <td><b>Spread</b></td>
                            <td>1.5</td>
                            <td>1.3</td>
                            <td>0.0-0.3</td>
                            <td>0.0-0.3</td>
                            <td>0.0-0.3</td>
                        </tr>
                        <tr>
                            <td><b>Leverage</b></td>
                            <td>1 - 500</td>
                            <td>1 - 300</td>
                            <td>1 - 200</td>
                            <td>1 - 100</td>
                            <td>1 - 100</td>
                        </tr>
                      
                        <tr>
                            <td><b>Minimum Lot size</b></td>
                            <td>0.01</td>
                            <td>0.01</td>
                            <td>0.1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><b>Stop Out Level</b></td>
                            <td>40%</td>
                            <td>40%</td>
                            <td>70%</td>
                            <td>70%</td>
                            <td>70%</td>
                        </tr>
                       
                        <tr>
                            <td><b>Margin Call</b></td>
                            <td>110%</td>
                            <td>110%</td>
                            <td>110%</td>
                            <td>110%</td>
                            <td>110%</td>
                        </tr>
                        <tr>
                            <td><b>Max Orders</b></td>
                            <td>500</td>
                            <td>300</td>
                            <td>300</td>
                            <td>500</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td><b>Account Manager</b></td>
                            <td>24/5</td>
                            <td>24/5</td>
                            <td>24/5</td>
                            <td>24/5</td>
                            <td>24/5</td>
                        </tr>
                        
                        <tr>
                            <td><b>Commission</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td>$10</td>
                            <td>$7</td>
                            <td>$2</td>
                        </tr>
                        <tr>
                            <td><b>Swap</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                          </tr>
                        <tr>
                            <td><b>Free Signals</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                        <tr>
                            <td><b>Hedging</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                        <tr>
                            <td><b>Scalping</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                        <tr>
                            <td><b>EA’s</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                        <tr>
                            <td><b>Fifth Decimal</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                         <tr>
                            <td><b>Market Execution</b></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/close.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                            <td><img src="<?php echo base_url(); ?>/public/assets/img/icon/check.png"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="<?php echo base_url("enquiry");?>" class="table_btn">Open Account</a></td>
                            <td><a href="<?php echo base_url("enquiry");?>" class="table_btn">Open Account</a></td>
                            <td><a href="<?php echo base_url("enquiry");?>" class="table_btn">Open Account</a></td>
                            <td><a href="<?php echo base_url("enquiry");?>" class="table_btn">Open Account</a></td>
                            <td><a href="<?php echo base_url("enquiry");?>" class="table_btn">Open Account</a></td>
                        </tr>
                      </tbody>
                </table>
              </div>
            </div>
          </div>

          

          
        </div>

      </div>
    </section>
    <section id="why-us" class="why-us">
      <div class="container-fluid"><br/><br/>
      <br/>
      <br/>


        <div class="row">

          
          <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3> <strong>Not ready to start Live trading yet?</strong></h3>
              <p>Then try our Free Demo Account</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                No investment needed
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                Real time conditions
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                Free Strategy Tester
                </li>

              </ul>
              <a href="<?php echo base_url("enquiry");?>" class="read_btn" style="width: 150px;padding-right: 0px;">Open Account</a>
              
            </div>

          </div>
          <!-- <div class="col-lg-5 align-items-stretch position-relative video-box" data-aos="fade-right">
              <a><img src="<//?php echo base_url(); ?>/public/assets/img/Home/Asset.png" class="img-fluid" alt=""></a>
          </div> -->

        </div>
          
      </div>
    </section>
    