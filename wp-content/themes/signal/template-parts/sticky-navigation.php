<div class="sticky-nav">

  <!-- tags -->
  <?php get_template_part ('parts/tags-navigation'); ?>

  <!-- mini cart -->
  <a class="sticky-nav__link" href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>">
    <?php echo file_get_contents( get_theme_file_uri( 'assets/images/basket.svg' ) ); ?>
      <p class="sticky-nav__cart--count">
        <?php echo WC()->cart->get_cart_contents_count(); ?> 
      </p>
  </a>

  <a class="sticky-nav__link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
    <?php echo file_get_contents( get_theme_file_uri( 'assets/images/user-account.svg' ) ); ?>
  </a>

</div>