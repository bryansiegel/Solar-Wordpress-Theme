<div class="modal fade right content-visibility" id="fullscreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
  <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
    <div class="modal-content-full-width modal-content ">
      <div class=" modal-header-full-width   modal-header text-center">
        <h5 class="modal-title w-100" id="exampleModalPreviewLabel"><a href=""><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"></a></h5>
            <!-- <button type="button" class="close " data-dismiss="modal" aria-label="Close">
              <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body" style="background-image:url('<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/sungevity-solar-installer.jpg');background-size:cover;">

            <div class="container">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-md-5">


                    <h2>Why Our Solar Company?</h2>
                    <p>The Sungevity Energy System is designed to meet your power needs today,
                      with the flexibility to adapt
                      as your needs change. If you're looking for a reliable solar energy system made custom for
                      your
                    existing and future needs Sungevity is the right choice.</p>
                    <p><b><i class="fa fa-check" aria-hidden="true" style="color:#f26322;"></i> We provide all the
                      details about the solar technology and financing options that work best for you, so you
                    can make an informed decision.</b></p>
                    <p><b><i class="fa fa-check" aria-hidden="true" style="color:#f26322;"></i> We take care of all
                      the details during the preparation and installation process, so you can
                    just sit back and relax.</b></p>
                    <p><b><i class="fa fa-check" aria-hidden="true" style="color:#f26322;"></i> Our easy-to-use app
                      provides real-time insights into your energy system, and our guarantee
                    ensures it will perform as promised for 20 years.</b></p>
                    <p> <a href="/about-us/company/?utm_content=homepage_video_why_us"  class="btn btn-orange"><i class="fa fa-question-circle-o" aria-hidden="true"></i> &nbsp;Why
                    Us</a></p>



                  </div>
                  <div class="col-md-5">
                    <div class="glass-container" style="border-radius:5px;padding-top:5px;">
                      <h2 class="text-center pt-3 pb-3">Get A Free Solar Quote</h2>
                      <form method="post" action="/free-solar-quote/?utm_content=homepage_video_header" id="leadquote" class="form-horizontal sungevity-quote-form" role="form" data-fv-framework="bootstrap" data-fv-icon-valid="glyphicon glyphicon-ok" data-fv-icon-invalid="glyphicon glyphicon-remove" data-fv-icon-validating="glyphicon glyphicon-refresh" autocomplete="off">

                        <input type="hidden" id="utm_campaign" name="utm_campaign" value="">
                        <input type="hidden" id="utm_content" name="utm_content" value="homepage_video_header">
                        <input type="hidden" id="utm_source" name="utm_source" value="">

                        <input type="hidden" id="referral_url" name="referral_url" value="https://sungevity.com/">

                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" data-fv-notempty="true" data-fv-notempty-message="First name is required" tabindex="1" required="" oninvalid="this.setCustomValidity('First Name Is Required')" oninput="this.setCustomValidity('')" >
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" data-fv-notempty="true" data-fv-notempty-message="Last name is required" tabindex="2" required="" oninvalid="this.setCustomValidity('Last Name Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input id="input-phone" type="text" class="form-control" name="phone_1" placeholder="Phone" data-fv-notempty="true" data-fv-notempty-message="Phone is required" tabindex="7" required="" oninvalid="this.setCustomValidity('Phone Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" data-fv-notempty="true" data-fv-emailaddress="true" data-fv-emailaddress-message="Enter a valid email address" tabindex="8" required="" oninvalid="this.setCustomValidity('Email Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="street_address" placeholder="Street Address" data-fv-notempty="true" data-fv-notempty-message="Street address is required" tabindex="3" required="" oninvalid="this.setCustomValidity('Street Address Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" data-fv-notempty="true" data-fv-notempty-message="City is required" tabindex="4" required="" oninvalid="this.setCustomValidity('City Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">

                              <div class="form-group">
                                <select id="input-state" class="form-control" name="state" data-fv-notempty="true" data-fv-notempty-message="State is required" placeholder="State" tabindex="5" required="" oninvalid="this.setCustomValidity('State Is Required')" oninput="this.setCustomValidity('')">
                                  <option value="">State</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DC">District of Columbia</option>
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
                                  <!-- <option value="NY">New York</option> -->
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
                                <input id="input-postalcode" type="text" class="form-control" name="postal_code" placeholder="Zip" data-fv-notempty="true" data-fv-notempty-message="Zip is required" tabindex="6" required="" oninvalid="this.setCustomValidity('Postal Code Is Required')" oninput="this.setCustomValidity('')">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group form-group-residential">
                                <select id="input-homeowner" class="form-control" name="home_owner" placeholder="Are you a homeowner?" data-fv-notempty="true" data-fv-notempty-message="Homeowner is required" tabindex="9" required="" oninvalid="this.setCustomValidity('Homeowner Is Required')" oninput="this.setCustomValidity('')">
                                  <option value="">Are you a homeowner?</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group form-group-residential">
                                <input type="text" class="form-control referral-code" id="referral-code" name="referral_code" placeholder="Referral Code" data-fv-notempty="false" tabindex="10">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <button type="submit" id="leadquote-submit" class="btn btn-lg btn-orange" name="signup" value="Sign up" tabindex="11">Submit</button>
                              </div>

                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <p class="form_disclaimer">By clicking "Submit" you authorize Sungevity to use
                      automated technology to call you at the telephone number provided, even if
                      it is a wireless number and even if you have previously registered with a Do
                      Not Call list or requested that we not contact you. This authorization is
                      not required to make a purchase, and you may contact us to revoke it at any
                    time.</p>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>