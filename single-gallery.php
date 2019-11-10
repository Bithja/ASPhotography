<?php get_header(); ?>
<?php $intro = get_field('intro'); ?>
<?php $image_gallery = get_field('image_gallery'); ?>
<div class="">
  <section class="page-section single-gallery">
    <div class="container">
      <div class="row">
        <div class="col-8 txt-large mb-70">
          <?php echo $intro; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 single-gallery__items">
          <?php echo $image_gallery; ?>
        </div>
      </div>
    </div>
  </section>
</div>


<?php get_footer(); ?>
