<?php
/**
 * Block Name: Page Heading - used for displaying a custom page heading which is not linked to the page's slug or nav item
 */

$title_1 = get_field('title_line_1');
$title_2 = get_field('title_line_2');
$subtitle = get_field('subtitle');
?>

<div class="block block-page-heading">

  <h1>

    <?php if ($title_1 != ''): ?>
    <span class="line-1 animated fadeInRight"><?php echo $title_1 ?></span>
    <?php endif; ?>

    <span class="line-2 animated fadeInRight"><?php echo $title_2 ?></span>

  </h1>

  <?php if ($subtitle != ''): ?>
  <p class="subtitle animated fadeInLeft delay-1s"><?php echo $subtitle ?></p>
  <?php endif; ?>
  
</div><!-- .block -->