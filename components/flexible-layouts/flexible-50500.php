<?php
/* Component Name: Flexible 5050 */
$position   = get_sub_field('image_position');
$content    = get_sub_field('content');
$image      = get_sub_field('image');

?>

<div class="container fifty">
    <div class="row">
        <div    class="col-sm-6 image <?php echo ( $position === 'right' ? 'order-last' : '' ); ?>"
                style="background-image:url('<?php echo $image['url']; ?>');" >
            image here
        </div>

        <div class="col-sm-6 content">
            <?php
                echo $content;
             ?>
        </div>
    </div>



</div>