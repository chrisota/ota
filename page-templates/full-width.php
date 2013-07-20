<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('columns twelve offset-by-two'); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('sub-heading'); ?></p>
			</header>
		</article>        
	</div>
</div>
<!-- End Intro -->

<div id="wrapper-02" class="site-content sub">
	<div id="content" role="main" class="container">
		<section class="columns sixteen">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<div id="wrapper-03">
	<div class="container">
		<div class="columns sixteen">
			<?php the_field('full-width-image'); ?>
		</div>
	</div>	
</div>

<div id="wrapper-04">
	<div class="container">
		<div class="columns sixteen">
			<?php the_field('second-section'); ?>
		</div>
	</div>	
</div>

<div id="wrapper-05">
	<div class="container">
		<div class="columns sixteen">
			<?php the_field('testimonials'); ?>
		</div>
	</div>	
</div>

<?php get_footer(); ?>