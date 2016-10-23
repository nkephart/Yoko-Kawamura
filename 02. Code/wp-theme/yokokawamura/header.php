<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_enqueue_script( 'jquary' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="primary" class="content-area">
    <header id="header" class="cf" role="banner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo" rel="home"><?php bloginfo( 'name' ); ?></a>
      <nav role="navigation" class="header-nav">
        <ol>
          <li><a href="<?php echo esc_url( home_url( '/#body-motto' ) ); ?>" title="方針">方針</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#body-price' ) ); ?>" title="費用">費用</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#body-intro' ) ); ?>" title="弁護士紹介">弁護士紹介</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#body-firm' ) ); ?>" title="事務所">事務所</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#body-access' ) ); ?>" title="アクセス">アクセス</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" title="ブログ">ブログ</a></li>
        </ol>
      </nav><!-- .header-nav -->
    </header><!-- #header -->
