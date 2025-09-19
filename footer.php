<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-column">
      <?php if ( is_active_sidebar('footer-1') ) : ?>
          <?php dynamic_sidebar('footer-1'); ?>
      <?php endif; ?>
    </div>

    <div class="footer-column">
      <?php if ( is_active_sidebar('footer-2') ) : ?>
          <?php dynamic_sidebar('footer-2'); ?>
      <?php endif; ?>
    </div>

    <div class="footer-column">
      <?php if ( is_active_sidebar('footer-3') ) : ?>
          <?php dynamic_sidebar('footer-3'); ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Copyright © <?php echo date('Y'); ?> <strong>Vị An – Cơm ngon tròn vị</strong>. All rights reserved.</p>
    <p><a href="#">Bảo mật thông tin</a> | <a href="#">Liên hệ</a></p>
  </div>
</footer>
