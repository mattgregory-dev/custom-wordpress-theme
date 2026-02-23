<?php
get_header();
?>
<section class="py-16 text-center">
    <h1 class="text-4xl font-semibold">Page not found</h1>
    <p class="mt-4 text-slate-600">Sorry, we couldn't find that page.</p>
    <div class="mt-8">
        <a class="inline-flex items-center px-4 py-2 border border-slate-300" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            Back to home
        </a>
    </div>
</section>
<?php
get_footer();
