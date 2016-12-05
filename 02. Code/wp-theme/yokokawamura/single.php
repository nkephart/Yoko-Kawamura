<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <main id="main" class="site-main cf" role="main">
      <article>
        <section id="blog-header">
          <div class="bh-inner">
            <h2>日々のBLOG</h2>
            <p>よくある問題や、争いになりやすい事柄についての記事を掲載しております。</p>
          </div>
          <div class="bh-image"></div>
        </section>

        <section id="single-posts">
        <?php
        while ( have_posts() ) : the_post();
          echo '<time>', the_time( 'Y年m月d日' ), '</time>';
          the_title( '<h2>', '</h2>' );
          the_content();
        ?>
          <nav class="pagination">
            <ul>
              <li class="pagi-prev"><?php next_post_link( '%link', '&lang;&nbsp;次の記事' ); ?>
              </li><li class="pagi-home"><a href="/blog" title="ホーム" rel="home">一覧に戻る</a>
              </li><li class="pagi-next"><?php previous_post_link( '%link', '前の記事&nbsp;&rang;' ); ?></li>
            </ul>
          </nav>
        <?php
		endwhile;
        ?>
        </section>

        <?php
        get_template_part( 'aside' );
        ?>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
