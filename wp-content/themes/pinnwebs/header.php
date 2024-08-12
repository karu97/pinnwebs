<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
  <!-- #CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!-- #box icon -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- #remix icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- #AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header>
    <a href="<?php bloginfo('url'); ?>/" class=""> <img class="pinnwebs-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
    <ul class="navlist">
      <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="<?php bloginfo('url'); ?>/services">Services</a></li>
      <li><a href="<?php bloginfo('url'); ?>/portfolio">Portfolio</a></li>
      <li><a href="<?php bloginfo('url'); ?>/">Contact</a></li>
    </ul>
    <div class="top-btnn">
      <a href="#contact" class="h-btn header-contact-btn">Contact me</a>
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>