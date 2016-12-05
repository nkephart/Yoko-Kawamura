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
          'posts_per_page' => '3',
          'paged' => $paged
        );
        $loop = new WP_Query( $args );
        $max_num_pages = $loop->max_num_pages;

        while( $loop->have_posts() ) : $loop->the_post();
        ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <time><?php the_time( 'Y年m月d日' ); ?></time>
            <?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); the_content(); ?>
          </div>
        <?php
        endwhile;
        ?>
          <nav class="pagination">
            <ul>
              <li class="pagi-prev"><?php previous_posts_link( '&lang;&nbsp;前のページ', $max_num_pages ); ?>
              </li><li class="pagi-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="ホーム" rel="home">ホーム</a>
              </li><li class="pagi-next"><?php next_posts_link( '次のページ&nbsp;&rang;', $max_num_pages ); ?></li>
            </ul>
          </nav>
        <?php
        wp_reset_postdata();
        ?>
        </section>

        <?php
        get_template_part( 'aside' );
        ?>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
