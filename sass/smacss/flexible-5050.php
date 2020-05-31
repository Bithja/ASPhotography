<?php if ( have_rows( 'columns' ) ) : ?>
    <section class="flex-50">

    <?php while ( have_rows('columns' ) ) : the_row();
        $imgLayout   = get_sub_field('col_image');

        if($imgLayout) {
            $image   = get_sub_field('image');
        } else {
            $content = get_sub_field('content');
            $bgColor = get_sub_field('background_color');
        }

    ?>

        <?php if($imgLayout) { ?>

            <div class="column bgcover bg<?php echo $bgColor; ?> " style="background-image:url('<?php echo $image['url']; ?>')">

            </div>

        <?php }else { ?>

            <div class="column bg<?php echo $bgColor; ?> ">
                <?php echo $content; ?>
            </div>

        <?php } ?>


    <?php endwhile; ?>
    </section>
<?php endif; ?>
