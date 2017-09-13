page-residential.php

<h1>
 <?php the_field("service_traits"); ?>
 </h1>

 <?php while ( have_posts() ) : the_post(); ?>

   <?php echo get_field("service_traits"); ?>

 <?php endwhile; // End of the loop. ?>
