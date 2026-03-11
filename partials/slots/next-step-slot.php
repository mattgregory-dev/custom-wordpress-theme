<?php
require_once get_template_directory() . '/partials/slots/find-block.php';

$next_step_block = cwp_find_block_by_name( 'cwp/next-step', $blocks );

if ( $next_step_block ) {
  echo render_block( $next_step_block );
}
