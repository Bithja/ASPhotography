<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

define('FS_METHOD','direct');



/*Custom Post type start*/

function register_custom_post_type() {

// Register Gallery
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('Galleries', 'plural'),
'singular_name' => _x('Gallery', 'singular'),
'menu_name' => _x('Gallery', 'admin menu'),
'name_admin_bar' => _x('Gallery', 'admin bar'),
'add_new' => _x('Add Gallery', 'add new'),
'add_new_item' => __('Add New Gallery'),
'new_item' => __('New Gallery'),
'edit_item' => __('Edit Gallery'),
'view_item' => __('View Gallery'),
'all_items' => __('All Galleries'),
'search_items' => __('Search Galleries'),
'not_found' => __('No Galleries found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'menu_position' => 5,
'menu_icon' => 'dashicons-format-gallery',
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'gallery'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('gallery', $args);
}
add_action('init', 'register_custom_post_type');

/*Custom Post type end*/


function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
