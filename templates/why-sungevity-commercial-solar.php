<?php

/**
 * Template Name: Why Sungevity Commercial Solar
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
    <section class="lazy orange-logo-background p-5" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/lg-burst-background.png">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col">
            <h1 class="text-center text-white display-4">Solar For Your Business.</h1>
            <h2 class="text-white text-center">Beautifully Engineered. Built to Last.</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- end header -->

    <section class="content-visibility">
      <div class="container">
        <div class="card-deck pt-5 pb-5">
          <div class="card card-shadow">
            <div class="card-body">
              <h3 class="card-title text-center">High quality.</h3>
              <p class="card-text">Whether you want a roof, shade structure, or ground mount system, we’ll build it with top-quality solar panels and components.</p>
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
              <h3 class="card-title text-center">Custom built.</h3>
              <p class="card-text">We use remote solar design technology to customize your commercial solar power system and optimize your financial return.</p>
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
              <h3 class="card-title text-center">Guaranteed.</h3>
              <p class="card-text">With our 20-year warranty covering all components, you can be confident that your investment is protected.</p>
            </div>
            <p class="card-footer text-center">
              <a class="btn btn-orange" href="" title="Solar Cash Purchasing Options">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                &nbsp;LEARN MORE
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="grey-top-border content-visibility">
      <div class="row">
        <div class="col-md-5 pt-5">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/ipad-system-monitor.png" alt="Monitor Your Commercial Solar System" class="img-fluid" loading="lazy">
        </div>
        <div class="col-md-5 pt-5">
          <h3 class="d-block text-center text-md-left">Monitor your system 24/7.</h3>
          <p>As a Sungevity for Business customer, you can monitor your system’s solar power production online or from your mobile device – anywhere, anytime.</p>
          <p class="d-block text-center text-md-left">
            <a href="/savings/?utm_content=energy_savings_learn_about_savings" class="btn btn-orange font-weight-bold">
              <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
            &nbsp;LEARN HOW YOU CAN SAVE WITH SOLAR</a></p>
          </div>
        </div>
      </section>

      <section>
        <div class="lazy why-us content-visibility" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/sungevity-solar-installer.jpg">
          <div class="row pt-5 pb-5 mt-5 mb-5">
            <div class="col-md-4 about_left pt-5 pb-5 mt-5 mb-5">
              <h3>We make solar power easy.</h3>
              <p>Our team has extensive commercial solar experience to guide you to the right power solution and your dedicated Project Manager will take care of all the details.</p>
              <div class="col-md-12 text-center text-md-left p-2">
                <a href="" class="btn btn-orange mt-4 font-weight-bold">
                  <i class="far fa-envelope-open" aria-hidden="true"></i>
                &nbsp;Get A Free Solar Quote</a>
              </div>
            </div>
            <div class="col-md-5"></div>    
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