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
								<div class="col-md-6">
									<p><?php the_field('about_description'); ?></p>
								</div>
								<div class="col-md-6">
									<img src="<?php echo $about_image['url']; ?>" alt="">
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
				<h2 class="heading-label">Verkin okkar</h2>
				<div class="row">
					<h3 class="heading-lg"><?php the_field('work_intro'); ?></h3>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php get_footer(); ?>
