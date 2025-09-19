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

      <!-- Menu -->
      <nav class="site-nav">
        <ul class="primary-menu">
          <li><a href="<?php echo home_url('/gioi-thieu'); ?>">Giới thiệu</a></li>
          <li><a href="<?php echo home_url('/thuc-don'); ?>">Thực đơn</a></li>
          <li><a href="<?php echo home_url('/dat-ban'); ?>">Đặt bàn</a></li>
          <li><a href="<?php echo home_url('/album-anh'); ?>">Album ảnh</a></li>
          <li><a href="<?php echo home_url('/lien-he'); ?>">Liên hệ</a></li>
        </ul>
      </nav>

        <!-- Language Switcher -->
        <div class="header-language-switcher">
        <?php 
        if (function_exists('pll_the_languages')) {
        pll_the_languages(array(
            'dropdown' => 0,     // 0 = hiển thị link trực tiếp, không thả xuống
            'show_flags' => 1,   // hiển thị cờ
            'show_names' => 1,   // hiển thị tên ngôn ngữ
            'display_names_as' => 'name', // hiển thị tên ngôn ngữ đầy đủ
            'hide_if_empty' => 0 // hiển thị ngay cả khi không có ngôn ngữ khác
        ));
    }
    ?>
</div>
        
    </div>
  </header>

  <!-- Slider tích hợp Smart Slider 3 -->
  <div class="home-slider">
    <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
  </div>
