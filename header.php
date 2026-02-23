<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/assets/fonts/lato-400-regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>

  <div class="header-top-strip max-w-[1240px] mx-auto px-6 flex justify-end">
    <a class="phone" href="tel:9284755551">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
        <path id="phone-dot" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
      </svg>
      928-475-5551
    </a>
  </div>

  <div class="max-w-[1240px] mx-auto px-6">
    <div class="logo-nav-buttons flex items-center justify-between gap-10">

      <a class="logo-group" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img
            class="w-[66px] h-[72px]"
            src="/wp-content/uploads/logo.png"
            width="66px"
            height="72px"
            alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
        >
        <div class="flex flex-col items-center logo-text-block">
          <div class="logo-text">Lumina</div>
          <div class="logo-sub-text">Healing Center</div>
          <div class="logo-location flex justify-center items-center"><span>Sedona</span></div>
        </div>
      </a>

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

      <div class="header-button-group flex items-center gap-3">
        <a class="rounded-full border border-slate-300 bg-white/80 px-5 py-2 text-xs uppercase tracking-[0.25em] text-slate-700 hover:bg-white transition" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
        <a class="rounded-full border border-slate-300 bg-white/80 px-5 py-2 text-xs uppercase tracking-[0.25em] text-slate-700 hover:bg-white transition" href="<?php echo esc_url( home_url( '/apply' ) ); ?>">Apply</a>
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

<aside id="mobile-menu" class="mobile-menu" aria-hidden="true">
  <div class="mobile-menu-header">
    <button class="mobile-menu-close" type="button" aria-label="Close menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
        <path d="M2.146 2.146a.5.5 0 0 1 .708 0L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854a.5.5 0 0 1 0-.708z"/>
      </svg>
    </button>
  </div>

  <div class="mobile-menu-phone text-center">
    <a href="tel:9284755551">928-475-5551</a>
  </div>

  <div class="mobile-menu-actions">
    <a class="mb-[10px]" href="<?php echo esc_url( home_url( '/apply' ) ); ?>">Apply</a>
    <a class="mb-[10px]" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
  </div>

  <nav class="mobile-menu-nav">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'mobile',
        'container' => false,
        'menu_class' => 'mobile-primary-nav',
        'fallback_cb' => '__return_false',
    ) );
    ?>
  </nav>

  <div class="mobile-menu-social text-center">
    <a href="#" aria-label="Instagram">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
      </svg>
    </a>
    <a href="#" aria-label="WhatsApp">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
      </svg>
    </a>
  </div>
</aside>

<main id="main-content">
