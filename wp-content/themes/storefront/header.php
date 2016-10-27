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
<div id="wrapper">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="menu-top">
            <div class="row">
              <div class="col-md-5 col-sm-5">
                <ul class="row">
                  <li class="col-md-4 col-sm-4"><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
                  <li data-id="about" class="col-md-4 col-sm-4"><a href="<?php echo (is_home())?'javascript:void(0)': home_url() .'/gioi-thieu' ?>">Giới thiệu</a></li>
                  <li data-id="product" class="col-md-4 col-sm-4"><a href="<?php echo (is_home())?'javascript:void(0)': home_url() .'/san-pham' ?>">Sản phẩm</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2 row-logo">
                <div class="logo">
                  <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-dia-cau-xanh.png"></a>
                </div>
              </div>
              <div class="col-md-5 col-sm-5">
                <ul class="row">
                  <li  data-id="share"class="col-md-4 col-sm-4"><a href="<?php echo (is_home())?'javascript:void(0)': home_url() .'/chia-se' ?>">Chia sẻ</a></li>
                  <li data-id="gallery" class="col-md-4 col-sm-4"><a href="<?php echo (is_home())?'javascript:void(0)': home_url() .'/hinh-anh' ?>">Hình ảnh</a></li>
                  <li data-id="contact" class="col-md-4 col-sm-4"><a href="<?php echo (is_home())?'javascript:void(0)': home_url() .'/lien-he' ?>">Liên hệ</a></li>
                </ul>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>