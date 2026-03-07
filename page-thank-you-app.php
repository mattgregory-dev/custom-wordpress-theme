<?php
/**
 * Template Name: TY Application
 */
get_header();
?>

<section id="thank-you-header" class="page-hero">
  <div class="header-content">
    <h1>Thank You</h1>
    <p class="description">Your application has been received.</p>
    <p class="description">
      We will review your information and respond within a few business days with next steps or questions.
    </p>
  </div>
</section>

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

<section id="thank-you-support" class="w-full py-12">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl space-y-3">
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        If you have questions, you can reach us at <a class="underline" href="#">hello@example.com</a>.
      </p>
    </div>
  </div>
</section>

<section id="thank-you-footer" class="w-full pb-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl flex items-center gap-6 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
      <a class="underline" href="#">Return to Home</a>
      <a class="underline" href="#">Learn more about Retreats</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

