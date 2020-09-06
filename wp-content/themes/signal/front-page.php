<?php
/**
 * The template for displaying the front page
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>

		<article class="page page--home">

		<?php // get_template_part( 'parts/page-header' ); ?>

		<?php get_template_part( 'parts/page-entry' ); ?>

		</article>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
