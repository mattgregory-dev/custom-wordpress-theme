<?php
/**
 * Template Name: Probe
 */
get_header(
  null,
  array(
    'header_variant' => 'absolute',
    //'header_color' => 'white',
  )
);
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();

    $raw_content = get_post_field( 'post_content', get_the_ID() );
    $blocks = parse_blocks( $raw_content );
    ?>

    <?php include get_template_directory() . '/partials/slots/hero-slot.php'; ?>

    <?php include get_template_directory() . '/partials/slots/probe-slot.php'; ?>

    <?php include get_template_directory() . '/partials/slots/banner-slot.php'; ?>

    <?php
  endwhile;
endif;
?>


<?php
get_footer();
