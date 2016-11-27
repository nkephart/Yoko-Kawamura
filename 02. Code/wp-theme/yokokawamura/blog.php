<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/* Template Name: Blog */

get_header(); ?>

    <main id="main" class="site-main cf" role="main">
      <article>
        <section id="blog-header">
          <div class="bh-inner">
            <h2>日々のBLOG</h2>
            <p>よくあるご相談や、争いになりやすい事柄についての記事を掲載しています。</p>
          </div>
          <div class="bh-image"></div>
        </section>
        
        <section id="blog-posts">
          <?php
            $args = array(
              'post_type' => 'post',
              'paged' => $paged
            );
          ?>
          <?php query_posts( $args ); ?>

          <?php
            $loop = new WP_Query('page_id='.$post->ID);
            while ( have_posts() ) : the_post();
          ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <time><?php the_time('Y年m月d日'); ?></time>
              <?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
              the_content(); ?>
            </div>
          <?php endwhile; ?>
          <nav class="pagination">
            <ul>
              <li class="pagi-prev"><?php previous_posts_link('&lang;&nbsp;前のページ'); ?>
              </li><li class="pagi-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="ホーム" rel="home">ホーム</a>
              </li><li class="pagi-next"><?php next_posts_link('次のページ&nbsp;&rang;'); ?></li>
            </ul>
          </nav>
        </section>

        <aside>
          <section id="latest-posts">
            <h3>最新の記事</h3>
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => '5',
                'paged' => '1'
              );
            ?>
            <?php query_posts( $args ); ?>

            <?php
              $loop = new WP_Query('page_id='.$post->ID);
              while ( have_posts() ) : the_post();
            ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?>>
              <time><?php the_time('Y年m月d日'); ?></time>
              <ul>
                <li><?php twentysixteen_post_thumbnail(); ?></li>
                <li><?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></li>
              </ul>
            </div>
            <?php endwhile; ?>
          </section>
<!--
          <section id="category-posts">
            <h3>カテゴリー</h3>
            <ul>
              <li class="category-kiji">記事&hellip;()</li>
              <li class="category-jimusho">事務所&hellip;()</li>
              <li class="category-others">その他&hellip;()</li>
            </ul>
          </section>
-->
          <section id="archive-posts">
            <h3>月別アーカイブ</h3>
            <?php
              $args = array(
                'type' => 'monthly',
                'limit' => '12',
                'format' => 'custom',
                'before' => '<li>&middot;&nbsp;',
                'after' => '</li>',
                'show_post_count' => true,
                'post_type' => 'post'
              );
            ?>
            <ol>
              <?php wp_get_archives( $args ); wp_reset_postdata(); wp_reset_query(); ?>
            </ol>
          </section>
        </aside>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
