<?php
/* Template Name: Front Page */

get_header();

// Lấy ID của trang Giới thiệu (ở đây là 52)
$about_id = get_the_id();

// Lấy dữ liệu từ ACF của trang Giới thiệu
$bg       = get_field('intro_background', $about_id);
$title    = get_field('banner_title', $about_id);
$subtitle = get_field('banner_subtitle', $about_id);
$desc     = get_field('banner_description', $about_id);
?>

<!-- Section Giới thiệu -->
<section class="section-intro"
  style="background-image: url('<?php echo ($bg && isset($bg['url'])) ? esc_url($bg['url']) : get_template_directory_uri() . '/assets/images/about.jpg'; ?>');">

  <div class="intro-overlay"></div>
  <div class="intro-content">
    <h2><?php echo $title ? esc_html($title) : 'Tiêu đề mặc định'; ?></h2>
    <h3><?php echo $subtitle ? esc_html($subtitle) : 'Phụ đề mặc định'; ?></h3>
    <p><?php echo $desc ? esc_html($desc) : 'Mô tả mặc định'; ?></p>
  </div>
</section>
<section class="section-food">
  <div class="food-overlay"></div>
  <div class="food-container">
    <h2 class="section-title"><?php the_field('food_title'); ?></h2>
    <div class="food-list">

      <!-- Món 1 -->
      <div class="food-item">
        <?php $img1 = get_field('food1_image'); ?>
        <?php if ($img1): ?>
          <div class="food-image">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('food1_name')); ?>">
          </div>
        <?php endif; ?>
        <h3><?php the_field('food1_name'); ?></h3>
        <p><?php the_field('food1_desc'); ?></p>
      </div>

      <!-- Món 2 -->
      <div class="food-item">
        <?php $img2 = get_field('food2_image'); ?>
        <?php if ($img2): ?>
          <div class="food-image">
            <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('food2_name')); ?>">
          </div>
        <?php endif; ?>
        <h3><?php the_field('food2_name'); ?></h3>
        <p><?php the_field('food2_desc'); ?></p>
      </div>

      <!-- Món 3 -->
      <div class="food-item">
        <?php $img3 = get_field('food3_image'); ?>
        <?php if ($img3): ?>
          <div class="food-image">
            <img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo esc_attr(get_field('food3_name')); ?>">
          </div>
        <?php endif; ?>
        <h3><?php the_field('food3_name'); ?></h3>
        <p><?php the_field('food3_desc'); ?></p>
      </div>

      <!-- Món 4 -->
      <div class="food-item">
        <?php $img4 = get_field('food4_image'); ?>
        <?php if ($img4): ?>
          <div class="food-image">
            <img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo esc_attr(get_field('food4_name')); ?>">
          </div>
        <?php endif; ?>
        <h3><?php the_field('food4_name'); ?></h3>
        <p><?php the_field('food4_desc'); ?></p>
      </div>

    </div>
  </div>
</section>



<!-- KHÔNG GIAN NHÀ HÀNG -->
<section class="section-space"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg');">

  <div class="space-overlay"></div>
  <div class="space-container">
    <h2 class="section-title">
      <?php echo get_field('space_section_title') ?: 'KHÔNG GIAN NHÀ HÀNG'; ?>
    </h2>

    <div class="space-list">
      <?php
      $space_images = [
        get_field('space_image1'),
        get_field('space_image2'),
        get_field('space_image3')
      ];

      foreach ($space_images as $index => $image) :
        if ($image): ?>
          <div class="space-item">
            <div class="space-image">
              <img src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt'] ?: 'Space ' . ($index + 1)); ?>">
            </div>
          </div>
      <?php endif;
      endforeach; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>