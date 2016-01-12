<?php

add_action( 'wp_enqueue_scripts', 'the_wp_parent_theme_enqueue_styles' );

function the_wp_parent_theme_enqueue_styles() {
  /** require parent theme stylesheet */
  wp_enqueue_style( 'the-wp-style', get_template_directory_uri() . '/style.css' );
  /* stylesheet is load on parent theme as default */
//    wp_enqueue_style( 'my-the-wp-style',
//        get_stylesheet_directory_uri() . '/style.css',
//        array( 'the-wp-style' )
//    );

}

function my_the_wp_footer(){?>
</div><!-- #content -->
  <footer id="colophon" class="site-footer" role="contentinfo">
      <!--footer widgets-->
        <div class="widgets">
          <!-- Full width widget -->
          <?php if ( is_active_sidebar( 'footer-full' ) ) : ?>
                <div class="footer-full"><?php dynamic_sidebar( 'footer-full' ); ?></div>
            <?php endif; ?>
            <!-- Side by side widgets -->
            <div class="wrap">
            <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                <div class="footer-left"><?php dynamic_sidebar( 'footer-left' ); ?></div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
                <div class="footer-center"><?php dynamic_sidebar( 'footer-center' ); ?></div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <div class="footer-right"><?php dynamic_sidebar( 'footer-right' ); ?></div>
            <?php endif; ?>
            </div>
        </div>

        <!-- .... -->
    <div class="site-info">
      footer text here
    </div><!-- .site-info -->
  </footer><!-- #colophon -->

    <div id="back_top"><i class="fa fa-angle-up"></i></div><?php
}

