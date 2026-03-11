<?php
require_once get_template_directory() . '/partials/slots/find-block.php';

$hero_block = cwp_find_block_by_name( 'cwp/hero', $blocks );

echo '<section class="hero-slot">';

if ( $hero_block ) {
  echo render_block( $hero_block );
} else {
  echo '<p>No hero block found.</p>';
}

echo '</section>';
