<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="36x36"  href="<?php echo get_template_directory_uri(); ?>/assets/images/android-icon-36x36.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-57x57.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="wp">
    <?php if(wpmd_is_phone()): ?>
    <?php get_template_part('templates/mobile/menu-category'); ?>
    <?php endif; ?>
    <div class="showp"></div>
    <div id="wrapper">
      <?php if(wpmd_is_phone()): ?>
      <?php get_template_part('templates/mobile/header'); ?>
      <?php else: ?>
      <?php get_template_part('templates/pc/header'); ?>
      <?php endif; ?>
