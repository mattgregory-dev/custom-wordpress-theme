<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section id="about-hero" class="page-hero section">
  <div class="section-container">
    <p class="label">Leave us a message</p>
    <h1>Contact</h1>
    <p class="description">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
  </div>
</section>

<section id="contact-header" class="w-full hero-band regular-page hidden">
  <div class="hero-content max-w-[1240px] mx-auto px-4 pb-[56px]">
    <div class="pt-[84px] flex items-center">
      <div class="max-w-3xl space-y-4">
        <h1 class="text-5xl leading-tight">Contact</h1>
        <p class="text-lg leading-relaxed text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet neque ut nulla posuere vehicula.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="contact-main" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[1.1fr_0.9fr] gap-16 items-start">

    <div class="soft-shadow rounded-3xl border border-slate-300 bg-white/95 p-8">
      <?php echo do_shortcode('[forminator_form id="213"]'); ?>
    </div>
    
    <aside class="space-y-6">
      <div class="rounded-3xl border border-slate-300 bg-white/95 p-6 space-y-3">
        <h2 class="text-2xl">Contact details</h2>
        <p class="text-lg text-[var(--muted)]">hello@example.com</p>
        <p class="text-lg text-[var(--muted)]">(000) 000-0000</p>
        <p class="text-lg text-[var(--muted)]">Sedona, AZ</p>
      </div>
      <div class="rounded-3xl border border-slate-300 bg-white/95 p-6 space-y-2">
        <h3 class="text-xl">Response time</h3>
        <p class="text-lg text-[var(--muted)]">We typically respond within 2–3 business days.</p>
      </div>
    </aside>
  </div>
</section>

<section id="contact-footnote" class="w-full pb-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <p class="text-sm text-[var(--muted)]">We typically respond within 2–3 business days.</p>
  </div>
</section>

<?php get_footer(); ?>

