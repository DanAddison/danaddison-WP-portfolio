<?php
$image = get_field('card_image');
$size = 'cover_m';
$title = get_field('card_title');
// $icon = 'class="icon-arrow-right"';

$target = '_self';
$link_type = get_field('choose_link_type');

if( $link_type == 'page' ) {
  $link = get_field('page_link');
}

elseif( $link_type == 'category' ) {
  $term = get_field('category_link');
  $link = esc_url( get_term_link( $term ) );
}

elseif( $link_type == 'project' ) {
  $post_object = get_field('project_link');
  $link = get_permalink( $post_object->ID);
}

elseif( $link_type == 'product' ) {
  $post_object = get_field('product_link');
  $link = get_permalink( $post_object->ID);
}

elseif( $link_type == 'external' ) {
  $link = get_field('external_link');
  $target = '_blank';
  // $icon = 'class="icon-new-tab"';
}
?>

<div class="block block-link-card portfolio-summary animated fadeInLeft delay-1s">

  <a href="<?php echo $link; ?>" target="<?php echo $target; ?>">

    <div class="portfolio-summary__image">
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    </div>

    <div class="portfolio-summary__overlay">
      <h2><?php echo $title; ?><span <?php // echo $icon; ?>></span></h2>
    </div>

  </a>
	
</div>