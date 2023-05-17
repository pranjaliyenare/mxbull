<style>
        #hero1{
        background: url("<?php echo base_url(); ?>/public/assets/img/companyProfile.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        }
        .read_btn{
          background-color: #fff;
          color: #1c3863;
          border-radius: 50px;
          padding: 3px 15px 5px 15px;
          border: 1px solid #1c3863;
        }
   </style> 
   
    <section id="hero1" class="d-flex justify-cntent-center align-items-center">
        <div id="hero1Carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel"><br/><br/><br/><br/>
            <h1 class="logo" style="text-align: center; color:#fff;">
                Inquiry Form
            </h1>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="<?php echo base_url("enquiry_message"); ?>" method="POST"  style="margin-left: 10%;width: 80%;">
                <?php 
                    // Display Response
                    if(session()->has('message'))
                    {
                      ?>
                          <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                          <?= session()->getFlashdata('message') ?>
                          </div>
                      <?php
                    }
                  ?>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              </div><br/>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="cust_email" id="cust_email" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required>
                </div>
              </div>
                <br/>
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="city" class="form-control" id="city" placeholder="Your City" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="state" id="state" placeholder="Your State" required>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" name="country" class="form-control" id="country" placeholder="Your Country" required>
                </div>
              </div>

              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="addr" id="addr" placeholder="Address" required>
              </div> -->
              <div class="form-group mt-3">
                <textarea class="form-control" name="comment" rows="5" id="comment" placeholder="Comment" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center" style="margin-top: 20px;"><button class="read_btn" type="submit">Submit</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->