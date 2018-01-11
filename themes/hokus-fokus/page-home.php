<?php
/*
    Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<main id="main" class="site-main">

		<?php 
			$hero_image = get_field('hero_background');
			$about_image = get_field('about_image');
			$wwd_image = get_field('wwd_image');
		?>

		<section id="hero" style="background-image: url(<?php echo $hero_image['url']; ?>)">
			<!-- <div class="video-container">
				<div class="inner">
					<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
						<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
						<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
					</video>
				</div>
			</div> -->
			<div class="container">
				<div class="row">
					<h1><?php the_field('hero_heading'); ?></h1>
					<p><?php the_field('hero_description'); ?></p>
					<button class="btn btn-yellow"><?php the_field('hero_button'); ?></button>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
					<div class="card">
						<div class="inner">
							<h2 class="heading-label">Um okkur</h2>
							<h3 class="heading-lg"><?php the_field('about_heading'); ?></h3>
							<div class="row">
								<div class="col">
									<p><?php the_field('about_description'); ?></p>
									<div class="the_people left">
										<?php 
											if ( have_rows( 'about_people_left' ) ):
											$i = 1;

											while ( have_rows( 'about_people_left' ) ) : the_row();
										?>

											<div class="people">
												<li><?php the_sub_field('about_people_left_name'); ?></li>
												<li><?php if ( !empty( the_sub_field('about_people_left_role') ) ); ?></li>
												<li><?php if ( !empty( the_sub_field('about_people_left_study') ) ); ?></li>
											</div>
										
										<?php 
											$i++; 
										
											endwhile; 
											endif; 
										?>
									</div>
								</div>
								<div class="col">
									<img src="<?php echo $about_image['url']; ?>" alt="">
									<div class="the_people right">

										<?php 
											if ( have_rows( 'about_people_right' ) ):
											$i = 1;

											while ( have_rows( 'about_people_right' ) ) : the_row();
										?>

											<div class="people">
												<li><?php the_sub_field('about_people_right_name'); ?></li>
												<li><?php if ( !empty( the_sub_field('about_people_right_role') ) ); ?></li>
												<li><?php if ( !empty( the_sub_field('about_people_right_study') ) ); ?></li>
											</div>
										
										<?php 
											$i++; 
										
											endwhile; 
											endif; 
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>

		<section id="what-we-do">
			<div class="container">
				<h2 class="heading-label">Hvað gerum við?</h2>
				<div class="row">
					<div class="col-md-5">
						<h3 class="heading-lg"><?php the_field('wwd_heading'); ?></h3>
					</div>
					<div class="col-md-6">
						<img src="<?php echo $wwd_image['url']; ?>" />
					</div>
				</div>
			</div>
		</section>

		<section id="work">
			<div class="container">
				<div class="row work-intro">
					<h2 class="heading-label">Verkin okkar</h2>
					<h3 class="heading-lg"><?php the_field('work_intro'); ?></h3>
				</div>

				<?php 
					if ( have_rows( 'work_item' ) ):
					$i = 1;

					while ( have_rows( 'work_item' ) ) : the_row(); 
					
					$work_item_image = get_sub_field('work_item_image');
				?>

					<div class="row work-item">
						<div class="col-md-6">
							<div class="img-container">
								<img src="<?php echo $work_item_image['url']; ?>" alt="" />
							</div>
						</div>
						<div class="work-item-content col-md-6">
							<h4><?php the_sub_field('work_item_title'); ?></h4>
							<p><?php the_sub_field('work_item_description'); ?></p>
							<a 
								class="btn btn-purple lightbox"
								data-fancybox-type="iframe"
								data-src="https://www.youtube.com/watch?v=<?php the_sub_field('work_youtube_id'); ?>"
								href="javascript:;"
							>
								<?php the_sub_field('work_item_button'); ?>
							</a>
						</div>
					</div>
				
				<?php 
					$i++; 
				
					endwhile; 
					endif; 
				?>
			</div>
		</section>

		<section id="gaman-saman">
			<div class="container">
				<h2 class="heading-label">Gaman saman</h2>
				<div class="row">
					<div class="col-md-6">
						<h3 class="heading-lg"><?php the_field('gaman_heading'); ?></h3>
						<p><?php the_field('gaman_description'); ?></p>
					</div>
					<div class="col-md-6">
						<div class="owl-carousel">
						<?php 
							if ( have_rows( 'gaman_carousel' ) ):
							$i = 1;

							while ( have_rows( 'gaman_carousel' ) ) : the_row(); 
							
							$carousel_image = get_sub_field('gaman_carousel_image');
						?>
							<div>
								<img src="<?php echo $carousel_image['url']; ?>" alt="" />
								<p><?php the_sub_field('gaman_carousel_description'); ?></p>
							</div>

							<?php 
								$i++; 
							
								endwhile; 
								endif; 
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php get_footer(); ?>
