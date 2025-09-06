<?php
/* Template Name: Front Page */
get_header(); 
?>

<!-- Banner (gọi từ plugin qua shortcode) -->
<?php echo do_shortcode('[vian_banner]'); ?>

<!-- Section Giới thiệu -->
<section class="section-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg');">
  <div class="intro-overlay"></div>
  <div class="intro-content">
    <h2>Vị An — Cơm ngon tròn vị</h2>
    <h3>Nhà hàng cơm Việt, quán cơm gia đình ngon tại Hà Nội</h3>
    <p>Tại Vị An, triết lý của chúng tôi rất đơn giản: chia sẻ hương vị và văn hóa thưởng thức cơm Việt tới tất cả mọi người...</p>
    <p>Không gian tại nhà hàng cơm Vị An được lấy cảm hứng từ những giá trị truyền thống...</p>
  </div>
</section>

<section class="section-food" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound.png');">
  <div class="food-overlay"></div>
  <div class="food-container">
    <h2 class="section-title">ẨM THỰC</h2>
    <div class="food-list">
      <!-- Món ăn 1 -->
      <div class="food-item">
        <div class="food-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thit-rang.jpg" alt="Thịt rang cháy cạnh">
        </div>
        <h3>THỊT RANG CHÁY CẠNH</h3>
        <p>Từng miếng thịt được thái vừa vặn, đảo qua lớp lửa để các mặt xém cạnh...</p>
      </div>

      <!-- Món ăn 2 -->
      <div class="food-item">
        <div class="food-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ca-bong.jpg" alt="Cá bống chiên giòn">
        </div>
        <h3>CÁ BỐNG CHIÊN GIÒN</h3>
        <p>Căn chỉnh ở nhiệt độ dầu sôi vừa phải, từng miếng cá bống nhỏ được ướp vừa vặn...</p>
      </div>

      <!-- Món ăn 3 -->
      <div class="food-item">
        <div class="food-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thit-kho.jpg" alt="Thịt kho trứng cút">
        </div>
        <h3>THỊT KHO TRỨNG CÚT</h3>
        <p>Từng miếng thịt ba chỉ được chọn lọc, tẩm ướp theo đúng hương vị chuẩn miền Bắc...</p>
      </div>

      <!-- Món ăn 4 -->
      <div class="food-item">
        <div class="food-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/canh-cua.jpg" alt="Canh cua mùng tơi">
        </div>
        <h3>CANH CUA MÙNG TƠI</h3>
        <p>Bát canh cua nóng hổi, thơm mùi gạch cua đem lại một cảm giác đồng quê quen thuộc...</p>
      </div>
    </div>
  </div>
</section>

<!-- KHÔNG GIAN NHÀ HÀNG -->
<section class="section-space" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg');">
  <div class="space-overlay"></div>
  <div class="space-container">
    <h2 class="section-title">KHÔNG GIAN NHÀ HÀNG</h2>
    <div class="space-list">
      
      <!-- Hình 1 -->
      <div class="space-item">
        <div class="space-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/space-1.jpg" alt="Không gian 1">
        </div>
      </div>

      <!-- Hình 2 -->
      <div class="space-item">
        <div class="space-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/space-2.jpg" alt="Không gian 2">
        </div>
      </div>

      <!-- Hình 3 -->
      <div class="space-item">
        <div class="space-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/space-3.jpg" alt="Không gian 3">
        </div>
      </div>

    </div>
    <a href="#" class="btn-viewmore">XEM THÊM</a>
  </div>
</section>




<?php get_footer(); ?>
