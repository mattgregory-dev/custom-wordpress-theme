<?php
/**
 * Template Name: Lumina About (Tailwind)
 */
get_header();
?>

<!-- Layout intent: centered intro with generous spacing -->
<!-- HERO / ABOUT -->
<section id="about-hero" class="w-full hero-band min-h-screen">
  <div class="hero-content max-w-[1240px] mx-auto px-4 max-[1382px]:px-[6%]">
    <div class="pt-[84px] min-h-screen flex items-center">
      <div class="max-w-3xl space-y-6">
        <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">About Lumina</p>
        <h1 class="text-5xl leading-tight">A grounded space for real inner work.</h1>
        <p class="text-lg leading-relaxed text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim, augue in interdum lacinia, eros
          massa malesuada nibh, non sagittis erat lorem sed velit.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ORIGIN / WHY THIS EXISTS -->
<!-- Layout intent: two-column with supporting image placeholder -->
<section id="origin" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[1.05fr_0.95fr] gap-16 items-center">
    <div class="space-y-5">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Origin</p>
      <h2 class="text-4xl leading-tight">Why this place exists.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae massa vel ligula aliquam tincidunt.
        Integer non risus sed ligula pretium aliquam in et magna.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Nulla facilisi. Proin luctus, nibh at posuere volutpat, felis ligula pellentesque tortor, sed accumsan leo
        lectus nec massa. Sed viverra magna a ipsum dignissim, sit amet viverra augue tristique.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Curabitur id est quis nibh vulputate luctus. In hac habitasse platea dictumst. Morbi pretium sapien ac felis
        finibus, vitae ultricies massa interdum.
      </p>
    </div>
    <div class="soft-shadow rounded-3xl border border-slate-300 bg-slate-200 h-[420px] w-full"></div>
  </div>
</section>

<!-- GUIDING PHILOSOPHY / VALUES -->
<!-- Layout intent: centered intro with three-column rhythm -->
<section id="values" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="mx-auto max-w-3xl text-center space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Guiding philosophy</p>
      <h2 class="text-4xl leading-tight">Principles we return to.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra, nunc at posuere suscipit, sapien arcu
        finibus urna, at gravida orci lorem in lorem.
      </p>
    </div>
    <div class="grid grid-cols-3 gap-8">
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">Presence</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac tortor eget purus fermentum convallis.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">Integrity</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit metus sed justo vulputate, in congue
          orci facilisis.
        </p>
      </article>
      <article class="rounded-3xl border border-slate-300 bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">Care</h3>
        <p class="text-lg text-[var(--muted)]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Integer id mi nulla.
        </p>
      </article>
    </div>
  </div>
</section>

<!-- FACILITATOR / STEWARD -->
<!-- Layout intent: reversed two-column with larger image placeholder -->
<section id="steward" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-[0.95fr_1.05fr] gap-16 items-center">
    <div class="soft-shadow rounded-3xl border border-slate-300 bg-slate-200 h-[520px] w-full"></div>
    <div class="space-y-5">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Stewardship</p>
      <h2 class="text-4xl leading-tight">Guided by steady hands.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, sem nec luctus laoreet, erat
        nisl tempor mauris, a vehicula nisi ipsum non arcu.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Duis at lorem quis erat convallis dapibus. Aliquam erat volutpat. Suspendisse non feugiat tortor, nec sodales
        justo. Etiam semper, purus eu facilisis interdum, nisi mi lacinia arcu, vel molestie sapien lectus sed dui.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Praesent in posuere nisi. Morbi nec ullamcorper lorem. Integer sit amet leo vitae mi placerat convallis.
      </p>
    </div>
  </div>
</section>

<!-- HOW THIS DIFFERS -->
<!-- Layout intent: single-column with subtle background contrast -->
<section id="difference" class="w-full band-mist py-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl space-y-6">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">The difference</p>
      <h2 class="text-4xl leading-tight">A quieter way to engage.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat quam non magna aliquam, sed
        ullamcorper nibh accumsan.
      </p>
      <ul class="space-y-3 text-lg text-[var(--muted)]">
        <li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</li>
        <li>Sed at nisi sed massa fermentum suscipit quis non quam.</li>
        <li>Praesent et sapien mollis, efficitur nunc in, ullamcorper tortor.</li>
        <li>Morbi in ex sed sem luctus feugiat quis sed urna.</li>
      </ul>
    </div>
  </div>
</section>

<!-- CLOSING / INVITATION -->
<!-- Layout intent: minimal closing with generous spacing -->
<section id="closing" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-3xl space-y-4">
      <h3 class="text-2xl leading-tight">A place to pause and listen.</h3>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a sem sit amet lorem placerat convallis non
        at elit. Nam at justo nec velit convallis tincidunt.
      </p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
