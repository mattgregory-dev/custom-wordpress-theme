<?php
?>
</main>
<footer class="footer">
  <div class="footer-wrapper mx-auto max-w-[1080px] space-y-10">

    <div class="footer-top">

      <div class="footer-brand">
        <?php get_template_part('partials/logo') ?>
        <p class="footer-desc">
          Retreats for clarity, steadiness, and grounded care.
          A calm path back to what is already present. 
        </p>
      </div>

      <nav class="footer-nav">
        <?php 
          wp_nav_menu(array(
            'theme_location'=> 'footer',
            'container'=> false,
            'menu_class'=> 'footer-nav-list flex flex-wrap justify-center gap-6',
            'fallback_cb'=> '__return_false',
          ));
        ?>
      </nav>

    </div>

    <div class="footer-links grid grid-cols-2 gap-12 hidden sm:grid">

      <div class="text-center">
        <h3 class="mb-4">Site Links</h3>
        <a class="footer-link" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
        <a class="footer-link" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQs</a>
      </div>

      <div class="text-center space-y-4">
        <h3>Contat Us</h3>
        <div>
          <div class="footer-meta-label">Phone:</div>
          <a class="footer-link" href="tel:9284755551">928-475-5551</a>
        </div>
        <div>
          <div class="footer-meta-label">Contact Form:</div>
          <a class="footer-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Leave A Message</a>
        </div>
      </div>
    </div>


    <div class="footer-disclosure">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis luctus massa, eu maximus nisi tristique eu. Donec ut orci vestibulum, ultrices massa ut, finibus turpis. Sed hendrerit, nisl rhoncus vestibulum efficitur, tortor mauris facilisis purus, nec cursus lacus nibh eleifend arcu. 
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis luctus massa, eu maximus nisi tristique eu. Donec ut orci vestibulum. 
      </p>
    </div>


    <div class="footer-bottom flex items-center justify-center gap-3">
      <span>© 2026 Lumina, Inc. All rights reserved.</span>
      <span class="opacity-50">|</span>
      <a class="footer-link" href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms</a>
      <span class="opacity-50">|</span>
      <a class="footer-link" href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
    </div>

  </div>
</footer>
<button id="scrollBtn" title="Go to top">
  <i class="fas fa-angle-up"></i>
</button>
<?php wp_footer(); ?>
</body>
</html>
