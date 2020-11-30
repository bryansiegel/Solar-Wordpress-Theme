<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar nav-link-list">
  <div class="container">
    <a class="navbar-brand logo" href="<?php echo get_home_url(); ?>" title="Sungevity">
      <img class="logo-container" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="Sungevity">
    </a>
    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-1">
      <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-home" aria-hidden="true"></i>
            &nbsp;
            For Home
          </a>
          <div class="dropdown-menu mb-0 pb-0" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/home-solar/" title="Home Solar">Home Solar</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/solar-savings/" title="Solar Savings">Solar Savings</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/solar-financing/" title="Solar Financing">Solar Financing</a>
            <a class="dropdown-item text-white orange-background" href="#fullscreenModal" data-toggle="modal" title="Get A Free Solar Quote">
              <i class="far fa-envelope-open" aria-hidden="true"></i> 
              &nbsp; 
              Get a Free Quote
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-building"></i>
            &nbsp;
            For Business
          </a>
          <div class="dropdown-menu mb-0 pb-0" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/commercial-solar/" title="Commercial Solar">Commercial Solar</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/how-commercial-solar-works/" title="How Commercial Solar Works">How it Works</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/why-sungevity-commercial-solar/" title="Why Sungevity Commercial Solar">Why Sungevity</a>
            <a class="dropdown-item text-white orange-background"  href="#fullscreenModal" data-toggle="modal" title="Get A Free Commercial Solar Quote">
              <i class="far fa-envelope-open" aria-hidden="true"></i> 
              &nbsp;
              Get a Free Quote
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-solar-panel"></i>
            &nbsp;
            Solar Company
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/about-sungevity/" title="About Sungevity">About Us</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/solar-providers/" title="Solar Providers">Solar Providers</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/referral-program/" title="Referral Program">Referral Program</a>
            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/sungevity-reviews/" title="Sungevity Reviews">Reviews</a>
          </div>
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo get_home_url(); ?>/blog/" title="Sungevity Blog">
          <i class="fas fa-rss"></i>
          &nbsp;
          Blog
        </a></li>
      </ul>
      <a class="btn btn-orange d-block d-sm-none" data-toggle="modal" data-target="#mobileModal">
        <i class="far fa-check-square"></i>
        &nbsp;
        Get A Solar Quote
      </a>
      <!-- mobile -->
      <a class="btn btn-orange d-none d-xl-block" 
      id="collapseForm1" 
      data-toggle="collapse" 
      href="#collapseForm" role="button" 
      aria-expanded="false" aria-controls="collapseForm" 
      style="font-size:13px;">
      <i class="far fa-check-square"></i>
      &nbsp;
      Get A Solar Quote
    </a>
  </div>
</div>
</nav>