<?php
/*
Template Name: Landing Page
*/
?>
<?php get_header(); ?>

<header class="container" role="banner">
	<div class="row">
	  <div class="small-12 columns">
	    <h1>InfoCamp Seattle</h1>
	    <h2>Some tagline here</h2>
	    <h3>October 25-26, 2014</h3>
	  </div>
  </div>
</header>

<div class="about">
	<div class="row">
		<div class="small-12 large-12 columns">
			<!--<h2 class="section-title"><span>What</span></h2>-->
			<p>A 2-day unconference full of conversation, collaboration, and learning for people who work with information on the Web.</p>
		</div>
	</div>
</div>

<div class="date-place">
	<div class="row">
		<div class="small-12 large-6 columns half-section">
			<h2>When</h2>
			<p>InfoCamp begins in</p>
			<ul class="countdown">
				<li> <span class="days">00</span>
					<p class="days_ref">days</p>
				</li>
				<li> <span class="hours">00</span>
					<p class="hours_ref">hours</p>
				</li>
				<li> <span class="minutes">00</span>
					<p class="minutes_ref">min</p>
				</li>
				<li> <span class="seconds">00</span>
					<p class="seconds_ref">sec</p>
				</li>
			</ul>
			<p>InfoCamp kicks off at 9:00AM on October 25, 2014 and runs through October 26.
			Join us for two full days of presentations, discussions, and workshops about all things information.</p>
			<p><strong>Registration opens August 1. Mark your calendar!</strong></p>
		</div>
		<div class="small-12 large-6 columns half-section">
			<h2>Where</h2>
			<p>InfoCamp takes place in Mary Gates Hall on the University of Washington campus in Seattle.</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5375.034006555408!2d-122.30792!3d47.654952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549014f2a95c2899%3A0xb2525ccd291489c!2sMary+Gates+Hall.+University+of+Washington!5e0!3m2!1sen!2sus!4v1403211525839" width="350" height="250" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
</div>

<!--<div class="info-boxes">
	<div class="row">

		<div class="small-12 medium-4 columns">
			<div class="info-box">
				<h4>About</h4>
				<p>InfoCamp is an unconference for information professionals in Seattle.</p>
			</div>
		</div>

		<div class="small-12 medium-4 columns">
			<div class="info-box">
				<h4>Register</h4>
				<p>Registration information will be posted soon.</p>
			</div>
		</div>

		<div class="small-12 medium-4 columns">
			<div class="info-box">
				<h4>Sponsor</h4>
				<p>Interested in becoming a sponsor? <a href="#">Learn more.</a></p>
			</div>
		</div>

	</div>
</div> -->

<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>
  <div class="row">

	<div class="small-12 large-12 columns" role="main">

		<?php /* Recent posts */ ?>

		<h2 class="section-title"><span>Blog</span></h2>

		<div class="row section">
			<?php
				$args = array( 'posts_per_page' => 5 );

				$posts = get_posts( $args );
				foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endforeach; 
			wp_reset_postdata();?>
		</div>

<!-- Put row of sponsors here eventually

		<h2 class="section-title"><span>Sponsors</span></h2>

		<div class="row section">
			<p>We are looking for sponsors for this year's InfoCamp!</p>
		</div> -->
		
	</div>
		
<?php get_footer(); ?>