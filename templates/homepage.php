
<?php

/**
* Template Name: Home Page - Video
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

    <section class="video-header">
      <div class="overlay"></div>
      <video autoplay loop muted playsinline>
        <source src="<?php echo get_bloginfo('template_directory'); ?>/video/solar-house-dark3.mp4" type="video/mp4">
          <source src="<?php echo get_bloginfo('template_directory'); ?>/video/solar-house-dark3.ogg" type="video/ogg">
          </video>
          <div class="container h-100">
            <div class="d-flex text-center align-items-center" style="height:80% !important;">
              <div class="w-100 text-white">
                <h1 class="display-3 fancy-text"><?php the_field('homepage_title') ?></h1>
                <h2 class="lead mb-0 fancy-text"><?php the_field('homepage_description'); ?></h2>
                <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal" >
                  <i class="far fa-envelope-open"></i>
                  &nbsp;<?php the_field('homepage_header_cta_button_text'); ?></a>
                </div>
              </div>
            </div>
          </section>

          <section id="why-us" class="content-visibility">
            <div class="lazy jumbotron sungevity-worker-background" 
            data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/sungevity-solar-installer.jpg">
            <div class="row">
              <div class="col-md-4 about_left">
                <?php the_field('homepage_why_us'); ?>
                <div class="col-md-12 text-center text-md-left p-2">
                  <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" 
                  title="<?php the_field('homepage_why_us_cta_button'); ?>" data-toggle="modal">
                  <i class="far fa-envelope-open"></i>
                  &nbsp;<?php the_field('homepage_why_us_cta_button'); ?></a>
                </div>
              </div>
              <div class="col-md-5"></div>    
            </div>
          </div>
        </section>

        <section class="lazy mb-n1 content-visibility" id="financing"  
        data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/grey-new-wave.svg" style="background-size:cover;">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2 class="pt-5"><?php the_field('homepage_financing_title'); ?></h2>
              <h3 class="text-dark"><?php the_field('homepage_financing_description'); ?></h3>
            </div>
          </div>

          <div class="card-deck pt-5 pb-5">
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title text-center"><?php the_field('homepage_box_title_1'); ?></h3>
                <p class="card-text"><?php the_field('homepage_box_description_1'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/solar-financing/?utm_content=homepage_cash_purchase#cash_purchase" 
                  title="<?php the_field('homepage_box_cta_button_text_1'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_box_cta_button_text_1'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title text-center"><?php the_field('homepage_box_title_2'); ?></h3>
                <p class="card-text"><?php the_field('homepage_box_description_2'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/solar-financing/?umt_content=home_finance_solar#finance_solar" 
                  title="<?php the_field('homepage_box_cta_button_text_2'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_box_cta_button_text_2'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title text-center"><?php the_field('homepage_box_title_3'); ?></h3>
                <p class="card-text"><?php the_field('homepage_box_description_3'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/solar-financing/?utm_content=homepage_lease_solar#lease_solar" 
                  title="<?php the_field('homepage_box_cta_button_text_3'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_box_cta_button_text_3'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title text-center"><?php the_field('homepage_box_title_4'); ?></h3>
                <p class="card-text"><?php the_field('homepage_box_description_4'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/solar-financing/?utm_content=homepage_solar_ppa#solar_ppa" 
                  title="<?php the_field('homepage_financing_box_cta_button_text_4'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_financing_box_cta_button_text_4'); ?>
                </a>
              </p>
            </div>
          </div>
        </section>

        <section class="lazy content-visibility" id="financing" 
        data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/wave-grey3.svg" style="background-size:cover;">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2 class="pt-5"><?php the_field('homepage_energy_title'); ?></h2>
              <h3 class="text-dark"><?php the_field('homepage_energy_description'); ?></h3>
            </div>
          </div>
          <div class="card-deck pt-5 pb-5">
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title orange text-center"><?php the_field('homepage_energy_box_title_1'); ?></h3>
                <p class="card-text"><?php the_field('homepage_energy_box_description_1'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/home-solar/?utm_content=homepage_energy_custom#custom" 
                  title="<?php the_field('homepage_energy_box_cta_button_text_1'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_energy_box_cta_button_text_1'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title orange text-center"><?php the_field('homepage_energy_box_title_2'); ?></h3>
                <p class="card-text"><?php the_field('homepage_energy_box_description_2'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/home-solar/?utm_content=homepage_energy_savings#savings" 
                  title="<?php the_field('homepage_energy_box_cta_button_text_2'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_energy_box_cta_button_text_2'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title orange text-center"><?php the_field('homepage_energy_box_title_3'); ?></h3>
                <p class="card-text"><?php the_field('homepage_energy_box_description_3'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/home-solar/?utm_content=homepage_energy_flexability#flexability" 
                  title="<?php the_field('homepage_energy_box_cta_button_text_3'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_energy_box_cta_button_text_3'); ?>
                </a>
              </p>
            </div>
            <div class="card card-shadow">
              <div class="card-body">
                <h3 class="card-title text-center"><?php the_field('homepage_energy_box_title_4'); ?></h3>
                <p class="card-text"><?php the_field('homepage_energy_box_description_4'); ?></p>
              </div>
              <p class="card-footer text-center">
                <a class="btn btn-orange" href="<?php get_home_url(); ?>/home-solar/?utm_content=homepage_energy_reliability#reliability" 
                  title="<?php the_field('homepage_energy_box_cta_button_text_4'); ?>">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                  &nbsp;<?php the_field('homepage_energy_box_cta_button_text_4'); ?>
                </a>
              </p>
            </div>
          </div>
        </section>
        <?php 
          //blog posts
        echo get_template_part('partials/blog-posts'); ?>

        <?php echo get_template_part('partials/call-to-action/footer/bottom-footer'); ?>

      </main><!--end main-->

      <!-- mobile Modal -->
      <?php echo get_template_part('partials/forms/mobileModal'); ?>

      <!-- Full Screen Modal -->
      <?php echo get_template_part('partials/forms/fullscreenModal'); ?>

    </div>


    <?php echo get_template_part('partials/footer'); ?>   
