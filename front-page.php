<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom WordPress</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="app">Loading</div>
 
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

    <?php wp_footer(); ?>
  </body>
</html>

