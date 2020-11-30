<?php

/**
* Template Name: Blog
*
*
* @package WordPress

* @since 1.0.0
*/

?>

<?php echo get_template_part('partials/head'); ?>
<style>
  .categories a{
    padding-right:15px;
    padding-left:15px;
    margin-right:20px;
    margin-left:20px;
    margin-bottom:30px;
    border-radius:50px;
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
    <!-- header -->
    <section class="lazy orange-logo-background p-5" data-src="<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/lg-burst-background.png">
      <div class="container pt-5">
        <div class="row">
          <div class="col">
            <h1 class="text-center text-white display-3">Blog</h1>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center pt-5 content-visibility">
        <div class="categories">
          <?php
//categories
          foreach ( get_categories() as $category ) : ?>
            <?php $category_id = get_cat_ID($category->name);
            $category_link = get_category_link( $category_id );
            ?>
            <a href="<?php echo $category_link; ?>" class="btn btn-light btn-sm" title="<?php echo $category->name; ?>">
              <i class="fa fa-leanpub" aria-hidden="true"></i>
              <?php echo $category->name; ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <!-- end header -->
      <!-- posts -->
      <?php
      // the query
      $the_query = new WP_Query(array(
        'category_name' => 'Solar Blog',
        'posts_per_page' => 100,
      ));
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
          <section class="lazy content-visibility" 
          data-src="<?php echo $backgroundImg[0]; ?>" style="min-height:450px;background-size:cover;">
          <div class="row p-5">
            <div class="col-lg-12">
              <h2 class="text-white text-center display-4 mt-5">
                <?php the_title(); ?>
              </h2>
              <h3 class="text-white text-center">
                <?php the_field('post_summary'); ?>
              </h3>
              <div class="d-flex justify-content-center"><!-- social -->
                <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php echo the_permalink(); ?>" target="_blank">
                  <i class="fa fa-twitter-square text-white m-2" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo the_permalink(); ?>&p[title]=<?php echo the_title(); ?>" target="_blank">
                  <i class="fa fa-facebook-square text-white m-2" aria-hidden="true"></i>
                </a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;title=<?php echo the_title(); ?>" target="_blank">
                  <i class="fa fa-linkedin-square  text-white m-2" aria-hidden="true"></i>
                </a>
              </div><!-- end social -->
              <div class="text-center pt-3">
                <a href="<?php echo the_permalink(); ?>" class="btn btn-large btn-orange" title="<?php the_title(); ?>">
                  <i class="fa fa-leanpub" aria-hidden="true"></i>
                  Read More
                </a>
              </div>
            </div>
          </div>
        </section>

        <?php //the_title(); ?>
        <?php //the_excerpt(); ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php __('No News'); ?></p>
      <?php endif; ?>
      <!-- end posts -->


    </main><!--end main-->

    <!-- mobile Modal -->
    <?php echo get_template_part('partials/forms/mobileModal'); ?>

    <!-- Full Screen Modal -->
    <?php echo get_template_part('partials/forms/fullscreenModal'); ?>

  </div>


  <?php echo get_template_part('partials/footer'); ?>