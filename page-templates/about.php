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
        get_template_part('components/flexible-content');
    ?>

 <?php get_footer(); ?>
