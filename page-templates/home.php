<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

 get_header();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>

<section class="slider-wrap">
  <div class="init-hp-slider">
    <div class="slider-item" style="display: grid">
      <div class="slider-item__bg" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('<?php echo bloginfo('template_directory'); ?>/img/CafeDeFlore.jpg ');">
      </div>
      <div class="slider-item__number">
        01
      </div>
      <div class="slider-item__caption">
        <h3>The Cafe</h3>
      </div>
      <div class="slider-item__caption--diagonal">
        <h3>Nice, France</h3>
      </div>
    </div>

    <div class="slider-item" style="display: grid">
      <div class="slider-item__bg" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('<?php echo bloginfo('template_directory'); ?>/img/Parisienne.jpg ');">
      </div>
      <div class="slider-item__number">
        02
      </div>
      <div class="slider-item__caption">
        <h3>The Lady</h3>
      </div>
      <div class="slider-item__caption--diagonal">
        <h3>Paris, France</h3>
      </div>
    </div>

    <div class="slider-item" style="display: grid">
      <div class="slider-item__bg" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('<?php echo bloginfo('template_directory'); ?>/img/Boulangerie.jpg ');">
      </div>
      <div class="slider-item__number">
        03
      </div>
      <div class="slider-item__caption">
        <h3>The Boulangerie</h3>
      </div>
      <div class="slider-item__caption--diagonal">
        <h3>Monaco, France</h3>
      </div>
    </div>

  </div>

  <div class="hp-cta">
    <h1>Andrea Seraphim</h1>
    <h2>Street Photography</h2>
    <a href="#" class="button">View Gallery</a>
  </div>


</section>


<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery('.init-hp-slider').slick({
    autoplay: true,
    arrows: true,
    fade: true,
    autoplaySpeed: 5000,
  });
});
</script>
 <?php get_footer(); ?>
