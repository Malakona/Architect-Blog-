<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?> — Home</title>
  <meta name="description" content="Sito demo di architetto con portfolio progetti e blog (statico HTML)." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php body_class(); ?>>
  <header>
  <div class="container nav">
    <a class="brand" href="<?php echo home_url(); ?>" aria-label="Home Studio">
      <strong>Studio Linea</strong>
      <span>Arch. Martina Conti</span>
    </a>

    <nav class="navlinks" aria-label="Menu principale">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
          'items_wrap'     => '%3$s',
        ));
      ?>
    </nav>
  </div>
</header>