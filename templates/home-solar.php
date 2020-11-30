<?php

/**
 * Template Name: Home Solar
 *
 *
 * @package WordPress

 * @since 2.0.0
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
    <section class="sungevity-energy-system-background content-visibility">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="text-white pt-5 display-4"><?php the_field('home_solar_title'); ?></h1>
            <h2 class="text-white"><?php the_field('home_solar_description'); ?></h2>
          </div>
        </div>
        <div class="card-deck pt-5 pb-5">
          <div class="card card-shadow">
            <div class="card-body">
              <h3 class="card-title text-center"><?php the_field('home_solar_header_box_title_1'); ?></h3>
              <p class="card-text">We do not do cookie-cutter solar energy systems.</p>
            </div>
            <p class="card-footer text-center">
              <a class="btn btn-orange" href="" title="Solar Cash Purchasing Options">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
          <div class="card card-shadow">
            <div class="card-body">
              <h3 class="card-title text-center">Savings</h3>
              <p class="card-text">Watch your solar energy system save you money in real-time.</p>
            </div>
            <p class="card-footer text-center">
              <a class="btn btn-orange" href="" title="Solar Cash Purchasing Options">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
          <div class="card card-shadow">
            <div class="card-body">
              <h3 class="card-title text-center">Flexibility</h3>
              <p class="card-text">As your life evolves, your system can evolve with you.</p>
            </div>
            <p class="card-footer text-center">
              <a class="btn btn-orange" href="" title="Solar Cash Purchasing Options">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
          <div class="card card-shadow">
            <div class="card-body">
              <h3 class="card-title text-center">Reliability</h3>
              <p class="card-text">Watch your system work – for 20 years, guaranteed.</p>
            </div>
            <p class="card-footer text-center">
              <a class="btn btn-orange" href="" title="Solar Cash Purchasing Options">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
        </div>
      </section>
      <!-- end header -->

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-sm-7">
              <h2 class="pb-5 d-block text-center text-md-left">How Solar Energy Systems Work</h2>
              <h4 class="make-left"><span class="dark-circle make-left">1</span> Solar Panels</h4>
              <p class="dark-circle-p make-left">Your panels produce energy from sunlight.</p>
              <h4 class="make-left"><span class="dark-circle make-left">2</span> Appliances</h4>
              <p class="dark-circle-p make-left"> Running appliances use energy from your system.</p>
              <h4 class="make-left"><span class="dark-circle make-left">3</span> Inverter</h4>
              <p class="dark-circle-p make-left"> Converts solar energy from Direct Current (DC) to Alternating
              Current (AC) which powers your home.</p>
              <h4 class="make-left"><span class="dark-circle make-left">4</span> Main Service Panel on
              Meter</h4>
              <p class="dark-circle-p make-left"> The power from both your solar system and the utility meet in your Main service panel. If you produce more than your use, power goes back into the grid!
              </p>
              <h4 class="make-left"><span class="dark-circle make-left">5</span> The Grid</h4>
              <p class="dark-circle-p make-left"> Any excess solar energy you produce goes back to the grid when the sun isn't shining. You draw power from your utility</p>
              <p class="d-block text-center text-md-left">
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                &nbsp;Get A Free Solar Quote</a>
              </p>
            </div>
            <div class="col-sm-5 mt-5">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/solar-energy-system-diagram.jpg"  alt="How Solar Energy Systems Work" class="img-fluid" loading="lazy">
            </div>    
          </div>
        </div>
      </section>

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col">
              <h1 class="text-center">What Type of Homes Can Have Solar?</h1>
            </div>
          </div>
        </div>  
        <div class="container">
          <div class="row">
            <div class="col-md-4 about_left">                                        
              <h3>Can Have Solar</h3>
              <br>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Single Family Residence</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Side by Side Duplex</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Vertically Stacked Duplex</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Triplex</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Townhouses</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Farm/Vineyard</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Condominium</p>
            </div>
            <div class="col-1 d-none d-lg-block d-xl-block">
              <div class="dotted-divider-vertical">&nbsp;</div>
            </div>
            <div class="col-md-4">
              <h3>Cannot Have Solar</h3>
              <br>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Modular Prefabricated Homes</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Mobile Manufactored Homes</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Apartment Buildings</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Timeshares</p>
            </div>
          </div>
        </div>
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col text-center">
              <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                <i class="far fa-envelope-open"></i>
              &nbsp;Get A Free Solar Quote</a>
            </div>
          </div>
        </div>  
      </section>

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col">
              <h1 class="text-center">What Type of Homes Can Have Solar?</h1>
            </div>
          </div>
        </div>  
        <div class="container">
          <div class="row">
            <div class="col-md-3">                                        
              <h3 class="pt-2">Can Have Solar</h3>
              <br>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Composition Shingle</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Concrete Tile</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Concrete S-Tile</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> IB Plastic (aka Rubber)</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Rolled Composition</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Spanish Barrel Tile* (replace area with shingles)</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Metal Standing Seam (picture of edge for RSD)</p>
              <p><i class="fa fa-check orange" aria-hidden="true"></i> Metal Corrugate (picture of roof for RSD)</p>
            </div>
            <div class="col-1 d-none d-lg-block d-xl-block">
              <div class="dotted-divider-vertical">&nbsp;</div>
            </div>
            <div class="col-md-3">
              <h3 class="pt-2">Cannot Have Solar</h3>
              <br>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Slate</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Hardi Slate</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Cedar Shake</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Hardi Shake</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Cap &amp; Barrel</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> CompositeTile</p>
            </div>
            <div class="col-1 d-none d-lg-block d-xl-block">
              <div class="dotted-divider-vertical">&nbsp;</div>
            </div>
            <div class="col-md-3">
              <h3 class="pt-2">Can Have Solar In Certain Locations</h3>
              <br>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Tar and Gravel</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Foam</p>
              <p><i class="fa fa-ban orange" aria-hidden="true"></i> Metal Shingles (aka metal tile, metal coated)</p>
            </div>
          </div>
        </div>
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col text-center">
              <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                <i class="far fa-envelope-open"></i>
              &nbsp;Get A Free Solar Quote</a>
            </div>
          </div>
        </div>  
      </section>

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="d-block text-center text-md-left">Balance Of System</h3>
              <p>Balance of System is a general term used to describe the electrical equipment installed
                at ground level. This includes inverters, disconnects, AC combiner/load centers,
              monitoring equipment, and any associated wireways.</p>
              <h3 class="d-block text-center text-md-left">Why is the Balance of System equipment important?</h3>
              <p>The equipment that composes the Balance of System is where the rubber meets the road for
                a PV system. It includes the disconnects needed to allow for safe operation and
                servicing, the metering devices necessary to insure the system is performing as
                promised, and the inverter, which changes the Direct Current (DC) power from the array
                to the Alternating Current (AC) power that your home or business uses. It will always be
                well labeled. There may be parts of the equipment that can be painted, so ask your
              installers. Inverters can NEVER be painted.</p>
              <p class="d-block text-center text-md-left">
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                &nbsp;Get A Free Solar Quote</a>
              </p>
            </div>
            <div class="col-sm-5 mt-5">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/balance-of-a-system.jpg"  alt="Balance of a Solar Energy System" class="img-fluid" loading="lazy">
            </div>    
          </div>
        </div>
      </section>

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="d-block text-center text-md-left">Mounts And Arrays</h3>
              <p>“Standoffs” or mounts provide an engineered method for attaching to your building’s
                framing system. The mounts are particular to your roof - they may look different than
              other systems you may see but they were carefully selected for your roof type.</p>
              <p>Your solar panel array will be securely attached to the mounts and in turn your
              building’s structure.</p>
              <h3 class="d-block text-center text-md-left">Why are mounts and arrays important?</h3>
              <p>The array is designed to both maximize the amount of energy harvested from the sun and
                provide a structurally sound, long lasting, integrated system of connecting the modules
              to your home.</p>
              <p class="d-block text-center text-md-left">
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                &nbsp;Get A Free Solar Quote</a>
              </p>
            </div>
            <div class="col-sm-5 mt-5">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/mounts-and-arrays.jpg"  alt="Mounts and Solar Arrays" class="img-fluid" loading="lazy">
            </div>    
          </div>
        </div>
      </section> 

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-sm-7">                            
              <h3 class="d-block text-center text-md-left">Labeling</h3>
              <p>“Any solar electrical system will need to be
                well labeled. This is a requirement per electrical code and AHJs, and serves to both
                alert and keep safe anyone working on or around any
              of the equipment.</p>
              <h3 class="d-block text-center text-md-left">Why is labeling important?</h3>
              <p>The labeling on your equipment is often particular to your system and is placed there due
                to local requirements and to properly educate future workers on the potential dangers
                associated with working on the equipment and system. Don’t worry - your system will be
                left in a safe state. Always contact Sungevity Customer Service if you are doing work
              around your system.</p>
              <p>Ask your installers regarding the significance of individual labels. The coloring, size
              and positioning of the labels are determined by the AHJ and electrical code.</p>
              <p class="d-block text-center text-md-left">
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                &nbsp;Get A Free Solar Quote</a>
              </p>
            </div>
            <div class="col-sm-5 mt-5">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/labeling.jpg"  alt="Labeling" class="img-fluid" loading="lazy">
            </div>    
          </div>
        </div>
      </section>

      <hr>

      <section class="content-visibility">
        <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-sm-7">                            
              <h3 class="d-block text-center text-md-left">Point of connection</h3>
              <p>In order to seamlessly interconnect with your building’s electrical supply, there is
                always a point of connection made in your Main Service Panel (MSP) or between your
              utility meter and the Main Service Panel.</p>
              <p>The size, type and location of this connection is closely controlled by code and your
                AHJ. Please do not relocate or cover any of these solar devices . If you have questions
              about the equipment, please ask your installer.</p>
              <h3 class="d-block text-center text-md-left">Why is the point of connection important?</h3>
              <p>The circuit breaker or AC disconnect switch provides a code compliant means of
                disconnecting the PV system from your home’s utility-supplied power. This is necessary
                for potential service work on both your PV and the utility lines. In addition, these
                devices protect the sensitive electronics in the inverter and metering device from
                damage. Please only operate these breakers or switches
              if given instruction from Sungevity, or in the event of an emergency.</p>
              <p class="d-block text-center text-md-left">
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                &nbsp;Get A Free Solar Quote</a>
              </p>
            </div>
            <div class="col-sm-5 mt-5">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/point-of-connection.jpg"  alt="Point of Connection" class="img-fluid" loading="lazy">
            </div>    
          </div>
        </div>
      </section>

      <section class="grey-top-border content-visibility d-none d-sm-block">
        <div class="row">
          <div class="col-md-6 mt-5">
            <div class="container">
              <div class="col-md-12 p-5 mt-5">
                <h3 class="d-block text-center text-md-left">Custom Solar Energy Systems</h3>
                <p>We don’t limit you to what one manufacturer wants you to have. Instead, we look at your
                  life, your house and how you use energy. Then we custom-design Sungevity Energy System
                  options that meet your specific energy needs, and help you choose the best one for your
                life.</p>
                <p class="d-block text-center text-md-left">
                  <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                    <i class="far fa-envelope-open"></i>
                  &nbsp;Get A Free Solar Quote</a>
                </p>
              </div>
            </div>
          </div>
          <div class="lazy col float-right right-family-background2" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/family-background-2.jpg">
          </div>
        </div>
      </div>
    </section>

    <section class="content-visibility d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col p-5 text-center">
            <h2>Flexibility for the future</h2>
            <p>Over the 20-year life of your system, your own life is likely to evolve. Your Sungevity
              Energy System is designed to evolve with you. Our solar systems can accommodate multiple
            storage options and other functionality like an EV charger when the time is right.*</p>
            <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal" >
              <i class="far fa-envelope-open"></i>
            &nbsp;Get A Free Solar Quote</a>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/battery-people-background.png" alt="Flexibility for the future" class="img-fluid" loading="lazy">
          </div>
        </div>
      </div>  
    </section>

    <section class="grey-top-border content-visibility d-none d-sm-block">
      <div class="row">
        <div class="col-md-6 mt-5">
          <div class="container">
            <div class="col-md-12 p-5 mt-5">
              <h2>Watch your system perform in real-time</h2>
              <p>Intelligence is built into your Sungevity Energy System. Online or on your phone, you can
                view information like power generation in real-time. And your system is guaranteed to
              perform as promised for 20 years.</p>
              <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                <i class="far fa-envelope-open"></i>
              &nbsp;Get A Free Solar Quote</a>
            </div>
          </div>
        </div>
        <div class="lazy col m-0 float-right right-phone-save-background" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/phone-save.background.jpg">
        </div>
      </div>
    </div>
  </section>

  <section class="grey-top-border content-visibility">
    <div class="row">
      <div class="col-md-5 p-5">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/save-people-left.jpg" class="img-fluid" loading="lazy">
      </div>
      <div class="col-md-5 p-5">
        <h3 class="d-block text-center text-md-left">Saving with Solar</h3>
        <p>You also get transparency into your ongoing savings, with on-demand solar savings
          reports.** These reports allow you to track your savings over the life of your
        agreement.</p>
        <h4 class="orange d-block text-center text-md-left">Buying Or Financing Solar</h4>
        <p>Whether you're looking to pay for your solar installation in full or finance
        Sungevity has options to meet your needs.</p>
        <p><a href="<?php get_home_url(); ?>/solar-financing/?utm_content=energy_system#cash_purchase">Cash
        Purchase</a></p>
        <p><a href="<?php get_home_url(); ?>/solar-financing/?umt_content=energy_system#finance_solar">Finance
        Solar</a></p>
        <p><a href="<?php get_home_url(); ?>/solar-financing/?utm_content=energy_system#lease_solar">Lease
        Solar</a></p>
        <p><a href="<?php get_home_url(); ?>/solar-financing/?utm_content=energy_system#solar_ppa">Solar
        PPA</a></p>
        <p class="d-block text-center text-md-left">
          <a href="/savings/?utm_content=energy_savings_learn_about_savings" class="btn btn-orange font-weight-bold">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          &nbsp;Learn How You Can Save With Solar</a></p>
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