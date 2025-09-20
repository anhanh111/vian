<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-column">
      <h3><?php the_field('footer_col1_title'); ?></h3>
      <div><?php the_field('footer_col1_content'); ?></div>
    </div>

    <div class="footer-column">
      <h3><?php the_field('footer_col2_title'); ?></h3>
      <div><?php the_field('footer_col2_content'); ?></div>
    </div>

    <div class="footer-column">
      <h3><?php the_field('footer_col3_title'); ?></h3>
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://youtube.com" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="https://instagram.com" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://tiktok.com" target="_blank">
          <i class="fab fa-tiktok"></i>
        </a>
      </div>
      <div><?php the_field('footer_col3_content'); ?></div>
    </div>

  </div>

  <div class="footer-bottom">
    <p><?php the_field('footer_bottom_text'); ?></p>
  </div>
</footer>

