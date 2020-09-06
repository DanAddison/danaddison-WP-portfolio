<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>
		
		<div class="row row--pad">
			
			<p class="breadcrumb"><a href="/blog">Blog</a> > <?php the_title(); ?></p>

			<article class="post post--blog">

				<?php get_template_part('parts/lazy-image'); ?>

	
				<?php get_template_part('parts/post-header'); ?>
				
				<div class="post__entry">
				
					<?php the_content(); ?>
				
				</div>
		
			</article>

			<?php 
			/**
			 *  Output comments wrapper if it's a post, or if comments are open,
			 * or if there's a comment number – and check for password.
			 * */
			if ( ( is_single() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) : ?>
			<?php comments_template(); ?>
			<?php endif; ?>

			<?php // get_sidebar(); ?>

		</div>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
