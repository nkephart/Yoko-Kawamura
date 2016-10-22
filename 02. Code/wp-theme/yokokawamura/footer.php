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
        <p>サイトマップなどの説明</p>
        <p>@2016&nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Yoko Kawamura Law Office</a></p>
      </div>
    </footer><!-- .footer -->
    <?php wp_footer(); ?>
  </div><!-- .content-area -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- jQuery -->
<script type="text/javascript">
  $(function() {
    $('.scroll-top').click(function(){
      $('html,body').animate({scrollTop:0},'fast');
      return false;
    });
  });
</script>
<?php if ( is_page('4') ) : ?><!-- If is Top page -->
  <script>
    $(function() {
      $('a[href*=#]').click(function(){
        var target = $(this.hash);
        if (target) {
          var targetOffset = target.offset().top;
          $('html,body').animate({scrollTop: targetOffset},'fast');
          return false;
        }
      });
    });
  </script>
<?php endif; ?>
</body>
</html>
