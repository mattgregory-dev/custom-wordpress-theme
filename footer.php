<?php
?>
</main>
<footer class="footer bg-[#1f2f2a]">
    <div class="mx-auto max-w-[1080px] px-6 py-16 space-y-10">
        <div class="footer-top flex items-start justify-between gap-12">
            <div class="footer-brand max-w-[420px] space-y-4 text-center lg:text-left">
                <a class="logo-group mx-auto flex items-center justify-center gap-[10px] lg:mx-0 lg:justify-start" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img
                        class="w-[66px] h-[72px]"
                        src="/wp-content/uploads/logo-white.png"
                        width="66px"
                        height="72px"
                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                    >
                    <div class="flex flex-col items-center">
                      <div class="logo-text">Lumina</div>
                      <div class="logo-sub-text">Healing Center</div>
                      <div class="logo-location">Sedona</div>
                    </div>
                </a>
                <p class="footer-desc">
                    Retreats for clarity, steadiness, and grounded care. A calm path back to what is already present.
                </p>
            </div>
            <nav class="footer-nav hidden sm:block">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer-nav-list flex flex-wrap justify-end gap-6',
                    'fallback_cb' => '__return_false',
                ) );
                ?>
            </nav>
        </div>

        <div class="h-px bg-white/20 hidden sm:block"></div>

        <div class="footer-links grid grid-cols-3 gap-12 items-start hidden sm:grid">
            <div>
                <a class="footer-link block" href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQs</a>
                <a class="footer-link block" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
                <a class="footer-link block" href="<?php echo esc_url( home_url( '/apply' ) ); ?>">Apply</a>
            </div>
            <div>
                <a class="footer-link block" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
            </div>
            <div class="space-y-4">
                <div>
                    <div class="footer-meta-label">Phone:</div>
                    <a class="footer-link block" href="tel:9284755551">928-475-5551</a>
                </div>
                <div>
                    <div class="footer-meta-label">Location:</div>
                    <span class="location block">Sedona, Arizona</span>
                </div>
            </div>
        </div>

        <div class="footer-disclosure space-y-4 text-center">
            <p class="mx-auto max-w-[980px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis luctus massa, eu maximus nisi
                tristique eu. Donec ut orci vestibulum, ultrices massa ut, finibus turpis. Sed hendrerit, nisl rhoncus
                vestibulum efficitur, tortor mauris facilisis purus, nec cursus lacus nibh eleifend arcu.
            </p>
            <p class="mx-auto max-w-[760px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis luctus massa, eu maximus nisi
                tristique eu. Donec ut orci vestibulum.
            </p>
        </div>

        <div class="footer-bottom flex items-center justify-center gap-3">
            <span>&copy; 2026 Lumina, Inc. All rights reserved.</span>
            <span class="opacity-50">|</span>
            <a class="footer-link" href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms</a>
            <span class="opacity-50">|</span>
            <a class="footer-link" href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
