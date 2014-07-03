<!DOCTYPE html>
<html <?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page; ?>
  <?php print $scripts; ?>
</body>
</html>
