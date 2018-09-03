<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

 get_header();

 while ( have_posts() ) : the_post();
 	get_template_part( 'loop-templates/content', 'empty' );
 endwhile;

 get_footer();
