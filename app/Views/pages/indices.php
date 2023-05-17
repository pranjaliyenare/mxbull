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
            Indices
            </h1>
        </div>
    </section>



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Standard</h4>
                <p>Open an MX Bull International Trading Account</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Pro</h4>
                <p>Open an MX Bull International Trading Account</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Raw</h4>
                <p>Open an MX Bull International Trading Account</p>
               </div>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="member-info">
              <table>
                <thead>
                    <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Margin Per System Lot</th>
                    <th scope="col">Average Spread</th>
                    <th scope="col">Trading Hours & Timing = GMT + 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td data-label="Product">AUD/CAD</td>
                    <td data-label="Margin Per System Lot">From 0.2%</td>
                    <td data-label="Average Spread">2.2</td>
                    <td data-label="Trading Hours & Timing = GMT + 2">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Account">AUD/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Account">AUD/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">AUD/NZD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">AUD/USD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">CAD/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">CAD/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">CHF/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/AUD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/CAD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/GBP </td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/NZD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">EUR/USD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/AUD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/CAD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/NZD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">GBP/USD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">NZD/CAD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">NZD/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">NZD/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">NZD/USD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">USD/CAD</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">USD/CHF</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    <tr>
                    <td scope="row" data-label="Acount">USD/JPY</td>
                    <td data-label="Due Date">From 0.2%</td>
                    <td data-label="Amount">2.2</td>
                    <td data-label="Period">Monday 00:00 - Friday 24:00</td>
                    </tr>
                    
                </tbody>
                </table>
              </div>
            </div>
          </div>

          

          
        </div>

      </div>
    </section>

    