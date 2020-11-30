<?php

/**
* Template Name: Reviews
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
      <div class="container pt-5">
        <div class="row">
          <div class="col">
            <h1 class="text-center text-white display-3">Reviews</h1>
            <p class="text-white text-center">If you want to know what it's like to go solar with Sungevity, why not listen to the people who already have? Our Customers know us best and they have some positively sunny things to say.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end header -->

    <section>

      <div class="container p-5">
        <div class="row">
          <div class="col">
            <h2 class="text-center orange">Real Customer Reviews</h2>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logos/best-company.png" class="img-fluid mx-auto d-block pt-5" loading="lazy" />
          </div>
        </div>
      </div>

      <div class="">
        <div class="row">
          <div class="col">
            <!-- reviews -->
            <div class="iframe-wrapper pr-3 pl-3 pb-3">
              <iframe src="https://components.bestcompany.com/solar/company/sungevity-reviews/slider"
              frameborder="0"
              style="position: relative; height: 1200px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
            </div>
            <!-- reviews end -->
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