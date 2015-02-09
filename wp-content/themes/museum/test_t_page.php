<?php
/*
Template Name: Simple Page
*/
?>
 
<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'custom' ); ?>

    <?php endwhile; // end of the loop. ?>

