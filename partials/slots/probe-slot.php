<?php
require_once get_template_directory() . '/partials/slots/find-block.php';

$probe_block = cwp_find_block_by_name( 'cwp/probe', $blocks );

echo '<section class="probe-slot">';

if ( $probe_block ) {
  echo render_block( $probe_block );
} else {
  echo '<p>No probe block found.</p>';
}

echo '</section>';
