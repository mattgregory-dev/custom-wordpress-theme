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
      ?>

      <section class="probe-template__intro mb-10">
        <h1>Probe Template Test</h1>
        <p>This template is testing slot-based block rendering.</p>
      </section>

      <?php include get_template_directory() . '/partials/slots/probe-slot.php'; ?>

      <section class="probe-template__static">
        <h2>Static Content Continues</h2>
        <p>This is static template markup below the probe slot.</p>
      </section>

      <?php include get_template_directory() . '/partials/slots/banner-slot.php'; ?>

      <?php
    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();
