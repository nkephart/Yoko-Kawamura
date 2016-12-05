<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
        <aside>
          <section id="latest-posts">
            <h3>最新の記事</h3>
          <?php
          unset( $args, $loop );
          global $post;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '5',
            'paged' => '1'
          );
          $loop = get_posts( $args );

          foreach( $loop as $post ) {
            setup_postdata( $post );
          ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?>>
              <time><?php the_time('Y年m月d日'); ?></time>
              <ul>
                <li><a href="<?php the_permalink(); ?>" class="img-eyecatch"></a></li>
                <li><?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></li>
              </ul>
            </div>
          <?php
          } wp_reset_postdata();
          ?>
          </section>

          <section id="archive-posts">
            <h3>月別アーカイブ</h3>
          <?php
          unset( $args, $loop );
          global $post;
          $args = array(
            'type' => 'monthly',
            'limit' => '12',
            'format' => 'custom',
            'before' => '<li>&middot;&nbsp;',
            'after' => '</li>',
            'show_post_count' => true,
            'post_type' => 'post',
            'posts_per_page' => '1'
          );
          $loop = get_posts( $args );

          foreach( $loop as $post ) {
            setup_postdata( $post );
          ?>
            <ol>
              <?php wp_get_archives( $args ); ?>
            </ol>
          <?php
          } wp_reset_postdata();
          ?>
          </section>
        </aside>
