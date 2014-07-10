<?php
  $title = $fields['title']->content;
  $body = $fields['body']->content;
  $img = $fields['field_imagen']->content;
  $price = $fields['sell_price']->content;
?>
<div class="home-producto first"><?php print $img; ?></a>
  <h4 class="producto-nombre"><?php print $title; ?></h4>
  <div class="producto-body">
    <div class="descripcion">
      <?php print $body; ?>
    </div>
    <div class="acciones"><a href="#" class="precio"><?php print $price; ?></a></div>
  </div>
</div>