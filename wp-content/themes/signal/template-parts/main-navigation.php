<?php
/**
 * Displays main site header navigation
 *
 * @package signal
 * @version 1.0
 */
?>
<nav class="main-nav" id="site-main-navigation">

	<h1 class="screen-reader-text">Main Menu</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container' => false,
				'menu_class' => 'menu menu--main'
			)
		);
	?>

		<!-- add search -->
	<?php get_template_part( 'searchform' ); ?>

</nav><!-- #site-main-navigation -->