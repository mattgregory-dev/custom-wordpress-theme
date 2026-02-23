<?php
get_header();
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php
      $post_id = get_the_ID();
      $categories = get_the_category($post_id);
      $primary_category = !empty($categories) ? $categories[0]->name : 'Journal';
      $author_name = get_the_author();
      $posts_page_id = (int) get_option('page_for_posts');
      $blog_link = $posts_page_id ? get_permalink($posts_page_id) : home_url('/');
    ?>

    <!-- ARTICLE HERO / HEADER -->
    <section id="article-hero" class="w-full pt-[140px] pb-12">
      <div class="max-w-[1240px] mx-auto px-6">
        <div class="max-w-3xl space-y-5">
          <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]"><?php echo esc_html($primary_category); ?></p>
          <h1 class="text-5xl leading-tight"><?php the_title(); ?></h1>
          <div class="text-xs uppercase tracking-[0.2em] text-[var(--muted)] flex flex-wrap gap-4">
            <span><?php echo esc_html(get_the_date()); ?></span>
            <?php if (!empty($author_name)) : ?>
              <span><?php // echo esc_html($author_name); ?></span>
            <?php endif; ?>
          </div>
          <?php if (has_excerpt()) : ?>
            <p class="text-lg leading-relaxed text-[var(--muted)]"><?php echo esc_html(get_the_excerpt()); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- FEATURED IMAGE -->
    <?php if (has_post_thumbnail()) : ?>
      <section id="article-image" class="w-full pb-12">
        <div class="max-w-[1240px] mx-auto px-6">
          <div class="max-w-[1100px] mx-auto rounded-[32px] border border-slate-300 bg-white/90 soft-shadow overflow-hidden">
            <?php the_post_thumbnail('large', array('class' => 'block h-full w-full object-cover')); ?>
          </div>
        </div>
      </section>
    <?php else : ?>
      <section id="article-image" class="w-full pb-12">
        <div class="max-w-[1240px] mx-auto px-6">
          <div class="max-w-[1100px] mx-auto rounded-[32px] border border-slate-300 bg-[var(--dusk)] soft-shadow h-[320px] flex items-center justify-center">
            <span class="text-xs uppercase tracking-[0.25em] text-white opacity-80">No Image</span>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <!-- ARTICLE BODY -->
    <section id="article-body" class="w-full pb-16">
      <div class="max-w-[1240px] mx-auto px-6">
        <article class="post-content max-w-3xl mx-auto text-[var(--ink)]">
          <?php the_content(); ?>
        </article>
      </div>
    </section>

    <!-- ARTICLE FOOTER META -->
    <section id="article-meta" class="w-full pb-16">
      <div class="max-w-[1240px] mx-auto px-6">
        <div class="max-w-3xl mx-auto space-y-4">
          <div class="border-t border-slate-300 pt-6 text-xs uppercase tracking-[0.2em] text-[var(--muted)]">
            <?php if (!empty($categories)) : ?>
              <div class="pb-3">
                Categories: <?php echo wp_kses_post(get_the_category_list(', ')); ?>
              </div>
            <?php endif; ?>
            <?php
              $tags_list = get_the_tag_list('Tags: ', ', ');
              if ($tags_list) :
            ?>
              <div><?php echo wp_kses_post($tags_list); ?></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- RELATED / CONTINUE READING -->
    <section id="article-related" class="w-full band-mist py-16">
      <div class="max-w-[1240px] mx-auto px-6 space-y-8">
        <div class="flex items-center justify-between">
          <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Continue reading</p>
          <a class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]" href="<?php echo esc_url($blog_link); ?>">
            &larr; Back to Blog
          </a>
        </div>
        <?php
          $related_args = array(
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'post__not_in' => array($post_id),
            'ignore_sticky_posts' => 1,
          );
          if (!empty($categories)) {
            $related_args['category__in'] = wp_list_pluck($categories, 'term_id');
          }
          $related_query = new WP_Query($related_args);
        ?>
        <?php if ($related_query->have_posts()) : ?>
          <div class="grid grid-cols-3 gap-6">
            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
              <?php
                $related_categories = get_the_category();
                $related_category = !empty($related_categories) ? $related_categories[0]->name : 'Journal';
              ?>
              <article class="rounded-3xl border border-slate-300 bg-white/90 soft-shadow overflow-hidden flex flex-col">
                <a class="block" href="<?php the_permalink(); ?>">
                  <div class="h-[180px] w-full">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('large', array('class' => 'h-full w-full object-cover')); ?>
                    <?php else : ?>
                      <div class="h-full w-full bg-[var(--dusk)] flex items-center justify-center text-xs uppercase tracking-[0.25em] text-white opacity-80">
                        No Image
                      </div>
                    <?php endif; ?>
                  </div>
                </a>
                <div class="p-5 space-y-2 flex-1 flex flex-col">
                  <p class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]"><?php echo esc_html($related_category); ?></p>
                  <h3 class="text-xl leading-snug"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]"><?php echo esc_html(get_the_date()); ?></p>
                </div>
              </article>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <div class="rounded-3xl border border-slate-300 bg-white/90 soft-shadow p-8 text-center">
            <p class="text-base text-[var(--muted)]">No related posts yet.</p>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
