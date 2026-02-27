<?php
$prev_project = get_adjacent_post( false, '', true, 'capability' );
$next_project = get_adjacent_post( false, '', false, 'capability' );
$current_project_id = get_queried_object_id();

if ( ! $prev_project ) {
    $prev_fallback = get_posts(
        array(
            'post_type'      => 'project',
            'posts_per_page' => 1,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'post__not_in'   => array( $current_project_id ),
            'fields'         => 'ids',
        )
    );
    if ( ! empty( $prev_fallback ) ) {
        $prev_project = get_post( $prev_fallback[0] );
    }
}

if ( ! $next_project ) {
    $next_fallback = get_posts(
        array(
            'post_type'      => 'project',
            'posts_per_page' => 1,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'post__not_in'   => array( $current_project_id ),
            'fields'         => 'ids',
        )
    );
    if ( ! empty( $next_fallback ) ) {
        $next_project = get_post( $next_fallback[0] );
    }
}
$fallback_thumb = get_template_directory_uri() . '/images/pagination-thumb.webp';
?>
<!-- start: page navigation -->
<section class="fun-fact-sec3 ibt-section-gapTop-half ibt-section-gapBottom">
  <div class="container">

    <div class="post-navigation">
      <div class="post-nav-item">
        <?php if ( $prev_project ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev_project ) ); ?>" title="" class="post-btn">Prev project</a>
          <div class="post-nav-content">
            <a href="<?php echo esc_url( get_permalink( $prev_project ) ); ?>">
              <?php
              $prev_thumb_id = get_post_thumbnail_id( $prev_project );
              if ( $prev_thumb_id ) {
                  echo wp_get_attachment_image(
                      $prev_thumb_id,
                      'thumbnail',
                      false,
                      array( 'alt' => get_the_title( $prev_project ) )
                  );
              } else {
                  ?>
                  <img src="<?php echo esc_url( $fallback_thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $prev_project ) ); ?>">
                  <?php
              }
              ?>
            </a>
            <h4 class="name">
              <a href="<?php echo esc_url( get_permalink( $prev_project ) ); ?>">
                <?php echo esc_html( get_the_title( $prev_project ) ); ?>
              </a>
            </h4>
          </div>
        <?php endif; ?>
      </div>

      <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" title="" class="toggel2">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/dest/assets/images/icon/toggel.svg' ); ?>"
          alt="">
      </a>

      <div class="post-nav-item2">
        <?php if ( $next_project ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next_project ) ); ?>" title="" class="post-btn2">Next project</a>
          <div class="post-nav-content2">
            <h4 class="name">
              <a href="<?php echo esc_url( get_permalink( $next_project ) ); ?>">
                <?php echo esc_html( get_the_title( $next_project ) ); ?>
              </a>
            </h4>
            <a href="<?php echo esc_url( get_permalink( $next_project ) ); ?>">
              <?php
              $next_thumb_id = get_post_thumbnail_id( $next_project );
              if ( $next_thumb_id ) {
                  echo wp_get_attachment_image(
                      $next_thumb_id,
                      'thumbnail',
                      false,
                      array( 'alt' => get_the_title( $next_project ) )
                  );
              } else {
                  ?>
                  <img src="<?php echo esc_url( $fallback_thumb ); ?>" alt="<?php echo esc_attr( get_the_title( $next_project ) ); ?>">
                  <?php
              }
              ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- end: page navigation -->
