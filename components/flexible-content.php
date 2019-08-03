<?php
/* Component Name: Flexible Content */

?>


<?php if(have_rows('flexible_layouts')):

	while(have_rows('flexible_layouts')): the_row();

		get_template_part( 'components/flexible-layouts/' . get_row_layout() );

	endwhile;

else:

endif;

?>
