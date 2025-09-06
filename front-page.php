<?php
/* Template Name: Front Page */
get_header(); 
?>

<!-- Banner -->
<section class="home-banner">
  <div class="banner-slider">
    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg');"></div>
    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg');"></div>
    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg');"></div>
  </div>

  <!-- Nút chấm tròn -->
  <div class="banner-dots"></div>
</section>

<?php get_footer(); ?>
