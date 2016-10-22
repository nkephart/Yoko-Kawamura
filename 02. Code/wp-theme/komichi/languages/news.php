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

/* Template Name: News */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php query_posts('post_type=news'); ?>

        <?php $loop = new WP_Query('page_id='.$post->ID); ?>
        <?php
          while ( $loop->have_posts() ) : $loop->the_post();
            the_content();
          endwhile;
        ?>

        <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'news' );

		// End the loop.
		endwhile;
		?>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
