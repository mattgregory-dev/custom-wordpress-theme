<?php
// Enqueue the built theme assets from /dist.
add_action('wp_enqueue_scripts', function () {
  // Base URL to the theme's build output.
  $theme_uri = get_template_directory_uri();
  $dist = $theme_uri . '/dist';

  // Static stylesheet (not processed by Vite).
  wp_enqueue_style('custom-wp-tailwind', $dist . '/tailwind.css', [], null);
  // Main compiled CSS bundle.
  wp_enqueue_style('custom-wp-main', $dist . '/assets/main.css', ['custom-wp-tailwind'], null);

  // Main JS bundle (ES module).
  wp_enqueue_script('custom-wp-main', $dist . '/assets/main.js', [], null, true);
  wp_script_add_data('custom-wp-main', 'type', 'module');
});
