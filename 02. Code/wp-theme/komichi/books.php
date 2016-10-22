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

/* Template Name: Books */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <?php
          $args = array(
            'post_type' => 'books', /* 投稿タイプを指定 */
            'paged' => $paged,
          );
        ?>
        <?php query_posts( $args ); ?>

        <?php $loop = new WP_Query('page_id='.$post->ID); ?>
        <?php
          while ( $loop->have_posts() ) : $loop->the_post();
            the_content();
          endwhile;
        ?>

        <div class="books-header cf">
          <nav class="books-nav">
            <ul>
              <li class="n01"><a href="/test/books" class="current" ?> title="全ての本">全ての本
              </a></li><li class="n02"><a href="/test/category/n02" <?php body_class(); ?> title="こころの健康">こころの健康
              </a></li><li class="n03"><a href="/test/category/n03" <?php body_class(); ?> title="からだの健康">からだの健康
              </a></li><li class="n04"><a href="/test/category/n04" <?php body_class(); ?> title="社会・思想・哲学">社会・思想・哲学
              </a></li><li class="n05"><a href="/test/category/n05" <?php body_class(); ?> title="ノンフィクション">ノンフィクション
              </a></li><li class="n06"><a href="/test/category/n06" <?php body_class(); ?> title="文学・絵本">文学・絵本
              </a></li><li class="n07"><a href="/test/category/n07" <?php body_class(); ?> title="英語の教え方・学び方">英語の教え方・学び方
              </a></li>
              <li>
                <form class="search-form" method="get" action="<?php bloginfo('url'); ?>/">
                  <label class="search-text" for="s"></label>
                  <input class="search-field" placeholder="検索 ..." type="text" name="s" value="<?php echo $_GET['s']; ?>" />
                  <input class="search-submit" type="image" value="検索">
                </form>
              </li>
            </ul>
          </nav>
        </div>  

        <?php numeric_nav();
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'books' );

		// End the loop.
		endwhile;
        numeric_nav();
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
