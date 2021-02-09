	<?php
	$image1 = get_field('slide1', 17);
	$image2 = get_field('slide2', 17);
	$image3 = get_field('slide3', 17);

	if( get_field('activ_carousel', 17) ) {
	?>
	<!-- CAROUSEL -->
	<div id="myCarousel" class="carousel slide d-none d-md-block" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <?php if( !empty($image2['url'])) { ?>
		<li data-target="#myCarousel" data-slide-to="1"></li>
	  <?php } ?>
	  <?php if( !empty($image3['url'])) { ?>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  <?php } ?>
	</ol>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<?php if( !empty(get_field('url1', 17)) && !empty($image1['url']) ) { ?>
			<a href="<?php the_field('url1', 17); ?>">
				<img src="<?php echo esc_url($image1['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image1['alt']); ?>">
			</a>
		<?php } else if (!empty($image1['url']) && empty(get_field('url1', 17) ) ) { ?>
			<img src="<?php echo esc_url($image1['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image1['alt']); ?>">
		<?php } else { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/computer.jpg" width="100%" height="100%" alt="Computer">
		<?php } ?>


	  </div>

	  <?php if( !empty($image2['url'])) { ?>
		<div class="carousel-item">
		<?php if( !empty(get_field('url2', 17))) { ?>
				<a href="<?php the_field('url2', 17); ?>">
					<img src="<?php echo esc_url($image2['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image2['alt']); ?>">
				</a>
			<?php } else { ?>
				<img src="<?php echo esc_url($image2['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image2['alt']); ?>">
			<?php } ?>
		</div>
	  <?php } ?>

	  <?php if( !empty($image3['url'])) { ?>
		<div class="carousel-item">
			<?php if( !empty(get_field('url3', 17))) { ?>
				<a href="<?php the_field('url3', 17); ?>">
					<img src="<?php echo esc_url($image3['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image3['alt']); ?>">
				</a>
			<?php } else { ?>
				<img src="<?php echo esc_url($image3['url']); ?>" width="100%" height="100%" alt="<?php echo esc_attr($image3['alt']); ?>">
			<?php } ?>
		</div>
	  <?php } ?>

	</div>
	<?php if( !empty($image2['url']) || !empty($image3['url'])  ) { ?>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	<?php } ?>

	</div>
	<!-- CAROUSEL END -->
<?php } ?>