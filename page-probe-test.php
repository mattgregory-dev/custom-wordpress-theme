<?php
/*
Template Name: Probe
*/

get_header();
?>

<main class="probe-template mx-auto max-w-4xl px-6 py-16">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();

      $raw_content = get_post_field( 'post_content', get_the_ID() );
      $blocks = parse_blocks( $raw_content );

      $find_first_block = function ( $block_name, $block_list ) use ( &$find_first_block ) {
        foreach ( $block_list as $block ) {
          if ( isset( $block['blockName'] ) && $block['blockName'] === $block_name ) {
            return $block;
          }

          if ( ! empty( $block['innerBlocks'] ) ) {
            $found = $find_first_block( $block_name, $block['innerBlocks'] );
            if ( $found ) {
              return $found;
            }
          }
        }

        return null;
      };

      $probe_block = $find_first_block( 'cwp/probe', $blocks );
      $banner_block = $find_first_block( 'cwp/banner', $blocks );

      $probe_debug = defined( 'WP_DEBUG' ) && WP_DEBUG && isset( $_GET['probe_debug'] );
      if ( $probe_debug ) {
        $collect_block_names = function ( $block_list ) use ( &$collect_block_names ) {
          $names = array();
          foreach ( $block_list as $block ) {
            if ( isset( $block['blockName'] ) && $block['blockName'] ) {
              $names[] = $block['blockName'];
            }
            if ( ! empty( $block['innerBlocks'] ) ) {
              $names = array_merge( $names, $collect_block_names( $block['innerBlocks'] ) );
            }
          }
          return $names;
        };

        $block_names = $collect_block_names( $blocks );
        ?>
        <section class="probe-template__debug mb-10">
          <h2>Probe Debug</h2>
          <pre><?php
            echo 'Post ID: ' . esc_html( get_the_ID() ) . "\n";
            echo 'Raw content length: ' . esc_html( strlen( $raw_content ) ) . "\n";
            echo 'Block names: ' . esc_html( implode( ', ', $block_names ) );
          ?></pre>
        </section>
        <?php
      }
      ?>

      <section class="probe-template__intro mb-10">
        <h1>Probe Template Test</h1>
        <p>This template is testing slot-based block rendering.</p>
      </section>

      <section class="probe-template__slot mb-10">
        <h2>Probe Slot</h2>
        <div class="probe-template__slot-content">
          <?php
          if ( $probe_block ) {
            echo render_block( $probe_block );
          } else {
            echo '<p>No probe block found in page content.</p>';
          }
          ?>
        </div>
      </section>

      <section class="probe-template__static">
        <h2>Static Content Continues</h2>
        <p>This is static template markup below the probe slot.</p>
      </section>

      <section class="banner-slot mt-10">
        <h2>Banner Slot</h2>
        <div class="banner-slot__content">
          <?php
          if ( $banner_block ) {
            echo render_block( $banner_block );
          } else {
            echo '<p>No banner block found.</p>';
          }
          ?>
        </div>
      </section>

      <?php
    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();
