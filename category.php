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
						<h1 class="text-center text-white display-3"><?php single_cat_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
		<!-- end header -->


		<section>
			<?php
	                //posts
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>


		</section>





	</main><!--end main-->

	<!-- mobile Modal -->
	<?php echo get_template_part('partials/forms/mobileModal'); ?>

	<!-- Full Screen Modal -->
	<?php echo get_template_part('partials/forms/fullscreenModal'); ?>

</div>


<?php echo get_template_part('partials/footer'); ?>