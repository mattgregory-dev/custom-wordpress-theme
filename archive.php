<?php
get_header();
?>
<section class="py-12">
    <h1 class="text-3xl font-semibold"><?php the_archive_title(); ?></h1>
    <?php if ( have_posts() ) : ?>
        <div class="mt-6 space-y-10">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2 class="text-2xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="mt-2 text-slate-600">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</section>
<?php
get_footer();
