<?php
/*
Template Name: Simple Page
*/
?>
 
<?php include('header2.php'); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'custom' ); ?>

    <?php endwhile; // end of the loop. ?>

