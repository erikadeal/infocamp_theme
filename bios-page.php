<?php
/* 
Template Name: Bios Page
*/
?>
<?php get_header(); ?>

<section class="page-container" role="document">
  <?php do_action('foundationPress_after_header'); ?>

  <?php while (have_posts()) : the_post(); ?>
	<header class="page-title">
		<div class="row">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</header>
  <?php endwhile;?>

  <div class="row">

	<div class="small-12 large-12 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php
	 
	// Check for custom field
	if( have_rows('organizer') ):
	 
	    while ( have_rows('organizer') ) : the_row(); ?>
	 	
			<div class="organizer clearfix"> 

				<div class="image-wrap">
					<img src="<?php the_sub_field('image'); ?>" />
				</div>

				<div class="description">
	       
	       		<h2 class="name"><?php the_sub_field('name'); ?></h2>
	       		<h3 class="role"><?php the_sub_field('infocamp_role'); ?></h3>

	       		<p><?php the_sub_field('about'); ?></p>
	       		
	       		<ul class="social-links">
	       			<li><a href="<?php the_sub_field('twitter'); ?>" class="fa fa-twitter"></a></li>
	       			<li><a href="<?php the_sub_field('linkedin'); ?>" class="fa fa-linkedin"></a></li>
	       			<li><a href="<?php the_sub_field('facebook'); ?>" class="fa fa-facebook"></a></li>
	       		</ul>

	       		</div>
	        </div>
	 
	   <?php 
	    endwhile;
	 
	else :
	 
	    echo "No organizers found!";
	 
	endif;
	 
	?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
		
<?php get_footer(); ?>