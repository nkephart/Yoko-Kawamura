<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/* Template Name: Top */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php $loop = new WP_Query('page_id='.$post->ID); ?>
      <?php
        while ( $loop->have_posts() ) : $loop->the_post();
          the_content();
        endwhile;
      ?>

      <section class="index-pickup section-wrapper">
        <h2>話題の書籍</h2>
        <ol class="pickup-books cf">
          <?php
            $args = array(
              'post_type' => 'books',
              'tag' => 'pickup',
              'posts_per_page' => '3',
              'paged' => $paged,
            );
          ?>
          <?php query_posts( $args ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <?php twentyfifteen_post_thumbnail(); ?>
            <span <?php post_class(); ?>></span>
            <span><?php the_title( sprintf( '<a href="%s">『', esc_url( get_permalink() ) ), '』</a>' ); ?></span>
            <?php echo '<span>' .get_post(get_post_thumbnail_id())->post_excerpt. '</span>'; ?>
          </li> 
          <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
        </ol>
      </section>

      <section class="index-books section-wrapper">
        <h2>書籍の紹介</h2>
        <ol class="new-books cf">
          <?php
            $args = array(
              'post_type' => 'books',
              'posts_per_page' => '3',
              'paged' => $paged,
            );
          ?>
          <?php query_posts( $args ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <?php twentyfifteen_post_thumbnail(); ?>
            <span><?php the_title( sprintf( '<a href="%s">『', esc_url( get_permalink() ) ), '』</a>' ); ?></span>
            <?php echo '<span>' .get_post(get_post_thumbnail_id())->post_excerpt. '</span>'; ?>
          </li> 
          <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
        </ol>
      </section>

      <section class="index-editorial section-wrapper">
        <h2>編集部より</h2>
        <?php
          $args = array(
            'post_type' => 'editor',
            'posts_per_page' => '1',
            'paged' => $paged
          );
        ?>
        <?php query_posts( $args ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <h3><?php the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>&nbsp;<?php the_date('Y.m.d', '<time>', '</time>'); ?></h3>
          <?php
            /* translators: %s: Name of current post */
            the_content( sprintf(
              __( 'Continue reading %s', 'twentyfifteen' ),
              the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );
          ?>
        <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
        <a href="/test/news" class="link-more">more&nbsp;&gt;&gt;</a>
      </section>

      <section class="index-news section-wrapper cf">
        <h2>お知らせ</h2>
        <ul>
          <li>
            <ol class="news-contents">
              <?php
                $args = array(
                  'post_type' => 'news',
                  'posts_per_page' => '4',
                  'paged' => $paged,
                );
              ?>
              <?php query_posts( $args ); ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <?php
                  the_date('Y.m.d', '<time>', '</time>');
                  the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' );
                ?>
              </li>
              <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
              <li><a href="/test/news" class="link-more">more&nbsp;&gt;&gt;</a></li>
            </ol>
          </li>
        </ul>
      </section>
    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer(); ?>
