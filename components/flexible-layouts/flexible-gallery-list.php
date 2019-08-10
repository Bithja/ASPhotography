<?php
$args = array(
  'orderby' => 'title',
  'post_type' => 'gallery',
  'posts_per_page' => -1
  );
  $the_query = new WP_Query( $args );
?>

<section class="page-section gallery-list">
  <div class="container">
    <div class="row">
      <?php if ( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
          <div class="col-6 col-md-4 gallery-list__item">
            <a href="<?php the_permalink(); ?>">
              <div class="gallery-list__img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
              </div>
            </a>
            <h3 class="gallery-list__item-header font-weight-bold"><?php echo the_title(); ?></h3>
            <?php the_excerpt(); ?>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
