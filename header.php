<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="container header-inner">

      <!-- Logo -->
      <div class="site-logo">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<a href="' . esc_url(home_url('/')) . '">
              <img src="' . get_template_directory_uri() . '/assets/images/logo.png" 
                   alt="' . get_bloginfo('name') . '">
            </a>';
        }
        ?>
      </div>

      <!-- Menu động theo ngôn ngữ -->
      <nav class="site-nav">
        <?php
        if (function_exists('pll_current_language')) {
          if (pll_current_language() == 'vi') {
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu'           => 'Menu VI',
              'container'      => false,
              'menu_class'     => 'primary-menu'
            ));
          } else {
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu'           => 'Menu EN',
              'container'      => false,
              'menu_class'     => 'primary-menu'
            ));
          }
        }
        ?>
      </nav>

      <!-- Language Switcher -->
      <div class="header-language-switcher">
        <?php
        if (function_exists('pll_the_languages')) {
          pll_the_languages(array(
            'dropdown'        => 0,
            'show_flags'      => 1,
            'show_names'      => 1,
            'display_names_as'=> 'name',
            'hide_if_empty'   => 0
          ));
        }
        ?>
      </div>

    </div>
  </header>

  <!-- Slider Smart Slider 3 -->
  <div class="home-slider">
    <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
  </div>
