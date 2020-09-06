<?php 
$image = get_field( 'lazy_image' );
$size = 'cover_s';
$thumb = $image['sizes'][ $size ];

$categories_list = get_the_category_list( esc_html__( ', ', 'wheelbarrow' ) );
?>

<article class="post-preview">

  <?php if( !empty( $image ) ): ?>
    <div class="post-preview__image">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      </a>
    </div>
  <?php endif; ?>
	
	<div class="post-preview__content">

		<header class="post-header">

			<p class="post-meta">

				<span class="post-date">
					<?php the_time('l d M Y'); ?>
				</span>

				<?php if ( $categories_list ) {
					printf( '<span class="cat-links">' . esc_html__( '%1$s', 'wheelbarrow' ) . '</span>', $categories_list );
				} ?>

			</p><!-- .post__meta -->

			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>

			<p class="post-author">
				<?php the_author(); ?>
			</p>

		</header>

		<div class="post__excerpt">
			<?php the_excerpt(); ?>		
		</div><!-- .post__excerpt -->

	</div><!-- .post-preview__content -->

</article>