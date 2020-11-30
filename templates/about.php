<?php

/**
 * Template Name: About Us
 *
 *
 * @package WordPress

 * @since 2.0.0
 */

?>

<?php echo get_template_part('partials/head'); ?>

<style>

 .row1 {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column1 {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column1 img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

.column1 iframe {
  margin-top: 3px !important;
  margin-bottom: 7px !important;
  vertical-align: middle;
  width: 100%;
}
</style>
</head>
<body>

  <!-- navigation -->
  <?php echo get_template_part('partials/nav'); ?>
  <!-- end navigation -->

  <main role="main" class="page-header">
    <section>
      <?php echo get_template_part('partials/forms/collapse_form'); ?>
    </section>

    <section class="about-us-hero-background">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h1 class="display-3 text-white">About Us</h1>
            <h2 class="text-white">Since 2007 we have helped people just like you go solar.</h2>
            <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal" >
              <i class="far fa-envelope-open"></i>
            &nbsp;Get A Free Solar Quote</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content-visibility">
      <div class="row">
        <div class="col-md-6 mt-5">
          <div class="col-md-12 mt-5">
            <h3 class="orange display-4 d-block text-center text-md-left">What Do We Do?</h3>
            <p>Sungevity is a <b>leading solar power company</b> that has been supplying home solar energy solutions since 2007. Sungevity handles everything you would need for <b>solar installation in the United States</b>. Sungevity doesn't supply cookie-cutter, one-size-fits-all solar energy solutions. We provide custom solar energy solutions for <a href="<?php get_home_url(); ?>/home-solar/" title="residential homes">residential homes</a> and <a href="<?php get_home_url(); ?>/commercial-solar/" title="commercial solar">commercial
            properties</a> that meet your current and future energy needs.</p>
            <p class="d-block text-center text-md-left">
              <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal">
                <i class="far fa-envelope-open" aria-hidden="true"></i>
              &nbsp; Get A Free Solar Quote</a>
            </p>
          </div>
        </div>
        <div class="lazy col float-right right-sungevity-employee-background  d-none d-sm-block" data-src="<?php bloginfo('template_directory'); ?>/img/backgrounds/sungevity-employee-background.jpg">
        </div>
      </div>
    </section>

    <section class="content-visibility">
      <div class="lazy jumbotron sungevity-worker-background" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/sungevity-solar-installer.jpg">
        <div class="row h-100">
          <div class="col-md-6">
            <h3 class="display-4 d-block text-center text-md-left">Why Do We Do It?</h3>
            <p>We believe every home should have clean, renewable energy at an
              affordable cost. By designing beautiful home solar systems and providing <a href="<?php get_home_url(); ?>/solar-savings/" title="flexible financing plans">flexible financing plans</a>, we
            enable people to generate their own energy and save money.</p>
            <p class="d-block text-center text-md-left">
              <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal" ><i class="far fa-envelope-open"></i>
              &nbsp;Get A Free Solar Quote</a>
            </p>
          </div>
          <div class="col-md-5"></div>    
        </div>
      </div>
    </section>

    <section class="content-visibility">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col">
            <h2 class="text-center display-4">Who Are We?</h2>
            <p>
              Sungevity is more than just a solar company. Sungevity is a family that fosters hard work and unity. What makes Sungevity different is our dedication to our customers. We make sure the solar energy system we design for you is one that will work for your budget and your future. Whether you're looking for clean energy or to reduce your electricity costs, Sungevity is there for you every step of the way.
            </p>
            <div class="row1">
              <div class="column1">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee1.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee2.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee3.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee4.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee5.jpg" alt="Sungevity Employee" loading="lazy">
              </div>
              <div class="column1">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee8.jpg"  alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee9.jpg"  alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee10.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee11.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee12.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee20.jpg" alt="Sungevity Employee" loading="lazy">
              </div>
              <div class="column1">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee14.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee15.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee16.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee18.jpg" alt="Sungevity Employee" loading="lazy">
              </div>
              <div class="column1">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee21.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee22.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee23.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee24.jpg" alt="Sungevity Employee" loading="lazy">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/employees/employee25.jpg" alt="Sungevity Employee" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>

    <section class="content-visibility">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col">
            <h2 class="text-center display-4">Why Us?</h2>
            <p>
              We understand there are many solar companies you can choose from. What sets Sungevity apart from the competition is that we have the experience, quality and foresight to build a custom home solar energy system for you, not some cookie-cutter one size fits behemoth. The benefit of a custom solar power system is we design it for you and your needs.
            </p>
            <p class="font-weight-bold">
              <i class="fa fa-check orange" aria-hidden="true"></i> Save Money<br>
              <i class="fa fa-check orange" aria-hidden="true"></i> Help The Environment<br>
              <i class="fa fa-check orange" aria-hidden="true"></i> Increase Your Homes Value</p>
              <p>
                Not all solar companies are the same. Beware of
                companies with fast solar quotes and free solar energy systems. <b>The truth is not all
                roofs are the same hence, not all solar installations are the same.</b> We've perfected
                our solar installation process over the years. We take our time to really understand your
                needs and provide you with options that work best for your present and future needs. <b>We
                don't treat you as just another customer...</b> we treat you as part of the Sungevity
                family.
              </p>
              <h3 class="orange text-center pt-4">Don't Take Our Word For It. See What Our Customers Have To Say</h3>

              <div class="row1">
                <div class="lazy column1">
                  <iframe src="https://www.youtube.com/embed/qds2yzBkmTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/wWSBvLM52CI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/nTz4Kp5htfk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="lazy column1">
                  <iframe src="https://www.youtube.com/embed/7S6qs4Fo2xk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/zkmp1DuCCl8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/xbaFQ_pQ8lE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="lazy column1">
                  <iframe id="no_say" src="https://www.youtube.com/embed/OoL6GUE9H7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/U2_vHf_4_LY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/gn4mKOe6g44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="lazy column1">
                  <iframe id="no_say" src="https://www.youtube.com/embed/VsU41asnPo8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/f9nkrXZH44w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                  <iframe id="no_say" src="https://www.youtube.com/embed/oqVjlVaZ_pM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>

      <section class="content-visibility d-none d-sm-block">
        <div class="row">
          <div class="lazy col-sm-6 sungevity-employee-background" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/sungevity-employee.jpg">
          </div>
          <div class="col-sm-6">
            <div class="container">
              <div class="row p-5 m-3">
                <div class="col p-5">
                  <h2 class="display-4 text-center">What Are You Waiting For?</h2>
                  <p>
                    Contact us to discuss your options. We can go over everything from qualifying for solar to financing options and even if solar makes sense for you. But if you don't contact us, you may never know if solar is your best option.
                  </p>
                  <p class="text-center">
                    <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal">
                      <i class="far fa-envelope-open" aria-hidden="true"></i>
                    &nbsp;Get A Free Solar Quote</a>
                  </p>
                </div>
              </div>
            </div>  
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


