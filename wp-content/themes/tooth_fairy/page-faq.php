	<?php /* Template Name: FAQ*/ ?>

	<?php
	/**
	* The template for displaying all single posts.
	*
	* @package RED_Starter_Theme
	*/

	get_header(); ?>

	<div id="primary">
		<div id="content padding-lg" role="main" data>

			<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/page-templates/faq' ); ?>
			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
