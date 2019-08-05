<?php
/**
 * Template Name: About
 *
 * @package understrap
 */

 get_header();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>
    <?php
        the_content();
    ?>

 <?php get_footer(); ?>
