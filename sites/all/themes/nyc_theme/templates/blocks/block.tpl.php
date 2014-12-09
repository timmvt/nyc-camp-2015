<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($block_title): ?>
    <h2<?php print $title_attributes; ?>><?php print $block_title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content content-block"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
  
</section>