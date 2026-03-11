<?php
$current_slug = get_post_field( 'post_name', get_queried_object_id() );

$circle_classes = function ( $is_active ) {
  return $is_active
    ? 'w-20 h-20 rounded-full bg-gray-900 border-2 border-gray-900 mb-6 flex items-center justify-center relative z-10'
    : 'w-20 h-20 rounded-full bg-white border-2 border-gray-400 mb-6 flex items-center justify-center relative z-10';
};

$number_classes = function ( $is_active ) {
  return $is_active ? 'text-white text-xs' : 'text-gray-500 text-xs';
};

$title_classes = function ( $is_active ) {
  return $is_active ? 'text-lg mb-3 text-gray-900 font-semibold' : 'text-lg mb-3 text-gray-900 font-medium';
};
?>

<div class="relative steps">
  <div class="absolute top-16 left-0 right-0 h-[2px] bg-gray-300 hidden md:block"></div>
  <div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-4">
    <?php $is_active = ( $current_slug === 'orientation' ); ?>
    <a class="relative flex flex-col items-center text-center hover:bg-gray-900/10 transition-colors rounded-xl px-4 py-6 group" href="/orientation/"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
      <div class="<?php echo esc_attr( $circle_classes( $is_active ) ); ?> group-hover:bg-gray-900 group-hover:border-gray-900 transition-colors">
        <span class="<?php echo esc_attr( $number_classes( $is_active ) ); ?> group-hover:text-white transition-colors">1</span>
      </div>
      <h3 class="<?php echo esc_attr( $title_classes( $is_active ) ); ?>">Orientation</h3>
      <p class="text-sm text-gray-600 leading-relaxed">Beginning with perspective and grounding.</p>
    </a>

    <?php $is_active = ( $current_slug === 'intentions' ); ?>
    <a class="relative flex flex-col items-center text-center hover:bg-gray-900/10 transition-colors rounded-xl px-4 py-6 group" href="/intentions/"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
      <div class="<?php echo esc_attr( $circle_classes( $is_active ) ); ?> group-hover:bg-gray-900 group-hover:border-gray-900 transition-colors">
        <span class="<?php echo esc_attr( $number_classes( $is_active ) ); ?> group-hover:text-white transition-colors">2</span>
      </div>
      <h3 class="<?php echo esc_attr( $title_classes( $is_active ) ); ?>">Intentions</h3>
      <p class="text-sm text-gray-600 leading-relaxed">Clarifying curiosity rather than controlling outcomes.</p>
    </a>

    <?php $is_active = ( $current_slug === 'preparation' ); ?>
    <a class="relative flex flex-col items-center text-center hover:bg-gray-900/10 transition-colors rounded-xl px-4 py-6 group" href="/preparation/"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
      <div class="<?php echo esc_attr( $circle_classes( $is_active ) ); ?> group-hover:bg-gray-900 group-hover:border-gray-900 transition-colors">
        <span class="<?php echo esc_attr( $number_classes( $is_active ) ); ?> group-hover:text-white transition-colors">3</span>
      </div>
      <h3 class="<?php echo esc_attr( $title_classes( $is_active ) ); ?>">Preparation</h3>
      <p class="text-sm text-gray-600 leading-relaxed">Supporting the body and nervous system.</p>
    </a>

    <?php $is_active = ( $current_slug === 'ceremony' ); ?>
    <a class="relative flex flex-col items-center text-center hover:bg-gray-900/10 transition-colors rounded-xl px-4 py-6 group" href="/ceremony/"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
      <div class="<?php echo esc_attr( $circle_classes( $is_active ) ); ?> group-hover:bg-gray-900 group-hover:border-gray-900 transition-colors">
        <span class="<?php echo esc_attr( $number_classes( $is_active ) ); ?> group-hover:text-white transition-colors">4</span>
      </div>
      <h3 class="<?php echo esc_attr( $title_classes( $is_active ) ); ?>">Ceremony</h3>
      <p class="text-sm text-gray-600 leading-relaxed">Entering the experience with guidance and care.</p>
    </a>

    <?php $is_active = ( $current_slug === 'integration' ); ?>
    <a class="relative flex flex-col items-center text-center hover:bg-gray-900/10 transition-colors rounded-xl px-4 py-6 group" href="/integration/"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
      <div class="<?php echo esc_attr( $circle_classes( $is_active ) ); ?> group-hover:bg-gray-900 group-hover:border-gray-900 transition-colors">
        <span class="<?php echo esc_attr( $number_classes( $is_active ) ); ?> group-hover:text-white transition-colors">5</span>
      </div>
      <h3 class="<?php echo esc_attr( $title_classes( $is_active ) ); ?>">Integration</h3>
      <p class="text-sm text-gray-600 leading-relaxed">Living the insights within daily life.</p>
    </a>
  </div>
</div>
