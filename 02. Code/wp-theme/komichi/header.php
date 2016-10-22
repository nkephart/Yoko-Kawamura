<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div id="content" class="site-content">
<header role="banner" id="global-header" class="cf">
  <h1><a href="/test" title="こみち書房">こみち書房</a></h1>
  <nav role="navigation" class="header-navigation">
    <ol>
      <li><a href="/test/news" class="nav-news" title="お知らせ"></a></li>
      <li><a href="/test/books" class="nav-books" title="書籍の紹介"></a></li>
      <li><a href="/test/bs" class="nav-bs" title="書店さまへ"></a></li>
      <li><a href="/test/order" class="nav-order" title="本を購入される方へ"></a></li>
      <li><a href="/test/company" class="nav-company" title="会社について"></a></li>
    </ol>
  </nav>
</header>