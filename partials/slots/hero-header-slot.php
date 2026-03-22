<?php
require_once get_template_directory() . '/partials/slots/find-block.php';

$hero_header_block = cwp_find_block_by_name( 'cwp/hero-header', $blocks );

if ( $hero_header_block ) {
  echo render_block( $hero_header_block );
}
