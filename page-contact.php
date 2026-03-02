<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section id="about-hero" class="page-header">
  <div class="header-content">
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
      <form action="#" method="post" class="space-y-6">
        <div class="grid grid-cols-2 gap-6">
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            First Name
            <input
              type="text"
              name="first_name"
              required
              placeholder="First name"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Last Name
            <input
              type="text"
              name="last_name"
              required
              placeholder="Last name"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
        </div>
        <div class="grid grid-cols-2 gap-6">
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Email
            <input
              type="email"
              name="email"
              required
              placeholder="you@email.com"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Phone (optional)
            <input
              type="tel"
              name="phone"
              placeholder="(000) 000-0000"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
        </div>
        <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
          Subject
          <input
            type="text"
            name="subject"
            placeholder="What can we help with?"
            class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
          />
        </label>
        <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
          Message
          <textarea
            name="message"
            required
            rows="6"
            placeholder="Write a brief message."
            class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
          ></textarea>
        </label>
        <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
          <input type="checkbox" name="consent" class="h-4 w-4 rounded border border-slate-300" />
          I consent to being contacted regarding my inquiry.
        </label>
        <div>
          <button
            type="submit"
            class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
          >
            Send Message
          </button>
        </div>
      </form>
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

