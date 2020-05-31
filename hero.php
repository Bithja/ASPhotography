<?php if ( !is_page_template('page-templates/landing.php') ): ?>
  <?php
  $hero_image = get_field('hero_image');
  $hero_text = get_field('hero_text');
   ?>
   <?php if ($hero_image): ?>
     <div class="hero--img" style="background-image: url('<?php echo $hero_image['url'] ?>')">
       <div class="container">
         <div class="row">
           <div class="col-sm-6">
             <h1><?php the_title(); ?></h1>
           </div>
         </div>
       </div>
     </div>
     <?php if ($hero_text): ?>
       <div class="container">
         <div class="row">
           <div class="col-sm-8 txt-large">
             <?php echo $hero_text; ?>
           </div>
         </div>
       </div>
     <?php endif; ?>
     <?php else: ?>
       <div class="container hero--no-img">
         <div class="row">
           <div class="col-12">
             <h1><?php the_title(); ?></h1>
           </div>
           <div class="col-sm-8 txt-large">
             <?php echo $hero_text; ?>
           </div>
         </div>
       </div>
   <?php endif; ?>
<?php endif; ?>
