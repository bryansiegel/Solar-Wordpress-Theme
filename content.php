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
            <i class="fa fa-twitter-square text-white display-4 m-2" aria-hidden="true"></i>
          </a>
          <a href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo the_permalink(); ?>&p[title]=<?php echo the_title(); ?>" target="_blank">
            <i class="fa fa-facebook-square text-white display-4 m-2" aria-hidden="true"></i>
          </a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;title=<?php echo the_title(); ?>" target="_blank">
            <i class="fa fa-linkedin-square  text-white display-4 m-2" aria-hidden="true"></i>
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
