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
        </section>

        <aside id="past-posts">
          <h3>これまでの記事</h3>
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => '5',
              'paged' => $paged
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
        </aside>
      </article>
    </main><!-- .site-main -->

<?php get_footer(); ?>
