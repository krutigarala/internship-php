<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('misbah-blog-footer-sidebar')) {
        echo '<div class="row sidebar-area">';
          dynamic_sidebar('misbah-blog-footer-sidebar');
        echo '</div>';
      }
    ?>

    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3">
          <?php
            if (!get_theme_mod('misbah_blog_footer_text') ) {
              esc_html_e('Blog WordPress ', 'misbah-blog');
            } else {
              echo esc_html(get_theme_mod('misbah_blog_footer_text'));
            }
          ?>
          <?php 
          /* translators: %s: Misbah WP */ 
          printf( esc_html__( ' Theme by %s', 'misbah-blog' ), 'Misbah WP' ); ?>
          <a href="<?php echo esc_url(__('https://wordpress.org', 'misbah-blog' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'misbah-blog' ), 'WordPress' ); ?></a>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
