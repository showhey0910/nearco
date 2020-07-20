<footer id="footer" class="footer">
  <div class="footer-inner">
    <div class="footer-nav-wrap">
      <?php wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
            ) ); ?>
    </div> 
    <div class="copyright">
      <p>© 2020 Showhey</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>