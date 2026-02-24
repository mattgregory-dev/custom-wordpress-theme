<?php
get_header();
?>

<!-- HERO -->
<!-- Layout intent: full-width band with centered copy -->
<section id="top" class="w-full hero-band">
  <div class="hero-content max-w-[1240px] mx-auto px-4">
    <!-- HERO: single-column centered -->
    <!-- Animation hook: slow fade-in on hero copy -->
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

<!-- WHY PEOPLE COME -->
<!-- Layout intent: centered text with subtle flourish -->
<section id="approach" class="w-full pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="mx-auto max-w-3xl text-center space-y-6">
      <div class="aya-motif-wrap mx-auto h-[200px] w-[200px] rounded-full border border-slate-300 bg-white p-0 flex reveal-up">
        <svg id="aya_motif" xmlns="http://www.w3.org/2000/svg"
            viewBox="107.88 171.25 395.88 399.3"
            xml:space="preserve">

          <!-- CENTER -->
          <g id="center">
            <polygon class="stroke" points="324.3,370.5 306.71,353.08 287.57,370.5 305.93,389.29"/>
            <line class="stroke" x1="305.93" y1="412.92" x2="305.93" y2="389.29"/>
            <polyline class="stroke" points="299.98,437.23 299.98,417.57 305.93,413.28 312.75,417.75 312.75,437.23"/>
            <line class="stroke" x1="306.8" y1="329.46" x2="306.8" y2="353.08"/>
            <polyline class="stroke" points="312.75,305.15 312.75,324.81 306.8,329.1 299.98,324.63 299.98,305.15"/>

            <polyline class="stroke" points="287.35,370.22 263.81,370.29 263.81,360.66 235.12,360.66 235.12,380.36 263.59,380.36 263.76,370.76"/>
            <polyline class="stroke" points="234.62,369.44 219.8,369.32 208.44,358.67 198.02,369.73 208.93,380.74 219.45,369.44"/>
            <polyline class="stroke" points="197.07,369.71 173.95,369.71 162.34,358.67 149.88,369.71 162.13,381.66 173.11,370.17"/>
            <polyline class="stroke" points="149.3,369.68 129.09,369.68 126.34,363.01 110.23,363.01"/>
            <polyline class="stroke" points="128.92,369.95 125.47,377.06 109.88,377.06"/>

            <polyline class="stroke" points="324.3,370.22 347.84,370.29 347.84,360.66 376.53,360.66 376.53,380.36 348.06,380.36 347.89,370.76"/>
            <polyline class="stroke" points="377.03,369.44 391.85,369.32 403.21,358.67 413.63,369.73 402.72,380.74 392.2,369.44"/>
            <polyline class="stroke" points="414.58,369.71 437.7,369.71 449.31,358.67 461.77,369.71 449.52,381.66 438.54,370.17"/>
            <polyline class="stroke" points="462.35,369.68 482.56,369.68 485.31,363.01 501.41,363.01"/>
            <polyline class="stroke" points="482.73,369.95 486.18,377.06 501.76,377.06"/>

            <polyline class="stroke" points="298.92,437.23 269.73,437.23 268.56,449.39 254.73,449.39 254.03,476.23 236.33,458.89 253.68,458.07"/>
            <path class="stroke" d="M297.83,438.5c0,0-7.83,1.67-20.17,13.33v6"/>
            <path class="stroke" d="M255.5,458.67h31.85v50.17c0,0,0.65,11,18.65,11.33"/>

            <polyline class="stroke" points="313.09,437.23 342.28,437.23 343.45,449.39 357.28,449.39 357.98,476.23 375.68,458.89 358.33,458.07"/>
            <path class="stroke" d="M314.18,438.5c0,0,7.83,1.67,20.17,13.33v6"/>
            <path class="stroke" d="M356.51,458.67h-31.85v50.17c0,0-0.65,11-18.65,11.33"/>

            <polyline class="stroke" points="298.92,304.58 269.73,304.58 268.56,292.42 254.73,292.42 254.03,265.58 236.33,282.92 253.68,283.74"/>
            <path class="stroke" d="M297.83,303.31c0,0-7.83-1.67-20.17-13.33v-6"/>
            <path class="stroke" d="M255.5,283.14h31.85v-50.17c0,0,0.65-11,18.65-11.33"/>

            <polyline class="stroke" points="313.09,304.58 342.28,304.58 343.45,292.42 357.28,292.42 357.98,265.58 375.68,282.92 358.33,283.74"/>
            <path class="stroke" d="M314.18,303.31c0,0,7.83-1.67,20.17-13.33v-6"/>
            <path class="stroke" d="M356.51,283.14h-31.85v-50.17c0,0-0.65-11-18.65-11.33"/>

            <line class="stroke" x1="245.01" y1="370.51" x2="253.25" y2="370.51"/>
            <line class="stroke" x1="360.24" y1="370.51" x2="368.48" y2="370.51"/>
            <line class="stroke" x1="304.02" y1="367.69" x2="308.94" y2="372.59"/>
            <line class="stroke" x1="303.72" y1="372.75" x2="308.78" y2="367.85"/>
          </g>

          <!-- CENTER RING (split into 4 quadrants for sequencing) -->
          <g id="center_ring">
            <g id="ring_top_left">
              <path class="stroke" d="M253.25,359.87V338.7l-9.8-9.6c0,0-12.77,12.92-22.74,6.28c0,0-5.85-4.08-5.15-21.04"/>
              <polyline class="stroke" points="215.97,326.63 202.35,326.63 202.35,315.58"/>
              <path class="stroke" d="M215.41,314.04c0,0-38.41,10.79-43.5-28.96c0,0,1.22-37.68,33.41-38.9c0,0,25.01-0.7,23.44,26.41c0,0-3.85,19.63-26.41,11.39l-1.05,2.78l12.42,10.49"/>
              <line class="stroke" x1="214.24" y1="287.45" x2="214.24" y2="301.27"/>
              <polyline class="stroke" points="195.82,247.21 195.82,235.54 206.7,235.54 206.7,231.4 215.08,231.4 214.73,247.21"/>
              <path class="stroke" d="M211.97,230.97c0,0,13.56-25.65,38.09-25.14c0,0,31.18-0.95,27.99,32.65l8.72,0.09"/>
            </g>

            <g id="ring_top_right">
              <path class="stroke" d="M358.89,359.87V338.7l9.8-9.6c0,0,12.77,12.92,22.74,6.28c0,0,5.85-4.08,5.15-21.04"/>
              <polyline class="stroke" points="396.16,326.63 409.79,326.63 409.79,315.58"/>
              <path class="stroke" d="M396.73,314.04c0,0,38.41,10.79,43.5-28.96c0,0-1.22-37.68-33.41-38.9c0,0-25.01-0.7-23.44,26.41c0,0,3.85,19.63,26.41,11.39l1.05,2.78l-12.42,10.49"/>
              <line class="stroke" x1="397.89" y1="287.45" x2="397.89" y2="301.27"/>
              <polyline class="stroke" points="416.32,247.21 416.32,235.54 405.44,235.54 405.44,231.4 397.06,231.4 397.4,247.21"/>
              <path class="stroke" d="M400.17,230.97c0,0-13.56-25.65-38.09-25.14c0,0-31.18-0.95-27.99,32.65l-8.72,0.09"/>
            </g>

            <g id="ring_bottom_left">
              <path class="stroke" d="M253.25,381.01v21.16l-9.8,9.6c0,0-12.77-12.92-22.74-6.28c0,0-5.85,4.08-5.15,21.04"/>
              <polyline class="stroke" points="215.97,414.24 202.35,414.24 202.35,425.29"/>
              <path class="stroke" d="M215.41,426.84c0,0-38.41-10.79-43.5,28.96c0,0,1.22,37.68,33.41,38.9c0,0,25.01,0.7,23.44-26.41c0,0-3.85-19.63-26.41-11.39l-1.05-2.78l12.42-10.49"/>
              <line class="stroke" x1="214.24" y1="453.42" x2="214.24" y2="439.61"/>
              <polyline class="stroke" points="195.82,493.67 195.82,505.33 206.7,505.33 206.7,509.48 215.08,509.48 214.73,493.67"/>
              <path class="stroke" d="M211.97,509.91c0,0,13.56,25.65,38.09,25.14c0,0,31.18,0.95,27.99-32.65l8.72-0.09"/>
            </g>

            <g id="ring_bottom_right" transform="translate(611.64 0) scale(-1 1)">
              <path class="stroke" d="M253.25,381.01v21.16l-9.8,9.6c0,0-12.77-12.92-22.74-6.28c0,0-5.85,4.08-5.15,21.04"/>
              <polyline class="stroke" points="215.97,414.24 202.35,414.24 202.35,425.29"/>
              <path class="stroke" d="M215.41,426.84c0,0-38.41-10.79-43.5,28.96c0,0,1.22,37.68,33.41,38.9c0,0,25.01,0.7,23.44-26.41c0,0-3.85-19.63-26.41-11.39l-1.05-2.78l12.42-10.49"/>
              <line class="stroke" x1="214.24" y1="453.42" x2="214.24" y2="439.61"/>
              <polyline class="stroke" points="195.82,493.67 195.82,505.33 206.7,505.33 206.7,509.48 215.08,509.48 214.73,493.67"/>
              <path class="stroke" d="M211.97,509.91c0,0,13.56,25.65,38.09,25.14c0,0,31.18,0.95,27.99-32.65l8.72-0.09"/>
            </g>
          </g>

          <!-- DETAILS -->
          <g id="details">
            <line class="stroke" x1="306.01" y1="520.73" x2="306.01" y2="568.55"/>
            <polyline class="stroke" points="305.32,536.45 295.73,536.45 295.73,545.24 284.11,545.24 275.56,554.84 275.56,565.32"/>
            <polyline class="stroke" points="306.53,536.45 316.13,536.45 316.13,545.24 327.74,545.24 336.29,554.84 336.29,565.32"/>

            <line class="stroke" x1="306.01" y1="221.08" x2="306.01" y2="173.26"/>
            <polyline class="stroke" points="305.32,205.35 295.73,205.35 295.73,196.56 284.11,196.56 275.56,186.97 275.56,176.48"/>
            <polyline class="stroke" points="306.53,205.35 316.13,205.35 316.13,196.56 327.74,196.56 336.29,186.97 336.29,176.48"/>

            <polyline class="stroke" points="162.29,357.25 162.29,332.38 152.68,322.59 162.29,322.23 162.29,313.15"/>
            <polyline class="stroke" points="162.82,331.93 171.38,322.59 162.82,322.59"/>
            <polyline class="stroke" points="162.29,382.17 162.29,407.04 152.68,416.83 162.29,417.18 162.29,426.27"/>
            <polyline class="stroke" points="162.82,407.48 171.38,416.83 162.82,416.83"/>

            <polyline class="stroke" points="449.84,357.25 449.84,332.38 440.22,322.59 449.84,322.23 449.84,313.15"/>
            <polyline class="stroke" points="450.37,331.93 458.92,322.59 450.37,322.59"/>
            <polyline class="stroke" points="449.84,382.17 449.84,407.04 440.22,416.83 449.84,417.18 449.84,426.27"/>
            <polyline class="stroke" points="450.37,407.48 458.92,416.83 450.37,416.83"/>

            <line class="stroke" x1="171.92" y1="278.62" x2="149.3" y2="278.62"/>
            <line class="stroke" x1="171.92" y1="289.02" x2="148.57" y2="289.02"/>
            <path class="stroke" d="M141.87,265.28c0,0,14.76,10.01,3.22,34.94c0,0-6.45,16.03-26.2,14.76"/>
            <polyline class="stroke" points="116.25,327.68 128.47,327.68 128.47,314.36"/>

            <line class="stroke" x1="439.92" y1="278.62" x2="462.54" y2="278.62"/>
            <line class="stroke" x1="439.92" y1="289.02" x2="463.27" y2="289.02"/>
            <path class="stroke" d="M469.97,265.28c0,0-14.76,10.01-3.22,34.94c0,0,6.45,16.03,26.2,14.76"/>
            <polyline class="stroke" points="495.58,327.68 483.37,327.68 483.37,314.36"/>

            <line class="stroke" x1="171.92" y1="466.02" x2="149.3" y2="466.02"/>
            <line class="stroke" x1="171.92" y1="455.62" x2="148.57" y2="455.62"/>
            <path class="stroke" d="M141.87,479.37c0,0,14.76-10.01,3.22-34.94c0,0-6.45-16.03-26.2-14.76"/>
            <polyline class="stroke" points="116.25,416.97 128.47,416.97 128.47,430.28"/>

            <line class="stroke" x1="439.92" y1="466.02" x2="462.54" y2="466.02"/>
            <line class="stroke" x1="439.92" y1="455.62" x2="463.27" y2="455.62"/>
            <path class="stroke" d="M469.97,479.37c0,0-14.76-10.01-3.22-34.94c0,0,6.45-16.03,26.2-14.76"/>
            <polyline class="stroke" points="495.58,416.97 483.37,416.97 483.37,430.28"/>

            <line class="stroke" x1="245.3" y1="205.82" x2="245.3" y2="182.93"/>
            <line class="stroke" x1="254.75" y1="206.19" x2="254.75" y2="180.12"/>
            <line class="stroke" x1="367.49" y1="205.82" x2="367.49" y2="183.46"/>
            <line class="stroke" x1="358.04" y1="206.19" x2="358.04" y2="180.65"/>

            <line class="stroke" x1="245.3" y1="535.74" x2="245.3" y2="558.61"/>
            <line class="stroke" x1="254.75" y1="535.38" x2="254.75" y2="561.42"/>
            <line class="stroke" x1="367.49" y1="535.74" x2="367.49" y2="558.61"/>
            <line class="stroke" x1="358.04" y1="535.38" x2="358.04" y2="561.42"/>
          </g>

          <!-- OUTER CIRCLE -->
          <g id="circle">
            <ellipse class="stroke" cx="305.82" cy="370.9" rx="195.94" ry="197.65"/>
          </g>

        </svg>
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





<!-- ROLE OF THE MEDICINE -->
<!-- Layout intent: two-column with circular mask visual -->
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
      <!-- Masked image treatment with goddess artwork -->
        <div class="soft-shadow rounded-3xl bg-white/90">
          <div class="image-mask h-[700px] w-full overflow-hidden">
            <img
              src="/wp-content/uploads/ceremony.webp"
              alt="Goddess holding a ceremonial cup"
              class="h-full w-full object-cover"
            />
          </div>
        </div>
    </div>
  </div>
</section>





<!-- WHAT IT CAN FEEL LIKE -->
<!-- Layout intent: centered heading + 3-card grid -->
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



<!-- PREPARATION + RESPONSIBILITY -->
<!-- Layout intent: dark band with checklist card -->
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


<!-- RETREAT PATHWAYS -->
<!-- Layout intent: four-card grid + pill -->
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




<!-- ABOUT -->
<!-- Layout intent: asymmetrical two-column with image + values -->
<!-- band-mist -->
<section id="about" class="w-full pt-14 pb-14">
  <div class="max-w-[1240px] mx-auto px-6 grid grid-cols-1 gap-10 items-center lg:grid-cols-[0.95fr_1.05fr] lg:gap-16">
    <div class="relative">
      <div class="soft-shadow relative z-10 rounded-[260px_260px_28px_28px] bg-white/90">
        <div class="image-mask h-[700px] w-full rounded-[260px_260px_28px_28px] overflow-hidden">
          <img
            src="/wp-content/uploads/sedona.webp"
            alt="Portrait in soft light"
            class="h-full w-full object-cover"
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
