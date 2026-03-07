<?php
/**
 * Template Name: Retreats
 */
get_header(
  null,
  array(
    //'header_variant' => 'absolute',
    //'header_color' => 'white',
  )
);
?>

<section id="retreats-hero" class="section page-hero">
  <div class="section-container grid grid-cols-2 gap-16">
    <div class="space-y-6">

      <p class="label">Retreats</p>
      <div class="sec-title">
        <h1 class="title animated-heading">Immersive retreats held with care and clarity</h1>
      </div>
      <p class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor, nibh at efficitur mollis, justo
        turpis tincidunt lectus, in varius ligula lorem non nisl.
      </p>

      <div class="flex items-center gap-4 pt-2">
        <a class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]" href="#retreat-list">
          View Upcoming Retreats
        </a>
        <a class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-6 py-3 text-sm uppercase tracking-[0.25em]" href="#">
          Apply
        </a>
      </div>
      <div class="flex items-center gap-4 text-xs uppercase tracking-[0.2em] text-[var(--muted)]">
        <span class="mini-pill border border-slate-300">Small groups</span>
        <span class="mini-pill border border-slate-300">Guided</span>
        <span class="mini-pill border border-slate-300">Aftercare</span>
      </div>
    </div>
  </div>
</section>

<section id="retreat-list" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="flex items-end justify-between">
      <div class="space-y-3">
        <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Upcoming</p>
        <h2 class="text-4xl leading-tight">Choose your retreat.</h2>
        <p class="text-lg leading-relaxed text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere tristique neque.
        </p>
      </div>
    </div>
    <div class="flex items-center gap-3 text-xs uppercase tracking-[0.2em] text-[var(--muted)]">
      <span class="mini-pill border border-slate-300">All</span>
      <span class="mini-pill border border-slate-300">Month</span>
      <span class="mini-pill border border-slate-300">Location</span>
      <span class="mini-pill border border-slate-300">Duration</span>
      <span class="mini-pill border border-slate-300">Availability</span>
    </div>
    <div class="grid grid-cols-2 gap-10">
      <article class="soft-shadow rounded-3xl border border-slate-300 bg-white/95 overflow-hidden">
        <div class="bg-slate-200 h-[260px] w-full border-b border-slate-300">
          <img
            src="/wp-content/uploads/sedona-2.webp"
            alt="Retreat setting"
            class="h-full w-full object-cover"
          />
        </div>
        <div class="p-8 space-y-4">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl">Quiet River Retreat</h3>
            <span class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]">Open</span>
          </div>
          <div class="text-sm uppercase tracking-[0.2em] text-[var(--muted)] flex items-center gap-4">
            <span>May 12-18</span>
            <span>New Mexico</span>
            <span>7 days</span>
          </div>
          <p class="text-lg text-[var(--muted)]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam commodo lorem non ipsum dignissim.
          </p>
          <ul class="text-sm text-[var(--muted)] space-y-1">
            <li>Preparation &amp; screening</li>
            <li>Small group ceremonies</li>
            <li>Integration support</li>
          </ul>
          <p class="text-base uppercase tracking-[0.2em] text-[var(--muted)]">From $0,000</p>
          <div class="flex items-center gap-3 pt-2">
            <a
                class="btn rounded-full bg-[var(--sage)] px-5 py-2 text-xs uppercase tracking-[0.25em] text-[var(--ink)]"
                href="#">
                Apply
            </a>
            <a
                class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-5 py-2 text-xs uppercase tracking-[0.25em]"
                href="#">
                Details
            </a>
          </div>
        </div>
      </article>
      <article class="soft-shadow rounded-3xl border border-slate-300 bg-white/95 overflow-hidden relative">
        <div class="bg-slate-200 h-[260px] w-full border-b border-slate-300">
          <img
            src="/wp-content/uploads/sedona-3.webp"
            alt="Retreat setting"
            class="h-full w-full object-cover"
          />
        </div>
        <span class="absolute top-4 right-4 mini-pill border border-slate-300 bg-white/90 text-xs uppercase tracking-[0.2em]">
          Sold out
        </span>
        <div class="p-8 space-y-4">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl">High Desert Immersion</h3>
            <span class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]">Waitlist</span>
          </div>
          <div class="text-sm uppercase tracking-[0.2em] text-[var(--muted)] flex items-center gap-4">
            <span>June 4–10</span>
            <span>Arizona</span>
            <span>7 days</span>
          </div>
          <p class="text-lg text-[var(--muted)]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vehicula dapibus ullamcorper.
          </p>
          <ul class="text-sm text-[var(--muted)] space-y-1">
            <li>Intention-setting sessions</li>
            <li>Guided ceremony nights</li>
            <li>Aftercare support</li>
          </ul>
          <p class="text-base uppercase tracking-[0.2em] text-[var(--muted)]">From $0,000</p>
          <div class="flex items-center gap-3 pt-2">
            <a
                class="btn rounded-full bg-[var(--sage)] px-5 py-2 text-xs uppercase tracking-[0.25em] text-[var(--ink)]"
                href="#">
                Apply
            </a>
            <a
                class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-5 py-2 text-xs uppercase tracking-[0.25em]"
                href="#">
                Details
            </a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section id="included" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="max-w-3xl space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">What's included</p>
      <h2 class="text-4xl leading-tight">A complete container for deep work.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet lectus sed tellus vulputate, sed
        tincidunt lectus vulputate.
      </p>
    </div>
    <div class="grid grid-cols-3 gap-6">
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Preparation</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Ceremony</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Integration</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Accommodations</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Meals</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
        <h3 class="text-2xl">Support</h3>
        <p class="text-lg text-[var(--muted)]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
    </div>
    <div class="rounded-3xl border border-slate-300 bg-white/95 p-8 space-y-3">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Signature inclusion</p>
      <h3 class="text-2xl">Integration sessions after you return home.</h3>
      <p class="text-lg text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus.
      </p>
    </div>
  </div>
</section>

<section id="showpiece" class="w-full px-10">
  <div class="w-full band-dusk text-white py-24 rounded-2xl">
    <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[1.05fr_0.95fr] gap-16 items-center">
      <div class="space-y-6">
        <p class="label text-base uppercase tracking-[0.25em] text-white/70">The experience</p>
        <h2 class="text-5xl leading-tight text-white">A retreat designed for depth and steadiness.</h2>
        <p class="text-lg leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus, lorem at tincidunt tristique, lorem
          nisi hendrerit risus, vitae tincidunt metus sem nec odio.
        </p>
        <ul class="space-y-3 text-lg text-white/80">
          <li>Clear preparation and screening</li>
          <li>Skilled facilitation and boundaries</li>
          <li>Rest and nourishment built in</li>
          <li>Integration support after you return</li>
          <li>Small groups for depth and safety</li>
        </ul>
        <div class="flex items-center gap-3 pt-2">
          <a
              class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
              href="#">
              Apply
          </a>
          <a
              class="btn btn--white rounded-full border border-white/30 bg-white/10 px-6 py-3 text-sm uppercase tracking-[0.25em] text-white"
              href="#">
              Contact
          </a>
        </div>
        <div class="rounded-2xl bg-white/10 border border-white/20 p-4 text-sm text-white/80">
          Small groups. Strong container.
        </div>
      </div>
      <div class="relative">
        <div class="soft-shadow rounded-3xl border border-white/20 bg-white/10 h-[420px] w-full"></div>
        <div class="soft-shadow rounded-3xl border border-white/20 bg-white/10 h-[220px] w-3/4 -mt-12 ml-auto"></div>
      </div>
    </div>
  </div>
</section>

<section id="fit" class="w-full band-mist py-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[1.05fr_0.95fr] gap-16 items-start">
    <div class="space-y-6">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Who it's for</p>
      <h2 class="text-4xl leading-tight">A good fit when you're ready for depth.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer hendrerit, erat a malesuada elementum,
        lectus elit tristique tortor, et viverra sapien quam nec erat.
      </p>
      <ul class="space-y-3 text-lg text-[var(--muted)]">
        <li>Vestibulum ante ipsum primis in faucibus orci luctus.</li>
        <li>Morbi a ligula vel est laoreet pretium.</li>
        <li>Donec vitae sapien placerat, aliquet justo at.</li>
        <li>Quisque at libero vel eros finibus fermentum.</li>
        <li>Phasellus vulputate mauris ut purus gravida.</li>
        <li>Integer tincidunt velit nec mauris hendrerit.</li>
      </ul>
    </div>
    <div class="soft-shadow rounded-3xl bg-white/95 p-8 space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Good to discuss first</p>
      <ul class="space-y-3 text-lg text-[var(--muted)]">
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Donec in dui nec lorem commodo placerat.</li>
        <li>Phasellus mattis lorem et interdum vulputate.</li>
        <li>Morbi sed nisi sit amet ligula convallis tempor.</li>
        <li>Etiam vitae sapien at turpis aliquet sollicitudin.</li>
      </ul>
    </div>
  </div>
</section>

<section id="format" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[1.05fr_0.95fr] gap-16 items-start">
    <div class="space-y-6">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Retreat format</p>
      <h2 class="text-4xl leading-tight">A sample flow.</h2>
      <div class="space-y-4">
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
          <p class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]">Day 1</p>
          <p class="text-lg text-[var(--muted)]">Arrival, orientation, and grounding practices.</p>
        </div>
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
          <p class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]">Day 2</p>
          <p class="text-lg text-[var(--muted)]">Ceremony, rest, and integration support.</p>
        </div>
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-2">
          <p class="text-xs uppercase tracking-[0.2em] text-[var(--muted)]">Day 3</p>
          <p class="text-lg text-[var(--muted)]">Closing circle, aftercare, and departure.</p>
        </div>
      </div>
    </div>
    <div class="space-y-6">
      <div class="soft-shadow rounded-3xl border border-slate-300 bg-slate-200 h-[280px] w-full"></div>
      <div class="grid grid-cols-3 gap-4">
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-4 text-center text-sm text-[var(--muted)]">
          Morning
        </div>
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-4 text-center text-sm text-[var(--muted)]">
          Afternoon
        </div>
        <div class="rounded-3xl border border-slate-300 bg-white/90 p-4 text-center text-sm text-[var(--muted)]">
          Evening
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pricing" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="max-w-3xl space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Pricing &amp; booking</p>
      <h2 class="text-4xl leading-tight">Choose a path to reserve your space.</h2>
    </div>
    <div class="grid grid-cols-3 gap-6">
      <article class="rounded-3xl border border-slate-300 bg-white/95 p-6 space-y-4">
        <h3 class="text-2xl">Deposit</h3>
        <p class="text-3xl text-[var(--ink)]">$0,000</p>
        <ul class="text-sm text-[var(--muted)] space-y-2">
          <li>Secures your seat</li>
          <li>Payment plan options</li>
          <li>Includes screening</li>
          <li>Applied to total</li>
        </ul>
        <br><br>
        <a
            class="btn rounded-full bg-[var(--sage)] px-5 py-2 text-xs uppercase tracking-[0.25em] text-[var(--ink)]"
            href="#">
            Apply
        </a>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/95 p-6 space-y-4">
        <h3 class="text-2xl">Standard</h3>
        <p class="text-3xl text-[var(--ink)]">$0,000</p>
        <ul class="text-sm text-[var(--muted)] space-y-2">
          <li>All retreat elements</li>
          <li>Accommodation included</li>
          <li>Meals and support</li>
          <li>Aftercare sessions</li>
        </ul>
        <br><br>
        <a
            class="btn rounded-full bg-[var(--sage)] px-5 py-2 text-xs uppercase tracking-[0.25em] text-[var(--ink)]"
            href="#">
            Apply
        </a>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/95 p-6 space-y-4">
        <h3 class="text-2xl">Private / Extended</h3>
        <p class="text-3xl text-[var(--ink)]">$0,000</p>
        <ul class="text-sm text-[var(--muted)] space-y-2">
          <li>Private support</li>
          <li>Extended stay options</li>
          <li>Custom pacing</li>
          <li>Additional integration</li>
        </ul>
        <br><br>
        <a
            class="btn rounded-full bg-[var(--sage)] px-5 py-2 text-xs uppercase tracking-[0.25em] text-[var(--ink)]"
            href="#">
            Apply
        </a>
      </article>
    </div>
    <p class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
      Pricing is a placeholder. Final totals depend on dates and accommodation.
    </p>
  </div>
</section>

<section id="faq" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="max-w-3xl space-y-3">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Questions</p>
      <h2 class="text-4xl leading-tight">Frequently asked.</h2>
    </div>
    <div class="grid grid-cols-2 gap-6">
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-xl">Lorem ipsum dolor sit amet?</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed risus at felis placerat.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-xl">Aenean commodo ligula eget dolor?</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere, est in gravida consequat.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-xl">Donec quam felis ultricies nec?</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit arcu in nisl.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-xl">Nullam dictum felis eu pede?</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod risus nec ipsum.
        </p>
      </article>
    </div>
  </div>
</section>

<section id="closing" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="mx-auto max-w-3xl text-center space-y-6">
      <h3 class="text-3xl leading-tight">A clear invitation, held with care.</h3>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis, sem sed gravida aliquam, lorem
        lectus lacinia risus, a posuere ex nisi a ante.
      </p>
      <div class="flex items-center justify-center gap-4">
        <a
            class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
            href="#">
            Apply
        </a>
        <a
            class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-6 py-3 text-sm uppercase tracking-[0.25em]"
            href="#">
            Contact
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

