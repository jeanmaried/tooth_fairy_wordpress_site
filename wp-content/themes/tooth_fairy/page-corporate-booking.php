<?php /* Template Name: Corporate*/ ?>
<?php
get_header(); ?>

<?php echo get_field("booking_header");
echo get_field("booking_sub_header");
while ( have_posts() ) : the_post();
  the_content();
endwhile; // End of the loop. ?>
