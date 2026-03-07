<?php
get_header(
  null,
  array(
    'header_variant' => 'absolute',
    'header_color' => 'white',
  )
);
?>

<section id="front-page-hero" class="section full page-hero white">
  <div class="section-container grid grid-cols-2 gap-16">
    <div class="space-y-6">
      <p class="label">The ceremony</p>
      <div class="sec-title">
        <h1 class="title animated-heading">A guided return to what is already here.</h1>
      </div>
      <p class="description mt-8 mb-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor, nibh at efficitur mollis, justo
        turpis tincidunt lectus, in varius ligula lorem non nisl.
      </p>
      <div class="flex items-center gap-4 text-xs uppercase tracking-[0.2em] text-[var(--muted)]">
        <span class="mini-pill border border-slate-300">3 nights</span>
        <span class="mini-pill border border-slate-300">Small group</span>
        <span class="mini-pill border border-slate-300">Quiet setting</span>
      </div>
    </div>
  </div>
</section>

<section id="top" class="w-full hero-band hidden">
  <div class="hero-content max-w-[1240px] mx-auto px-4">
    <div class="flex items-center">
      <div class="max-w-3xl mx-auto text-center space-y-8">
        <p class="playfair accent text-xl text-[var(--dusk-soft)]" data-animate="hero-preline">
          A quiet return to what is already here
        </p>
        <h1 class="text-5xl leading-tight" data-animate="hero-headline">Nothing about you is broken.</h1>
        <p class="text-lg leading-relaxed text-[var(--dusk-soft)]" data-animate="hero-copy">
          This is not a place to fix yourself. It is a space to remember what never left. Before preparation. Before
          ceremony. Before anything. Something is already present -- effortlessly whole.
        </p>
        <p class="text-base uppercase tracking-[0.2em] text-[var(--dusk-soft)]">
          Guided plant-medicine retreats held with clear preparation, screening, and ongoing support.
        </p>
        <div class="flex flex-col items-center justify-center gap-4 pt-4 sm:flex-row" data-animate="hero-cta">
          <a
              class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
              href="#contact">
              Start a Conversation
          </a>
          <a
              class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-6 py-3 text-sm uppercase tracking-[0.25em]"
              href="#retreats">
              Explore the Retreats
          </a>
        </div>
      </div>
    </div>
  </div>
</section>














<section id="approach" class="w-full pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="mx-auto max-w-3xl text-center space-y-6">
      <div class="aya-motif mx-auto h-[200px] w-[200px] rounded-full border border-slate-300 bg-white p-0 flex reveal-up">
        <?php get_template_part('partials/aya-motif') ?>
      </div>
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)] reveal-up">The orientation</p>
      <h2 class="text-4xl leading-tight reveal-fade">We do not come because something is wrong.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)] reveal-fade">
        We come because life gets loud. Attention narrows.
        We learn to live inside stories, roles, and identities that feel solid -- even when they are not.
        Over time we forget the simplicity of being here. Not through failure. Through conditioning.
        This work does not add anything to you. It helps quiet what is in the way.
      </p>
    </div>
  </div>
</section>






<section id="experience" class="w-full pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-1 gap-10 items-start lg:grid-cols-[1.05fr_0.95fr] lg:gap-16">
    <div class="space-y-5 flex flex-col justify-center content-center h-full">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">The ceremony</p>
      <!-- <p><hr></p> -->
      <h2 class="text-4xl leading-tight">The medicine does not give you truth.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        It does not awaken awareness. It appears within it.
        It does not complete you. It can interrupt the habit of believing you are incomplete.
        Experiences may be vivid, subtle, uncomfortable, beautiful -- or none of the above.
        None of these are measures of success. What matters is the noticing of what is happening.
      </p>
      <p class="accent text-xl text-[var(--muted)]">Awareness does not advertise itself.</p>
    </div>
    <div class="relative">
      <div class="soft-shadow">
        <div class="h-[700px] w-full">
          <img
            src="/wp-content/uploads/ceremony.webp"
            alt="Goddess holding a ceremonial cup"
            class="h-full w-full object-cover rounded-3xl"
          />
        </div>
      </div>
    </div>
  </div>
</section>





<section id="feel" class="w-full pt-14 pb-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-12">
    <div class="text-center space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">In practice</p>
      <h2 class="text-4xl leading-tight">What the experience can feel like</h2>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      <article class="soft-shadow rounded-3xl bg-white/90 p-8 space-y-4">
        <div class="h-[120px] w-[120px] rounded-full border border-slate-300 bg-slate-200"></div>
        <h3 class="text-2xl">Sensation</h3>
        <p class="text-[var(--muted)] text-lg">Heat, cold, pressure, release, stillness.</p>
      </article>
      <article class="soft-shadow rounded-3xl bg-white/90 p-8 space-y-4">
        <div class="h-[120px] w-[120px] rounded-full border border-slate-300 bg-slate-200"></div>
        <h3 class="text-2xl">Emotion</h3>
        <p class="text-[var(--muted)] text-lg">Tears without story. Joy without reason. Fear without an object.</p>
      </article>
      <article class="soft-shadow rounded-3xl bg-white/90 p-8 space-y-4">
        <div class="h-[120px] w-[120px] rounded-full border border-slate-300 bg-slate-200"></div>
        <h3 class="text-2xl">Quiet</h3>
        <p class="text-[var(--muted)] text-lg">
          Sometimes nothing dramatic happens -- and something essential softens anyway.
        </p>
      </article>
    </div>
    <p class="text-center text-base uppercase tracking-[0.2em] text-[var(--muted)]">
      There are no right experiences here.
    </p>
  </div>
</section>




<section id="preparation" class="w-full px-4 sm:px-6 lg:px-10">
  <div class="w-full band-dusk text-white preparation-band py-20 rounded-2xl">
    <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-1 gap-10 items-start lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">
      <div class="space-y-6">
        <p class="label text-base uppercase tracking-[0.25em] text-white/70">Care &amp; respect</p>
        <h2 class="text-4xl leading-tight text-white">Preparation is not a test.</h2>
        <p class="text-lg leading-relaxed text-white/70">
          Preparation is not about earning a good ceremony. It is an act of care for the body and nervous system you
          inhabit. We emphasize clear preparation, honest screening, and steady support -- not as rules, but as
          respect.
        </p>
      </div>
      <div class="soft-shadow rounded-3xl bg-white/95 p-8 text-[var(--ink)] space-y-4">
        <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">What is included</p>
        <ul class="space-y-3 text-lg text-[var(--muted)]">
          <li>Clear preparation guidance</li>
          <li>Medical screening and transparency</li>
          <li>Skilled facilitation and boundaries</li>
          <li>Support before and after you return home</li>
        </ul>
      </div>
    </div>
  </div>
</section>



<section id="retreats" class="w-full pt-20 pb-14">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="flex flex-col items-start justify-between gap-6 lg:flex-row lg:items-end">
      <div class="space-y-3">
        <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Choose your container</p>
        <h2 class="text-4xl leading-tight">Different lengths. The same invitation.</h2>
      </div>
      <span class="mini-pill border border-slate-300">Aftercare included</span>
    </div>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <article class="rounded-3xl border border-slate-300 soft-shadow bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">5 Days</h3>
        <p class="text-lg text-[var(--muted)]">Grounding &amp; Clarity</p>
        <p class="text-base text-[var(--muted)]">A gentle entry point.</p>
        <p><span class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">Learn more</span></p>
      </article>
      <article class="rounded-3xl border border-slate-300 soft-shadow bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">7 Days</h3>
        <p class="text-lg text-[var(--muted)]">Embodied Transformation</p>
        <p class="text-base text-[var(--muted)]">More space to deepen.</p>
        <p><span class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">Learn more</span></p>
      </article>
      <article class="rounded-3xl border border-slate-300 soft-shadow bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">14 Days</h3>
        <p class="text-lg text-[var(--muted)]">Renewal &amp; Repatterning</p>
        <p class="text-base text-[var(--muted)]">Extended integration and insight.</p>
        <p><span class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">Learn more</span></p>
      </article>
      <article class="rounded-3xl border border-slate-300 soft-shadow bg-white/90 p-6 space-y-3">
        <h3 class="text-2xl">21 Days</h3>
        <p class="text-lg text-[var(--muted)]">Rebirth &amp; Embodiment</p>
        <p class="text-base text-[var(--muted)]">A spacious arc for profound inquiry.</p>
        <p><span class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">Learn more</span></p>
      </article>
    </div>
    <p class="accent text-xl text-[var(--muted)]">Length does not determine depth. Choose the container that fits your life.</p>
  </div>
</section>





<section id="about" class="w-full pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-1 gap-10 items-center lg:grid-cols-[0.95fr_1.05fr] lg:gap-16">
    <div class="relative">
      <div class="soft-shadow relative z-10">
        <div class="h-[700px] w-full overflow-hidden">
          <img
            src="/wp-content/uploads/sedona.webp"
            alt="Portrait in soft light"
            class="h-full w-full object-cover rounded-3xl"
          />
        </div>
      </div>
    </div>
    <div class="space-y-6">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Who we are</p>
      <h2 class="text-4xl leading-tight">A sanctuary for deep, intentional inner work.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lumina is a purpose-built space for people who feel called to pause, listen, and meet themselves honestly.
        We do not promise the moon. We create the conditions for real inquiry, supported with care.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Our work blends ceremony, body-based practices, nourishing meals, quiet, and integration support.
        The goal is not a peak experience. The goal is a lived return to clarity, steadiness, and wholeness.
      </p>
      <div class="flex flex-wrap items-center gap-4 text-xs uppercase tracking-[0.2em] text-[var(--muted)]">
        <span class="mini-pill border border-slate-300">Calm professionalism</span>
        <span class="mini-pill border border-slate-300">Respect for the body</span>
        <span class="mini-pill border border-slate-300">Integration over intensity</span>
      </div>
    </div>
  </div>
</section>








<!-- TESTIMONIALS -->
<!-- Layout intent: soft gradient band with 3 cards -->
<section id="testimonials" class="w-full testimonials-band pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6 space-y-12">
    <div class="text-center space-y-3">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Voices</p>
      <h2 class="text-4xl leading-tight">What guests discovered</h2>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      <article class="soft-shadow rounded-[28px] bg-white/95 px-10 py-12 text-center space-y-8">
        <div class="star-row text-2xl text-[var(--sage)]">★★★★★</div>
        <p class="text-lg leading-relaxed text-[var(--dusk-soft)]">
          “I came to this retreat overwhelmed by life. Each practice, each meal, each moment of stillness helped
          me soften. I found a sense of peace I hadn't felt in years — it truly changed something deep inside.”
        </p>
        <div class="flex flex-col items-center gap-4">
          <div class="avatar h-14 w-14 rounded-full border border-slate-300 flex items-center justify-center">
            <img src="/wp-content/uploads/kandy-avatar.png">
          </div>
          <p class="text-sm uppercase tracking-[0.2em] text-[var(--dusk-soft)]">
            Emily R., Roots of Stillness — Tuscany
          </p>
        </div>
      </article>
      <article class="soft-shadow rounded-[28px] bg-white/95 px-10 py-12 text-center space-y-8">
        <div class="star-row text-2xl text-[var(--sage)]">★★★★★</div>
        <p class="text-lg leading-relaxed text-[var(--dusk-soft)]">
          “The retreat felt gentle, not performative. The practices were quiet but powerful, and I left with a
          steadier relationship to my own body.”
        </p>
        <div class="flex flex-col items-center gap-4">
          <div class="avatar h-14 w-14 rounded-full border border-slate-300 flex items-center justify-center">
            <img src="/wp-content/uploads/xavier-avatar.png">
          </div>
          <p class="text-sm uppercase tracking-[0.2em] text-[var(--dusk-soft)]">
            Sabine M., Rooted Days — Provence
          </p>
        </div>
      </article>
      <article class="soft-shadow rounded-[28px] bg-white/95 px-10 py-12 text-center space-y-8">
        <div class="star-row text-2xl text-[var(--sage)]">★★★★★</div>
        <p class="text-lg leading-relaxed text-[var(--dusk-soft)]">
          “I didn't feel fixed. I felt met. The simplicity of the space and the care in the details made
          everything land.”
        </p>
        <div class="flex flex-col items-center gap-4">
          <div class="avatar h-14 w-14 rounded-full border border-slate-300 flex items-center justify-center">
            <img src="/wp-content/uploads/max-avatar.png">
          </div>
          <p class="text-sm uppercase tracking-[0.2em] text-[var(--dusk-soft)]">
            Noor T., Quiet Bloom — Atlas
          </p>
        </div>
      </article>
    </div>
  </div>
</section>


<!-- INTEGRATION / LIFE AFTER -->
<!-- Layout intent: centered text with small image row -->
<section id="integration" class="w-full pt-14 pb-20">
  <div class="max-w-[1240px] mx-auto px-6 space-y-10">
    <div class="mx-auto max-w-3xl text-center space-y-4">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">After the retreat</p>
      <h2 class="text-4xl leading-tight">The ceremony ends. Nothing essential does.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Experiences fade. Life continues.
        Integration is not about holding onto an insight. It is about living from what did not come and go.
        The ordinary moments -- conversations, work, rest, boundaries -- become the practice.
        We offer ongoing support to help you re-enter life with steadiness and care.
      </p>
    </div>
    <!-- <div class="grid grid-cols-3 gap-6">
      <div class="image-mask h-40 rounded-3xl"></div>
      <div class="image-mask h-40 rounded-3xl"></div>
      <div class="image-mask h-40 rounded-3xl"></div>
    </div> -->
  </div>
</section>
<!-- CONTACT BAND + SHORT FORM -->
<!-- Layout intent: gradient band with form card -->
<!-- band-mist -->
<section id="contact" class="w-full pt-14 pb-20">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-1 gap-10 items-start lg:grid-cols-[1fr_1fr] lg:gap-16">
    <div class="space-y-6">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">Start here</p>
      <h2 class="text-4xl leading-tight">Begin a conversation.</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Not to commit. Not to perform. Just to ask questions and feel into whether this is right for you.
      </p>
      <ul class="text-sm text-[var(--muted)] space-y-2">
        <li>Ask anything. Practical or personal.</li>
        <li>No pressure. No rush.</li>
        <li>If it is not a fit, we will say so.</li>
      </ul>
    </div>
    <div class="soft-shadow rounded-3xl bg-white/95 p-8">
      <?php echo do_shortcode('[forminator_form id="213"]'); ?>
    </div>
  </div>
</section>











<?php
get_footer();
