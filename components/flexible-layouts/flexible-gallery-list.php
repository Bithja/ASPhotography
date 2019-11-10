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
    <div class="row justify-content-between">
      <?php if ( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
          <div class="col-6">
            <div class="col-12 gallery-list__item text-center">
              <a class="gallery-list__link" href="<?php the_permalink(); ?>">
                <div class="gallery-list__img-container">
                  <div class="gallery-list__img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
                  </div>
                </div>
              <h4 class="gallery-list__item-cat">
                <?php
                foreach((get_the_category()) as $category){
                    echo $category->name." ";
                    }
                ?>
              </h4>
              <div class="slash__container">
                <span class="slash">/</span>
              </div>
              <h3 class="gallery-list__item-header font-weight-bold"><?php echo the_title(); ?></h3>
              <!-- <?php the_excerpt(); ?> -->
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
