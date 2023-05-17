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




   </style> 
   
    <section id="hero1" class="d-flex justify-cntent-center align-items-center">
        <div id="hero1Carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel"><br/><br/><br/><br/>
            <h1 class="logo" style="text-align: center; color:#fff;">
            Futures Trading
            </h1>
        </div>
    </section>



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Quick Information</h2>
        </div>
        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <p><i class="bi bi-person me-2"></i><b>Min Deposit: </b>$250</p><br/>
                <p><i class="bi bi-calendar-check me-2"></i><b>Spreads From: </b>1 PIPS</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <p><i class="bi bi-tag me-2"></i><b>Min Income: </b>0.01 LOT</p><br/>
                <p><i class="bi bi-geo-alt me-2"></i><b>Leverage: </b> 1:400</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <p><i class="bi bi-clock me-2"></i><b>Execution Less Than: </b>0.1 SEC</p><br/>
                <p><i class="bi bi-briefcase me-2"></i><b>Spreads From: </b>Several Chennals</p>
               </div>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> Exchange Trade Features </h2>
          <p>Through our fully manned dealing desk clients have access to the main global exchanges providing access to currency, commodity and interest rate futures.</p><br/>
          <p>Futures contracts provide a highly liquid, versatile and cost effective tool for hedging your investment portfolio, contact our Dealing Desk for more information.</p>
        </div>

      
      </div>
    </section>

    