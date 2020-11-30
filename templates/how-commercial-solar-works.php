<?php

/**
 * Template Name: How Commercial Solar Works
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
    <section class="lazy" style="background-size:cover" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/commercial-solar-worker.jpg">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-sm-6 pt-3 pb-5 mt-5 mb-5 text-center">
            <h1 class="display-4 pb-2">How Commercial Solar Installation Works</h1>
          </p>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </section>

  <!-- end header -->

  <section style="background-color:#e9f1f3;">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-md-center">
        <div class="col-lg-8">
          <h2 class="text-center">Get Commercial Solar in 3 Easy Steps.</h2>
          <p>Whether you're a small business or a large commercial enterprise, we'll guide you through every step of the process to make the switch to solar straightforward.</p>
          <p class="text-center">
            <a href="#fullscreenModal" class="btn btn-orange mt-4 text-center font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
            &nbsp;Get A Free Solar Quote</a>
          </p>
        </div>
      </div>
    </div>  
  </section>

  <section>
    <div class="container pt-5 pb-5">
      <div class="row pt-5 pb-5">
        <div class="col-md-1 display-1 d-block text-center text-md-left">1</div>
        <div class="col-md-9">
          <h2>Choose your Commercial solar and Commercial financing options.</h2>
          <p>A conversation with a Sungevity Commercial Solar Consultant will let you know how much your business can save by going solar. We’ll design your system, provide an accurate quote, and explain your financial options, including applicable tax credits and incentives. Best of all, we do this with you over the phone, so you don’t have to wait around for someone to show up for a visit when going solar.</p>
          <p class="d-block text-center text-md-left">
            <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
            &nbsp;Get A Free Solar Quote</a>
          </p>
        </div>
      </div>

      <hr>

      <div class="row pt-5 pb-5">
        <div class="col-md-1 display-1 d-block text-center text-md-left">2</div>
        <div class="col-md-9">
          <h2>We manage the whole process of going solar for you.</h2>
          <p>We take care of the planning, permits, installation, and any hurdle that might come up. We partner with licensed local solar installers, keeping jobs in your local area. After installation, Sungevity quality checks your system to ensure that everything meets specifications.</p>
          <p class="d-block text-center text-md-left">
            <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
            &nbsp;Get A Free Solar Quote</a>
          </p>
        </div>
      </div>

      <hr>

      <div class="row pt-5 pb-5">
        <div class="col-md-1 display-1 d-block text-center text-md-left">3</div>
        <div class="col-md-9">
          <h2>Congratulations! Your business is powered by the sun.</h2>
          <p>You can monitor your solar production with your mobile device or laptop anywhere, anytime, giving you peace of mind that your system is performing as designed.</p>
          <p class="d-block text-center text-md-left">
            <a href="#fullscreenModal" class="btn btn-orange mt-4 font-weight-bold" data-toggle="modal"><i class="far fa-envelope-open" aria-hidden="true"></i>
            &nbsp;Get A Free Solar Quote</a>
          </p>
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