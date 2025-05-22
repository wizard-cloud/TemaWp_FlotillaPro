<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style>
    /* Smooth scroll nativo */
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
    <!-- Logo personalizado -->
    <div class="site-logo">
      <?php
      if ( function_exists('the_custom_logo') && has_custom_logo() ) {
        the_custom_logo();
      } else { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" style="max-height:50px;">
        </a>
      <?php } ?>
    </div>

    <!-- Menú con anclas a secciones -->
    <nav class="site-nav">
      <ul class="menu-items" style="list-style:none; margin:0; padding:0; display:flex;">
        <li style="margin-left:20px;">
          <a href="<?php echo esc_url(home_url('/')); ?>#servicios">Servicios</a>
        </li>
        <li style="margin-left:20px;">
          <a href="<?php echo esc_url(home_url('/')); ?>#flotilla">Flotilla</a>
        </li>
        <li style="margin-left:20px;">
          <a href="<?php echo esc_url(home_url('/')); ?>#contacto">Contacto</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
