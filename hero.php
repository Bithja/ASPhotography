<?php if ( !is_page_template('page-templates/landing.php') ): ?>
  <?php
  $inside_pages_hero = get_field('inside_pages_hero', 'option');
   ?>
  <div class="inside-hero" style="background-image: url('<?php echo $inside_pages_hero['url'] ?>')">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
