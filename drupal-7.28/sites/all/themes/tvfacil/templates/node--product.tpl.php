<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php
    hide($content['sell_price']);
    //hide($content['cop']);
  ?>

  <div class="desc">
    <?php print render($content['body']); ?>
  </div>
  <div class="meta">
    <?php print render($content['sell_price']); ?>
    <?php print render($content['add_to_cart']); ?>
    <?php print render($content['field_tipo']); ?>
    <?php print render($content['field_marca']); ?>
    <?php print render($content['easy_social_1']); ?>
  </div>
    
</article>
