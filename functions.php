<?php
// Enqueue either Vite dev assets or the built /dist assets.
add_action('wp_enqueue_scripts', function () {
  $theme_uri = get_template_directory_uri();
  $dist = $theme_uri . '/dist';

  // Toggle with: define('CUSTOM_WP_VITE_DEV', true); in wp-config.php
  $use_vite = defined('CUSTOM_WP_VITE_DEV') && CUSTOM_WP_VITE_DEV;

  if ($use_vite) {
    // Vite dev server (no SSL, local container).
    $vite = 'http://localhost:5175';

    // Ensure dev scripts are output as ES modules.
    add_filter('script_loader_tag', function ($tag, $handle, $src) {
      $module_handles = ['vite-client', 'custom-wp-main'];
      if (in_array($handle, $module_handles, true)) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
      }
      return $tag;
    }, 10, 3);

    // Vite HMR client.
    wp_enqueue_script('vite-client', $vite . '/@vite/client', [], null, false);

    // Main JS entry served by Vite (imports SCSS in dev).
    wp_enqueue_script('custom-wp-main', $vite . '/main.js', [], null, false);

    // Static stylesheet served from Vite public/ during dev.
    wp_enqueue_style('custom-wp-tailwind', $vite . '/tailwind.css', [], null);
    return;
  }

  // Static stylesheet (not processed by Vite).
  wp_enqueue_style('custom-wp-tailwind', $dist . '/tailwind.css', [], null);
  // Main compiled CSS bundle.
  wp_enqueue_style('custom-wp-main', $dist . '/assets/main.css', ['custom-wp-tailwind'], null);

  // Main JS bundle (ES module).
  wp_enqueue_script('custom-wp-main', $dist . '/assets/main.js', [], null, true);
  wp_script_add_data('custom-wp-main', 'type', 'module');
});
