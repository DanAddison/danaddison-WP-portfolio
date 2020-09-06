<?php
/**
 * Block Name: Cover Image - for adding fullscreen background image with responsive sizes
 */
?>

<section class="block block-cover-image">

  <?php // inline styles below add the background image to this section ?>

</section><!-- .block -->


<style type="text/css">
	.block-cover-image {
		background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'cover_image' ), 'cover_s' ); ?>');
	}
	
	@media screen and (min-width: 800px) {
		.block-cover-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'cover_image' ), 'cover_m' ); ?>');
		}				
	}
	
	@media screen and (min-width: 1200px) {
		.block-cover-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'cover_image' ), 'cover_l' ); ?>');
		}				
	}	
	
	@media screen and (min-width: 1700px) {
		.block-cover-image {
			background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'cover_image' ), 'cover_xl' ); ?>');
		}				
	}

</style>