<?php
	$args = array(
		'taxonomy' => 'product_tag',
		'hide_empty' => true,
	);
	$tags = get_terms( $args );
?>

<?php if( ! empty( $tags ) && ! is_wp_error( $tags ) ) : ?>

<section class="js-tag-archive tag-archive">
	
  <div class="tag-archive__button sticky-nav__link" id="js-tag-button">
		<?php echo file_get_contents( get_theme_file_uri( 'assets/images/tag.svg' ) ); ?>
	</div>
	
	<div class="tag-archive__content">

		<h2 class="tag-archive__title">TAGS</h2>

		<ul class="tag-archive__list">

			<?php foreach( $tags as $tag ) : ?>

			<li><a href="<?php echo get_term_link( $tag ); ?>"><?php echo $tag->name; ?></a></li>

			<?php endforeach; ?>

		</ul>
		
	</div>
	
</section>

<?php endif; ?>