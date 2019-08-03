<?php
// loop over the ACF flexible fields for this page / post
while ( the_flexible_field('my_flexi_field') ) {

      // load the component from the components folder
	  get_template_part( 'components/'. get_row_layout() );

} ?>
