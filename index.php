
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

		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<section class="lazy" data-src="<?php echo $backgroundImg[0]; ?>" style="min-height:450px;background-size:cover;">
			<div class="row">
				<div class="col-lg-12">

					<h2 class="text-white text-center display-4 pt-5 mt-5">
						<?php the_title(); ?></h2>
						<h3 class="text-white text-center">
							<?php the_field('post_summary'); ?>
						</h3>

						<div class="d-flex justify-content-center">
							<a href="" target="_blank"><i class="fa fa-twitter-square text-white display-4 m-2" aria-hidden="true"></i></a>
							<a href="" target="_blank"><i class="fa fa-facebook-square text-white display-4 m-2" aria-hidden="true"></i></a>
							<a href="" target="_blank"><i class="fa fa-linkedin-square  text-white display-4 m-2" aria-hidden="true"></i></a>
						</div>

						<div class="text-center pt-3 pb-3">
							<a href="" class="btn btn-large btn-orange">
								<i class="fa fa-leanpub" aria-hidden="true"></i>
								Read More
							</a>
						</div>

					</div>
				</div>
			</section>

			<section class="content-visibility">
				<div class="container pt-3 mt-3">
					<div class="row justify-content-md-center">
						<div class="col col-md-7">
							<!--                        start post-->

							<?php
						//posts
							if ( have_posts() ) : while ( have_posts() ) : the_post();
							// the_post_thumbnail( 'full', ['class' => 'img-responsive']);
								the_content();

							endwhile; endif;
							?>
							<!--end post-->

						</div>
						<div class="col col-md-4">
							<div style="background-color:#DDE9EC; padding:15px; border-radius: 5px; border:1px solid lightgrey;">

								<h3 style="text-align:center;"><strong><span style="color: #f2682b;">CALL ABOUT OUR SOLAR RATES</span></strong></h3>

								<br>

								<h4 style=" font-weight:bold;text-align:center;">Sungevity</h4>

								<p style="color:#f2682b;text-align:center;font-size:26px;">866-SUN-4ALL</p>
								<center>
									<a href="#fullscreenModal" class="btn btn-orange mt-4 text-center" data-toggle="modal" ><i class="far fa-envelope-open"></i>
									GET A FREE SOLAR QUOTE</a>
								</center>



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