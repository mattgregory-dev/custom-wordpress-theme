<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <style>
    /* @media (min-width: 980px) {
      .logo-group {
        display: none;
      }
      .mobile-menu {
        display: none;
      }
      .header {
        height: 122px;
      }
      .primary-nav {
        display: none;
      }
      .mobile-menu-toggle {
        display: none;
      }
    } */
  </style>
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
<header>
  <?php // get_template_part('partials/header-strip') ?>
  <div class="mx-auto pt-4 px-4">
    <div class="header-menu-area flex items-center lg:items-center justify-between gap-2 px-4 py-4 rounded-xl">
      <?php get_template_part('partials/logo') ?>
      <!-- Start: Top Nav -->
      <nav class="header-nav">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'primary-nav',
            'fallback_cb' => '__return_false',
        ) );
        ?>
      </nav>
      <!-- End: Top Nav -->
      <div class="header-button-group flex flex-col lg:flex-row items-center gap-4">
        <a class="phone" href="tel:9284755551">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path id="phone-dot" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
          </svg>
          928-475-5551
        </a>
        <a class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded" href="<?php echo esc_url( home_url( '/apply' ) ); ?>">Apply</a>
      </div>
      <button class="mobile-menu-toggle" type="button" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
          <path d="M2 3.75h12a.75.75 0 0 0 0-1.5H2a.75.75 0 0 0 0 1.5zM2 8.75h12a.75.75 0 0 0 0-1.5H2a.75.75 0 0 0 0 1.5zM2 13.75h12a.75.75 0 0 0 0-1.5H2a.75.75 0 0 0 0 1.5z"/>
        </svg>
      </button>
    </div>
  </div>
</header>
<div class="mobile-menu-backdrop" data-mobile-menu-close></div>
<?php get_template_part('partials/mobile-menu') ?>
<?php // get_template_part('partials/sticky-header') ?>
<main id="main-content">
