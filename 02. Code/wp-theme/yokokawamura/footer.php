<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    <footer id="colophon" class="footer" role="contentinfo">
      <a href="#" class="scroll-top">&and;&nbsp;ページトップ</a>
      <div class="footer-contents">
        <nav role="navigation" class="footer-nav">
          <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="ホーム" rel="home">ホーム
            </a></li><li><a href="<?php echo esc_url( home_url( '/#body-motto' ) ); ?>" title="方針">方針
            </a></li><li><a href="<?php echo esc_url( home_url( '/#body-price' ) ); ?>" title="費用">費用
            </a></li><li><a href="<?php echo esc_url( home_url( '/#body-intro' ) ); ?>" title="弁護士紹介">弁護士紹介
            </a></li><li><a href="<?php echo esc_url( home_url( '/#body-firm' ) ); ?>" title="事務所">事務所
            </a></li><li><a href="<?php echo esc_url( home_url( '/#body-access' ) ); ?>" title="アクセス">アクセス
            </a></li><li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" title="ブログ">ブログ</a></li>
          </ol>
        </nav>
        <span>@&nbsp;<?php echo date('Y'); ?>&nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Yoko Kawamura Law Office. All Rights Reserved.</a></span>
      </div>
    </footer><!-- .footer -->
    <?php wp_footer(); ?>
  </div><!-- .content-area -->
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.scroll-top').click(function(){
        jQuery('html,body').animate({scrollTop:0},'fast');
        return false;
      });
    });
  </script>
  <?php if ( is_page('4') ) : ?><!-- If is Top page -->
  <script>
    jQuery(function() {
      jQuery('a[href*=#]').click(function(){
        var target = jQuery(this.hash);
        if (target) {
          var targetOffset = target.offset().top;
          jQuery('html,body').animate({scrollTop: targetOffset},'fast');
          return false;
        }
      });
    });
  </script>
  <?php endif; ?>
</body>
</html>
