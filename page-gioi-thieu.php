<?php
/* Template Name: Giới thiệu */
get_header();
?>

<section class="about-banner">
    <?php echo do_shortcode('[smartslider3 slider="5"]'); ?> <!-- Background -->
    
    <div class="about-container">
        <div class="about-text">
            <h2><?php the_field('about_title'); ?></h2>
            <p class="subtitle"><?php the_field('about_subtitle'); ?></p>
            <div class="desc"><?php the_field('about_content'); ?></div>
        </div>

        <div class="about-slider">
            <?php echo do_shortcode('[smartslider3 slider="6"]'); ?>
        </div>
    </div>
</section>
<!-- Section Giới thiệu 2 -->
<section class="about-video">
  <div class="container">

    <!-- Cột Text -->
    <div class="about-video-text">
      <h2><?php the_field('about2_title'); ?></h2>
      <div class="desc">
        <?php the_field('about2_content'); ?>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>
