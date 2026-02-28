<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/lato-400-regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'partials/preloader' ); ?>
<button id="themeBtn"><i class="far fa-moon"></i></button>
<?php get_template_part('partials/sticky-header') ?>
<?php get_template_part('partials/search-popup') ?>

<?php
$header_args = isset( $args ) && is_array( $args ) ? $args : array();
$header_variant = isset( $header_args['header_variant'] ) ? $header_args['header_variant'] : 'default';
$header_class = $header_variant === 'absolute' ? 'vs-header2' : 'vs-header15';
?>
<header class="<?php echo esc_attr( $header_class ); ?> header-theme-dark">
  <div class="position-relative">
    <div class="header-menu-area">
      <div class="flex items-center justify-between">
        <div class="header-logo">
          <?php get_template_part( 'partials/logo' ); ?>
        </div>
        <?php get_template_part( 'partials/header-links' ); ?>
      </div>
      <button class="hamburger popup-menu" data-menu="mobileMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>
<div class="mobile-menu-backdrop" data-mobile-menu-close></div>
<?php get_template_part('partials/mobile-menu') ?>
<main id="main-content">
