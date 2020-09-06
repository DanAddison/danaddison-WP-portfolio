<?php  

add_action( 'after_setup_theme', 'signal_register_image_sizes' );
function signal_register_image_sizes() {
  // uncropped size, larger than default 'large' but potentially much smaller than 'full'. Used for srcset.
  add_image_size( 'xtra_large', 1800, 9999 ); 
  // width*0.6 = height
  add_image_size( 'cover_placeholder', 100, 60, true );
  add_image_size( 'cover_s', 800, 480, true );
  add_image_size( 'cover_m', 1200, 720, true );
  add_image_size( 'cover_l', 1700, 1020, true );
  add_image_size( 'cover_xl', 2200, 1320, true );
}

add_filter( 'image_size_names_choose', 'signal_add_custom_image_size_names' );
function signal_add_custom_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    // add any of the above custom image sizes that you want available as an option in GB blocks
    'xtra_large' => __( 'XL' )
  ) );
}