<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <main id="main" class="site-main" role="main">
      <article>
        <section id="blog-header">
          <div class="bh-inner">
            <h2>日々のBLOG</h2>
            <p>よくある問題や、争いになりやすい事柄についての記事を掲載しております。</p>
          </div>
          <div class="bh-image"></div>
        </section>

        <section id="blog-single">
          <?php while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' );
            the_content();
		  endwhile; ?>
          <span class="bs-back"><a href="javascript:history.back();" rel="prev">&lang;&nbsp;前のページに戻る</a></span>
        </section>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
