<?php
/**
 * Template Name: Lumina Thank You (Tailwind)
 */
get_header();
?>

<!-- PAGE HEADER / CONFIRMATION -->
<section id="thank-you-header" class="w-full hero-band min-h-screen">
  <div class="hero-content max-w-[1240px] mx-auto px-4">
    <div class="pt-[84px] min-h-screen flex items-center">
      <div class="max-w-3xl space-y-4">
      <h1 class="text-5xl leading-tight">Thank You</h1>
      <p class="text-lg leading-relaxed text-[var(--muted)]">Your application has been received.</p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        We will review your information and respond within a few business days with next steps or questions.
      </p>
      </div>
    </div>
  </div>
</section>

<!-- WHAT HAPPENS NEXT -->
<section id="thank-you-next" class="w-full py-16">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl space-y-4">
      <h2 class="text-3xl leading-tight">What happens next</h2>
      <ol class="list-decimal pl-6 space-y-2 text-lg text-[var(--muted)]">
        <li>We review your application for readiness and fit.</li>
        <li>We may reach out if we need clarification.</li>
        <li>You will receive an update with next steps.</li>
      </ol>
    </div>
  </div>
</section>

<!-- SUPPORT NOTE -->
<section id="thank-you-support" class="w-full py-12">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl space-y-3">
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        If you have questions, you can reach us at <a class="underline" href="#">hello@example.com</a>.
      </p>
    </div>
  </div>
</section>

<!-- FOOTER NAVIGATION -->
<section id="thank-you-footer" class="w-full pb-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl flex items-center gap-6 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
      <a class="underline" href="#">Return to Home</a>
      <a class="underline" href="#">Learn more about Retreats</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
