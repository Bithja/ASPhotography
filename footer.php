<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( !is_page( 'Home' )): ?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer">
	<div class="container" id="wrapper-footer">

			<div class="row">

				<div class="col-md-12">

					<footer class="site-footer" id="colophon">

						<nav class="">




								<!-- The WordPress Menu goes here -->
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'footer',
										'container_class' => 'navbarFooter',
										'container_id'    => 'navbarFooter',
										'menu_class'      => 'navbar-footer',
										'fallback_cb'     => '',
										'menu_id'         => 'footer-menu',
										'depth'           => 1,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>

						</nav><!-- .site-navigation -->

					</footer><!-- #colophon -->

				</div><!--col end -->

			</div><!-- row end -->

	</div><!-- wrapper end -->
</div>


</div><!-- #page we need this extra closing tag here -->

<?php else: ?>

<?php endif ?>

<?php wp_footer(); ?>


</body>

</html>
