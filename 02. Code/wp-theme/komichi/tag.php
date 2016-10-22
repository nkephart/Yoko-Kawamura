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

/* Template Name: Tag Archive */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <?php
          $args = array(
            'post_type' => 'books',
            'paged' => $paged,
            'category' => single_cat_title('', false),
          );
        ?>
        <?php query_posts( $args ); ?>

        <h2 class="banner-books" title="書籍の紹介">書籍の紹介</h2>

        <div class="books-header cf">
          <nav class="books-nav">
            <ul>
              <li><a href="#" class="n01" title="全ての本">全ての本
              </a></li><li><a href="#" class="n02" title="こころの健康">こころの健康
              </a></li><li><a href="#" class="n03" title="からだの健康">からだの健康
              </a></li><li><a href="#" class="n04" title="社会・思想・哲学">社会・思想・哲学
              </a></li><li><a href="#" class="n05" title="ノンフィクション">ノンフィクション
              </a></li><li><a href="#" class="n06" title="文学・絵本">文学・絵本
              </a></li><li><a href="#" class="n07" title="英語の教え方・学び方">英語の教え方・学び方
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

        <?php numeric_nav(); ?>
        <?php
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
