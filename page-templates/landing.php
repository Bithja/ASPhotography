<?php
/**
 * Template Name: Landing
 *
 * @package understrap
 */

 get_header();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>

   <?php
   $header = get_field('header');
   $subheader = get_field('subheader');
   $link = get_field('link');
   if ($link) {
     $link_url = $link['url'];
     $link_title = $link['title'];
     $link_target = $link['target'] ? $link['target'] : '_self';
   }
   ?>

<section class="landing slider-wrap">
  <div class="init-hp-slider">
    <?php if ( have_rows('image_slider') ): ?>
      <?php $i = 1; ?>
      <?php while ( have_rows('image_slider') ): the_row(); ?>
        <?php
        $image = get_sub_field('image');
        $image_name = get_sub_field('image_name');
        $image_location = get_sub_field('image_location');
        ?>
        <div class="slider-item" style="display: grid">
          <div class="slider-item__bg" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('<?php echo $image['url']; ?>'">
          </div>
          <div class="slider-item__number">
            <?php echo  $i; ?>
          </div>
          <div class="slider-item__caption">
            <h3><?php echo $image_name; ?></h3>
          </div>
          <div class="slider-item__caption--diagonal">
            <h3><?php echo $image_location; ?></h3>
          </div>
        </div>
        <?php $i++; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="hp-cta">
    <h1><?php echo $header ?></h1>
    <h2><?php echo $subheader; ?></h2>
    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
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
