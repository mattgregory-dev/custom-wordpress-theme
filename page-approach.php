<?php
/**
 * Template Name: Approach
 */
get_header(
  null,
  array(
    'header_variant' => 'absolute',
    'header_color' => 'white',
  )
);
?>

<section id="approach-hero" class="section page-hero white full">
  <div class="section-container grid grid-cols-2 gap-16">
    <div class="space-y-6">
      <p class="label">Approach</p>
      <div class="sec-title">
        <h1 class="title animated-heading">This retreat is not about becoming whole. It is about noticing that wholeness was never missing.</h1>
      </div>
      <p class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor, nibh at efficitur mollis, justo
        turpis tincidunt lectus, in varius ligula lorem non nisl.
      </p>
    </div>
  </div>
</section>

<section class="py-24 text-center px-4">
  <?php get_template_part('partials/aya-motif') ?>
  <p class="label">Orientation</p>
  <div class="emphasis mt-12">
    <p>Before we talk about preparation…</p>
    <p>before ceremony…</p>
    <p>before the medicine, the dieta, the intentions, or the calendar…</p>
    <p class="mb-16">let's pause.</p>
    <p>Right here, right now, something is already effortlessly present.</p>
    <p class="mb-16"><strong>Awareness.</strong></p>
    <p>Not as a concept.</p>
    <p>Not as a spiritual achievement.</p>
    <p>Simply the undeniable fact that this moment is being known.</p>
    <p>Nothing you do will improve Awareness.</p>
    <p>Nothing you experience could damage it.</p>
    <p class="mb-10">Nothing you forgot, suffered, or survived ever left a mark on it.</p>
    <p><strong>This retreat is not about becoming whole.</strong></p>
    <p><strong>It is about gently noticing that wholeness was never missing.</strong></p>
  </div>
</section>

<section class="section">
  <div class="section-container grid grid-cols-1 gap-10 items-start lg:grid-cols-2 lg:gap-16">
    <div class="space-y-5 flex flex-col justify-center content-center h-full">
      <p class="label text-base uppercase tracking-[0.25em] text-[var(--muted)]">The ceremony</p>
      <!-- <p><hr></p> -->
      <h2 class="text-4xl leading-tight">The medicine does not give you truth.</h2>



      <p class="text-lg leading-relaxed text-[var(--muted)]">
Lumina is a retreat for people seeking meaningful personal healing and inner clarity.

Our work centers around carefully guided plant medicine ceremonies held in a safe and supportive environment. These ceremonies are not treated as isolated events, but as part of a larger process that includes preparation, integration, and thoughtful support throughout the experience.

The approach at Lumina blends traditional ceremonial wisdom with modern therapeutic practices. Each retreat is intentionally structured to help guests explore personal insight, emotional healing, and lasting change.

Everything we do is guided by clear standards of safety, ethics, and responsible facilitation.
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
















<!--

<section id="approach-container" class="w-full py-24">
  <div class="max-w-7xl mx-auto px-6">
    <div class="approach-dusk rounded-3xl p-10 lg:p-14 text-white grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-12 items-center">
      <div class="space-y-6">
        <p class="label text-sm uppercase tracking-[0.35em] text-white/70">The container</p>
        <h2 class="text-4xl leading-tight text-white">The Container</h2>
        <p class="text-lg leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet massa et lorem porttitor
          facilisis.
        </p>
        <ul class="space-y-3 text-lg text-white/80">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
        </ul>
        <div class="flex flex-wrap items-center gap-4 pt-2">
          <a
            class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
            href="<?php echo esc_url( home_url( '/apply' ) ); ?>"
          >
            Apply
          </a>
        </div>
      </div>
      <div class="approach-image h-[420px] w-full rounded-3xl flex items-center justify-center text-sm uppercase tracking-[0.2em] text-white/70">
        Image placeholder
      </div>
    </div>
  </div>
</section>

<section id="approach-medicine" class="w-full py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="max-w-2xl mx-auto text-center space-y-6">
      <p class="label text-sm uppercase tracking-[0.35em] text-[var(--muted)]">Plant medicine</p>
      <h2 class="text-4xl leading-tight">Plant Medicine</h2>
      <div class="space-y-3 text-lg text-[var(--muted)]">
        <p>Lorem ipsum dolor sit.</p>
        <p>Lorem ipsum dolor sit.</p>
        <p>Lorem ipsum dolor sit.</p>
      </div>
      <div class="space-y-6 text-lg leading-relaxed text-[var(--muted)]">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut sem ut ligula interdum lacinia eget
          non urna.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Phasellus ac ligula non massa
          commodo viverra.
        </p>
      </div>
      <div class="approach-card rounded-2xl px-6 py-4 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </div>
    </div>
  </div>
</section>

<section id="approach-somatic" class="w-full py-24">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-14 items-center">
    <div class="approach-image h-[420px] w-full rounded-3xl flex items-center justify-center text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
      Image placeholder
    </div>
    <div class="space-y-6">
      <p class="label text-sm uppercase tracking-[0.35em] text-[var(--muted)]">Somatic therapy</p>
      <h2 class="text-4xl leading-tight">Somatic Therapy</h2>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, velit at porta iaculis, erat magna
        ullamcorper justo, eu ultricies lacus nisl at ligula.
      </p>
      <p class="text-lg leading-relaxed text-[var(--muted)]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae malesuada odio, sit amet tincidunt
        lectus.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="approach-card rounded-2xl p-4 space-y-2">
          <h3 class="text-base uppercase tracking-[0.2em] text-[var(--muted)]">Feature title</h3>
          <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="approach-card rounded-2xl p-4 space-y-2">
          <h3 class="text-base uppercase tracking-[0.2em] text-[var(--muted)]">Feature title</h3>
          <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="approach-card rounded-2xl p-4 space-y-2">
          <h3 class="text-base uppercase tracking-[0.2em] text-[var(--muted)]">Feature title</h3>
          <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="approach-preparation" class="w-full py-24 approach-soft">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <p class="label text-sm uppercase tracking-[0.35em] text-[var(--muted)]">Preparation</p>
    <h2 class="mt-4 text-4xl leading-tight">Preparation</h2>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <p class="text-xs uppercase tracking-[0.25em] text-[var(--muted)]">01 Phase title</p>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <p class="text-xs uppercase tracking-[0.25em] text-[var(--muted)]">02 Phase title</p>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <p class="text-xs uppercase tracking-[0.25em] text-[var(--muted)]">03 Phase title</p>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <p class="text-xs uppercase tracking-[0.25em] text-[var(--muted)]">04 Phase title</p>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>
</section>

<section id="approach-framework" class="w-full py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center space-y-4">
      <p class="label text-sm uppercase tracking-[0.35em] text-[var(--muted)]">Holistic framework</p>
      <h2 class="text-4xl leading-tight">Holistic Framework</h2>
    </div>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-6 space-y-3">
        <div class="h-9 w-9 rounded-full bg-slate-200"></div>
        <h3 class="text-xl">Card title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>
</section>

<section id="approach-integration" class="w-full py-24">
  <div class="max-w-7xl mx-auto px-6">
    <div class="approach-dusk rounded-3xl p-10 lg:p-14 text-white grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-12 items-center">
      <div class="approach-image h-[420px] w-full rounded-3xl flex items-center justify-center text-sm uppercase tracking-[0.2em] text-white/70">
        Image placeholder
      </div>
      <div class="space-y-6">
        <p class="label text-sm uppercase tracking-[0.35em] text-white/70">Integration</p>
        <h2 class="text-4xl leading-tight text-white">Integration</h2>
        <p class="text-lg leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas commodo lorem et dui bibendum, sit amet
          porta odio posuere.
        </p>
        <p class="text-lg leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet libero eu tincidunt tincidunt.
        </p>
        <ul class="space-y-3 text-lg text-white/80">
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-white/70"></span>
            Lorem ipsum dolor sit amet.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="approach-standards" class="w-full py-24">
  <div class="max-w-6xl mx-auto px-6 text-center space-y-6">
    <p class="label text-sm uppercase tracking-[0.35em] text-[var(--muted)]">Standards</p>
    <h2 class="text-4xl leading-tight">Standards</h2>
    <p class="text-lg leading-relaxed text-[var(--muted)]">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac luctus lorem, vel tempor neque.
    </p>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <h3 class="text-lg">Title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <h3 class="text-lg">Title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <h3 class="text-lg">Title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="approach-card rounded-2xl p-5 space-y-2">
        <h3 class="text-lg">Title</h3>
        <p class="text-sm text-[var(--muted)]">Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>
</section>

<section id="approach-invitation" class="w-full py-24 approach-soft">
  <div class="max-w-4xl mx-auto px-6 text-center space-y-6">
    <h2 class="text-4xl leading-tight">Final Invitation</h2>
    <p class="text-lg leading-relaxed text-[var(--muted)]">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed lacus ac augue hendrerit lacinia.
    </p>
    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
      <a
        class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
        href="<?php echo esc_url( home_url( '/apply' ) ); ?>"
      >
        Apply
      </a>
      <a class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]" href="#">
        Learn about retreats
      </a>
    </div>
  </div>
</section>

-->

<?php get_footer(); ?>
