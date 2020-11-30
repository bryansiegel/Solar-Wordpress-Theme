<?php

/**
 * Template Name: Commercial Solar
 *
 *
 * @package WordPress

 * @since 1.0.0
 */

?>

<?php echo get_template_part('partials/head'); ?>
</head>
<body>

  <!-- navigation -->
  <?php echo get_template_part('partials/nav'); ?>
  <!-- end navigation -->

  <main role="main" class="page-header">
    <section>
      <?php echo get_template_part('partials/forms/collapse_form'); ?>
    </section>

    <!-- header -->
    <section class="lazy" style="background:linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url('<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/commercial-solar.jpg');background-size:cover;">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-sm-6 text-md-left">
            <h1 class="text-white">Commercial Solar Energy System Solutions</h1>
            <h2 class="text-white">A solar system that revolves around your business</h2>
            <p class="text-white">We custom-design a Sungevity Energy System to meet your specific power needs now and into the future. It’s just a brighter way to do energy.</p>
            <p>
              <a class="btn btn-large btn-orange" href="" title="">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
          <div class="col-sm-6"></div>
        </div>
      </div>
    </section>
    <!-- end header -->

    <section class="content-visibility">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-sm-7 text-center text-lg-left">
            <h2>Invest in your solar system for your business, not your utility</h2>
            <p>If your business spends more than $500 a month on electricity, going solar with Sungevity could pay serious dividends. You’ll get more control over your energy expenses and protection against unpredictable utility rate hikes, which could lead to increasing electricity savings over 20 years. Plus, you could potentially gain significant tax benefits.*</p>
          </div>
          <div class="col-sm-5 pt-3  text-center text-lg-left">
            <div>
              <h5 class="font-weight-bold">Contact Us</h5> 
              <a href="mailto:commercial@sungevity.com?subject=I%27d%20like%20to%20learn%20more%20about%20going%20solar%20for%20my%20Business%21" class="text-dark">commercial@sungevity.com</a>
              <br>
              <a class="text-dark" href="tel:+18447864249">844-816-1709 (Toll-free)</a>
            </div>
          </div>    
        </div>
      </div>
    </section>


    <section class="grey-top-border content-visibility">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-md-center">
          <div class="col-lg-8 pt-5 pb-5 mt-5 mb-5 text-center">
            <h2>Commercial Solar PPA, Leasing and Purchasing Options</h2>
            <h3>Your business can bank on sunshine</h3>
            <p >We’ll work with you to maximize your potential cost savings, including finding the right financing option for you.** From purchasing your system, to lease and Power Purchase Agreement (PPA) options as low as zero down, we have a range of choices to meet your needs.***</p>
            <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
            &nbsp; Get A Free Solar Quote</a>
          </div>  
        </div>
      </div>
    </section>

    <section class="lazy solar-panel-background content-visibility" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/solar-panel-background.jpg">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-md-center">
          <div class="col-lg-8 pt-5 pb-5 mt-5 mb-5 text-center">
            <h2>Our mission is to make the process easy</h2>
            <p>It only takes a quick conversation with one of our Commercial Solar Consultants to determine if solar is a viable option for your business.</p>
            <p>
              <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
              &nbsp;Get A Free Solar Quote</a>
            </p>
          </div>
        </div>
      </div>  
    </section>

    <section class="content-visibility">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="pt-5 pb-2">Our customers know we mean business</h3>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/commercial-solar-customer.jpg" class="img-fluid" loading="lazy" />
            <div class="lazy" style="background-size:contain; background-position: center;background-repeat:no-repeat;" data-src="img/backgrounds/testimonial-background.png">
              <p class="text-center pt-5" style="font-size: 1.75em;">
                “The installation was excellent. The crew was very mindful of the hours that we worked. They were willing to come at night so as not to interrupt business. Everything went smoothly.”
              </p>
              <small class="text-center">Patrick Hyde, Owner, Hyde Printing, Concord, CA</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section class="content-visibility">
      <div class="container">
        <div class="row pt-5 mt-5">
          <div class="col-md-3"></div>
          <div class="col-lg-5">
            <h3 class="text-center text-lg-left">Find out how much your business could save.</h3>
            <p>We’ll help you decide if solar is right for your business and provide you a customized quote, without cutting into your time for a site visit.</p>
            <p>We stand by our systems. When you purchase a Sungevity Energy System for your business, you system is guaranteed to perform as promised for 20 years.</p>
            <p>*=Required</p>

            <!-- form -->
            <div class="column center-me leadform-container">
              <div style="position:relative;">
                <!-- commercial embed -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-centered">
                      <form method="post" action="/business/sungevity-for-business/" id="leadquote" class="form-horizontal sungevity-quote-form" role="form" data-fv-framework="bootstrap" data-fv-icon-valid="glyphicon glyphicon-ok" data-fv-icon-invalid="glyphicon glyphicon-remove" data-fv-icon-validating="glyphicon glyphicon-refresh" autocomplete="off" _lpchecked="1">


                        <input type="hidden" id="utm_campaign" name="utm_campaign" value="">
                        <input type="hidden" id="utm_content" name="utm_content" value="">
                        <input type="hidden" id="utm_source" name="utm_source" value="">

                        <input type="hidden" id="referral_url" name="referral_url" value="https://sungevity.com/business/sungevity-for-business/">

                        <div class="">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name*" data-fv-notempty="true" data-fv-notempty-message="First name is required" tabindex="1" required="" oninvalid="this.setCustomValidity('First Name Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="businessName" placeholder="Business Name" tabindex="3">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name*" data-fv-notempty="true" data-fv-notempty-message="Last name is required" tabindex="2" required="" oninvalid="this.setCustomValidity('Last Name Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Position within Company" tabindex="4">
                              </div>
                            </div>
                          </div>
                          <!-- end row 1 -->
                          <!-- center -->
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input type="text" class="form-control" name="street_address" placeholder="Business Address*" data-fv-notempty="true" data-fv-notempty-message="Business address is required" tabindex="4" require="" oninvalid="this.setCustomValidity('Business address Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City*" data-fv-notempty="true" data-fv-notempty-message="City is required" tabindex="5" required="" oninvalid="this.setCustomValidity('City Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <!-- end center -->
                          <!-- row 3 -->
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <select id="input-state" class="form-control" name="state" data-fv-notempty="true" data-fv-notempty-message="State is required" placeholder="State" tabindex="6" required="" oninvalid="this.setCustomValidity('State Is Required')" oninput="this.setCustomValidity('')">
                                  <option value="">Select a State</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DC">District of Columbia
                                  </option>
                                  <option value="DE">Delaware</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY">Wyoming</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input id="input-postalcode" type="text" class="form-control" name="postal_code" placeholder="Zip Code*" data-fv-notempty="true" data-fv-notempty-message="Zip Code is required" tabindex="7" required="" oninvalid="this.setCustomValidity('Zip Code Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <!-- end row 3 -->
                          <!-- row 4 -->
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input type="text" class="form-control" name="phone_1" placeholder="Phone*" data-fv-notempty="true" data-fv-notempty-message="Phone Number is required" tabindex="8" required="" oninvalid="this.setCustomValidity('Phone Number Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email*" data-fv-notempty="true" data-fv-notempty-message="Email is required" tabindex="9" required="" oninvalid="this.setCustomValidity('Email Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <!-- end row 4 -->
                          <!-- row 5 -->
                          <div class="row">
                            <div class="col-sm-6">
                              <label for="own" class="">Do
                                you own the building your business is in or know
                                the
                              owner?</label>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <select id="home_owner" name="home_owner" class="form-control" size="1" tabindex="10" data-type="" required="" oninvalid="this.setCustomValidity('Homeowner Is Required')" oninput="this.setCustomValidity('')">
                                  <option value="">Please Select</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- end row 5 -->
                          <!-- row 6 -->
                          <div class="row">
                            <div class="col-sm-6">
                              <label for="businessElectricityCostsMonthly" class="form-block half">
                                About how much does your business spend on
                                energy each
                              month?</label>
                            </div>
                            <div class="col-sm-6">
                              <select id="businessElectricityCostsMonthly" name="businessElectricityCostsMonthly" class="form-control" size="1" tabindex="12" data-type="">
                                <option value="">Please Select</option>
                                <option value="$500">$500</option>
                                <option value="$500-$1,000">$500-$1,000</option>
                                <option value="$1,000 to $5,000">$1,000 to
                                  $5,000
                                </option>
                                <option value="$5,000+">$5,000+</option>
                              </select>
                            </div>
                          </div>
                          <!-- end row 6 -->
                          <!-- row 7 -->
                          <div class="row">
                            <div class="col-sm-12">
                              <label for="referral_code" class="">Referral Code</label>
                              <input id="referral_code" type="text" name="referral_code" class="form-input" alt="" maxlength="35" tabindex="13" data-type="referralcode">
                            </div>
                          </div>
                          <!-- end row 7 -->
                          <div class="row">
                            <div class="col-sm-12 pt-3 m-0">
                              <div class="form-group">
                                <button type="submit" id="leadquote-submit" class="btn btn-lg btn-orange" name="signup" value="Sign up" tabindex="14">Submit</button>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 pb-5">
                              <small>
                                By clicking "Submit" you authorize Solar
                                Spectrum and
                                Horizon Solar Power to use automated technology
                                to call
                                you at the telephone number provided, even if it
                                is a
                                wireless number and even if you have previously
                                registered with a Do Not Call list or requested
                                that we
                                not contact you. This authorization is not
                                required to
                                make a purchase, and you may contact us to
                                revoke it at
                                any time.
                              </small>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end form -->
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </section>

  </main><!--end main-->

  <!-- mobile Modal -->
  <?php echo get_template_part('partials/forms/mobileModal'); ?>

  <!-- Full Screen Modal -->
  <?php echo get_template_part('partials/forms/fullscreenModal'); ?>
  
</div>


<?php echo get_template_part('partials/footer'); ?>