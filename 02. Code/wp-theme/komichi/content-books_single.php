<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="javascript:history.back();" class="link-previous">&lt;&lt;&nbsp;前のページに戻る</a>
  <div class="books-single">
    <header class="entry-header">
      <ul class="entry-image">
        <li><?php twentyfifteen_post_thumbnail(); ?>
        </li><li><img src="<?php echo post_image_capture(); ?>" class="entry-subimage" /></li>
      </ul>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
      <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
          __( 'Continue reading %s', 'twentyfifteen' ),
          the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );

        wp_link_pages( array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
          'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
          'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
      ?>
    </div><!-- .entry-content -->
  </div>
  <a href="javascript:history.back();" class="link-previous">&lt;&lt;&nbsp;前のページに戻る</a>
</section><!-- #post-## -->
