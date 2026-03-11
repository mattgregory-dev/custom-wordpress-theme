<?php
/**
 * Template Name: Safety
 */
get_header(
  null,
  array(
    'header_variant' => 'absolute',
    //'header_color' => 'white',
  )
);
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();

    $raw_content = get_post_field( 'post_content', get_the_ID() );
    $blocks = parse_blocks( $raw_content );
    ?>

    <div class="bg-white">
      <?php include get_template_directory() . '/partials/slots/hero-slot.php'; ?>

      <section class="py-24 px-8">
        <div class="max-w-5xl mx-auto">
          <div class="text-center mb-12">
            <span class="text-xs tracking-[0.2em] text-gray-600">THE JOURNEY</span>
          </div>

          <?php include get_template_directory() . '/partials/journey-steps.php'; ?>
        </div>
      </section>

      <section class="py-24 px-8">
        <div class="max-w-4xl mx-auto">
          <div class="mb-16">
            <div class="w-24 h-24 rounded-full border-2 border-gray-300 mx-auto mb-8 flex items-center justify-center">
              <span class="text-gray-400 text-xs">ICON</span>
            </div>
            <h2 class="text-4xl text-center mb-12 tracking-tight">
              You Are Not Doing This Alone
            </h2>
          </div>

          <div class="space-y-8 text-lg leading-relaxed">
            <p>
              Even though Awareness is always whole, the human experience benefits from care, clarity, and connection.
            </p>

            <div class="py-12">
              <div class="border-l-4 border-gray-900 pl-8">
                <p class="text-2xl leading-relaxed">
                  This retreat is held within a container of support &mdash; not to manage your awakening, but to tend to the body, the nervous system, and the practical realities of integration.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
          <div class="grid grid-cols-12 gap-12 items-start">
            <div class="col-span-5">
              <div class="aspect-[3/4] border-2 border-gray-300 bg-gray-100 flex items-center justify-center sticky top-24">
                <span class="text-gray-400 text-sm">[ IMAGE ]</span>
              </div>
            </div>

            <div class="col-span-7">
              <h2 class="text-4xl tracking-tight mb-12">
                Asking for Support Is Wisdom
              </h2>

              <div class="space-y-8 text-lg leading-relaxed">
                <p>
                  If questions arise &mdash; before, during, or after ceremony &mdash; reach out.
                </p>

                <p>
                  If something feels confusing, tender, or intense, you don&rsquo;t need to hold it by yourself.
                </p>

                <div class="py-8">
                  <div class="h-px bg-gray-300 w-24"></div>
                </div>

                <div class="border-2 border-gray-900 p-8">
                  <p class="text-xl leading-relaxed">
                    Support is not a sign that something went wrong.
                  </p>
                  <p class="text-xl leading-relaxed mt-4">
                    It&rsquo;s a sign that something is being honored.
                  </p>
                </div>

                <p class="pt-8">
                  Sometimes all that&rsquo;s needed is to be heard without interpretation.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8">
        <div class="max-w-5xl mx-auto">
          <div class="text-center mb-20">
            <h2 class="text-4xl tracking-tight mb-6">
              Safety Is Sacred (and Very Practical)
            </h2>
            <div class="flex justify-center">
              <div class="w-32 h-px bg-gray-300"></div>
            </div>
          </div>

          <div class="max-w-3xl mx-auto space-y-8 text-lg leading-relaxed">
            <p class="text-center">
              While the essence of who you are cannot be harmed, your body and mind deserve thoughtful care.
            </p>

            <div class="py-12">
              <p class="text-sm text-gray-600 mb-6 text-center">This is why we emphasize:</p>
              <div class="grid grid-cols-2 gap-6">
                <div class="border-2 border-gray-300 p-6 text-center">
                  <div class="w-12 h-12 rounded-full border border-gray-300 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xs text-gray-400">&check;</span>
                  </div>
                  <p>&bull; honest medical screening</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <div class="w-12 h-12 rounded-full border border-gray-300 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xs text-gray-400">&check;</span>
                  </div>
                  <p>&bull; transparent communication</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <div class="w-12 h-12 rounded-full border border-gray-300 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xs text-gray-400">&check;</span>
                  </div>
                  <p>&bull; adherence to substance guidelines</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <div class="w-12 h-12 rounded-full border border-gray-300 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-xs text-gray-400">&check;</span>
                  </div>
                  <p>&bull; clear boundaries in ceremony</p>
                </div>
              </div>
            </div>

            <p class="text-center">
              These are not rules imposed from above &mdash; they are agreements rooted in respect.
            </p>

            <div class="pt-12">
              <div class="inline-block border-t-2 border-b-2 border-gray-900 py-6 px-12 w-full text-center">
                <p class="text-2xl">
                  Safety allows surrender to be genuine.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8 bg-gray-50">
        <div class="max-w-5xl mx-auto">
          <div class="grid grid-cols-12 gap-16">
            <div class="col-span-4">
              <div class="sticky top-24">
                <div class="w-16 h-16 border-2 border-gray-900 mb-6 flex items-center justify-center">
                  <span class="text-xs text-gray-400">?</span>
                </div>
                <h2 class="text-3xl tracking-tight mb-6">
                  Questions About Logistics &amp; Practicalities
                </h2>
                <div class="w-12 h-px bg-gray-900"></div>
              </div>
            </div>

            <div class="col-span-8">
              <div class="space-y-8 text-lg leading-relaxed">
                <p class="mb-8">Questions about:</p>

                <div class="space-y-4">
                  <div class="bg-white border-2 border-gray-300 p-6 flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full border border-gray-300 flex-shrink-0"></div>
                    <p>&bull; travel</p>
                  </div>
                  <div class="bg-white border-2 border-gray-300 p-6 flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full border border-gray-300 flex-shrink-0"></div>
                    <p>&bull; transportation</p>
                  </div>
                  <div class="bg-white border-2 border-gray-300 p-6 flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full border border-gray-300 flex-shrink-0"></div>
                    <p>&bull; food</p>
                  </div>
                  <div class="bg-white border-2 border-gray-300 p-6 flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full border border-gray-300 flex-shrink-0"></div>
                    <p>&bull; scheduling</p>
                  </div>
                  <div class="bg-white border-2 border-gray-300 p-6 flex items-center gap-4">
                    <div class="w-8 h-8 rounded-full border border-gray-300 flex-shrink-0"></div>
                    <p>&bull; accommodations</p>
                  </div>
                </div>

                <p class="pt-8">
                  are welcome and encouraged.
                </p>

                <div class="pt-8 pl-8 border-l-4 border-gray-900">
                  <p class="text-2xl leading-relaxed">
                    The smoother the practical details, the more spacious the inner experience can be.
                  </p>
                </div>

                <p class="pt-8 text-xl">
                  Nothing is too small to ask.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8">
        <div class="max-w-4xl mx-auto">
          <div class="text-center mb-20">
            <div class="w-32 h-32 mx-auto rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center mb-8">
              <span class="text-gray-400 text-xs">ICON</span>
            </div>
            <h2 class="text-4xl tracking-tight mb-6">
              Availability After Ceremony
            </h2>
            <div class="flex justify-center">
              <div class="w-32 h-px bg-gray-300"></div>
            </div>
          </div>

          <div class="space-y-8 text-lg leading-relaxed">
            <p class="text-center text-xl">
              Integration does not end when you leave Sedona.
            </p>

            <div class="py-12">
              <p class="text-sm text-gray-600 mb-8 text-center">Reach out if:</p>
              <div class="max-w-2xl mx-auto space-y-6">
                <div class="bg-gray-50 border-2 border-gray-300 p-8">
                  <p>&bull; emotions feel unexpectedly strong</p>
                </div>
                <div class="bg-gray-50 border-2 border-gray-300 p-8">
                  <p>&bull; insights feel destabilizing</p>
                </div>
                <div class="bg-gray-50 border-2 border-gray-300 p-8">
                  <p>&bull; old material resurfaces</p>
                </div>
                <div class="bg-gray-50 border-2 border-gray-300 p-8">
                  <p>&bull; you simply want to share or check in</p>
                </div>
              </div>
            </div>

            <p class="text-center">
              No experience needs to be rushed into meaning.
            </p>

            <div class="pt-12 text-center">
              <div class="inline-block px-12 py-8 bg-gray-50 border-2 border-gray-300">
                <p class="text-2xl">
                  Sometimes the most helpful thing is gentle orientation and reassurance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
          <h2 class="text-4xl mb-16 tracking-tight">
            Trusting Your Own Inner Timing
          </h2>

          <div class="space-y-8 text-lg leading-relaxed">
            <div class="py-8">
              <div class="inline-block border-t-2 border-b-2 border-gray-900 py-6 px-12">
                <p class="text-xl">
                  There is no timeline for &ldquo;being done.&rdquo;
                </p>
              </div>
            </div>

            <div class="space-y-12 py-12">
              <div class="flex justify-start">
                <div class="max-w-md text-left">
                  <p>Some things integrate quickly.</p>
                </div>
              </div>

              <div class="flex justify-center">
                <div class="max-w-md">
                  <p>Some things unfold over months or years.</p>
                </div>
              </div>

              <div class="flex justify-end">
                <div class="max-w-md text-right">
                  <p>Some things quietly dissolve without announcement.</p>
                </div>
              </div>
            </div>

            <div class="pt-12">
              <p class="text-2xl">
                Awareness is never late.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8">
        <div class="max-w-4xl mx-auto">
          <div class="mb-16">
            <div class="w-32 h-32 mx-auto rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center">
              <span class="text-gray-400 text-xs">ICON</span>
            </div>
          </div>

          <div class="space-y-8 text-lg leading-relaxed max-w-3xl mx-auto">
            <p>
              Thank you for saying yes &mdash; not to an experience, but to presence.
            </p>

            <p>
              Thank you for trusting the intelligence of your own heart and the simplicity of being here.
            </p>

            <div class="py-12">
              <div class="border-t-2 border-b-2 border-gray-900 py-12 px-8 text-center">
                <p class="text-2xl leading-relaxed mb-6">
                  Nothing about you needs improvement.
                </p>
                <p class="text-2xl leading-relaxed">
                  Nothing essential is at risk.
                </p>
              </div>
            </div>

            <p class="text-xl text-center">
              May this retreat feel less like an event and more like a deep exhale.
            </p>

            <div class="pt-12 text-center">
              <div class="inline-block text-left border-l-2 border-gray-300 pl-8">
                <p class="mb-4">
                  With love, celebration, and steady companionship,
                </p>
                <div class="pt-4">
                  <div class="w-24 h-12 border-b-2 border-gray-900 mb-2"></div>
                  <p class="text-xl">Ash</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include get_template_directory() . '/partials/slots/next-step-slot.php'; ?>

    </div>

    <?php
  endwhile;
endif;
?>

<?php
get_footer();
