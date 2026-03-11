<?php
/**
 * Template Name: Ceremony
 */
get_header(
  null,
  array(
    'header_variant' => 'absolute',
    'header_color' => 'white',
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
              Staying Oriented When Intensity Arises
            </h2>
          </div>

          <div class="space-y-8 text-lg leading-relaxed">
            <p>
              Once ceremony begins, experiences may intensify.<br />
              Sensations may amplify.<br />
              Emotions may move quickly or slowly.<br />
              Thoughts may feel unfamiliar, poetic, fragmented, or insistent.
            </p>

            <div class="py-12">
              <div class="border-2 border-gray-300 p-10 text-center bg-gray-50">
                <p class="text-xl">
                  This is not a problem.
                </p>
              </div>
            </div>

            <p>
              This is the nature of altered perception.
            </p>

            <div class="pt-12">
              <div class="border-l-4 border-gray-900 pl-8">
                <p class="text-2xl leading-relaxed">
                  And still &mdash; Awareness remains exactly as it always is.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-4xl mx-auto">
          <div class="text-center mb-16">
            <span class="text-xs tracking-[0.2em] text-gray-600 mb-6 block">THE MOST IMPORTANT ORIENTATION</span>
            <div class="w-32 h-px bg-gray-300 mx-auto"></div>
          </div>

          <div class="space-y-8 text-lg leading-relaxed text-center">
            <p class="text-2xl">
              Nothing that arises is outside of Awareness.
            </p>

            <div class="py-12">
              <div class="space-y-6">
                <p>Nothing that arises has authority over Awareness.</p>
                <p>Nothing that arises defines you.</p>
              </div>
            </div>

            <div class="py-8">
              <p class="mb-6">
                The experience may feel personal.<br />
                The noticing of it is impersonal, spacious, kind.
              </p>
            </div>

            <div class="py-12">
              <div class="border-2 border-gray-900 p-12 bg-white max-w-2xl mx-auto">
                <p class="text-xl leading-relaxed mb-4">
                  When intensity builds, gently remember:
                </p>
                <div class="w-16 h-px bg-gray-900 mx-auto my-8"></div>
                <p class="text-2xl leading-relaxed">
                  &ldquo;I am not inside this experience.<br />
                  This experience is appearing inside what I am.&rdquo;
                </p>
              </div>
            </div>

            <div class="pt-8">
              <p class="text-sm text-gray-600">
                No need to repeat it like a mantra.
              </p>
              <p class="mt-4">
                Just let the recognition land softly.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8">
        <div class="max-w-5xl mx-auto">
          <div class="grid grid-cols-12 gap-16">
            <div class="col-span-4">
              <div class="sticky top-24">
                <h2 class="text-3xl tracking-tight mb-6">
                  When Sensation Feels Strong
                </h2>
                <div class="w-12 h-px bg-gray-900"></div>
              </div>
            </div>

            <div class="col-span-8 space-y-8 text-lg leading-relaxed">
              <p>Physical sensations may include:</p>

              <div class="grid grid-cols-2 gap-4">
                <div class="border-2 border-gray-300 p-6 text-center">
                  <p>&bull; heat or cold</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <p>&bull; pressure or vibration</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <p>&bull; nausea or release</p>
                </div>
                <div class="border-2 border-gray-300 p-6 text-center">
                  <p>&bull; expansion or contraction</p>
                </div>
              </div>

              <div class="pt-8">
                <p class="text-xl mb-6">
                  Rather than asking why, try noticing how.
                </p>

                <div class="pl-8 border-l-2 border-gray-300 space-y-4 text-gray-600">
                  <p>Where is the sensation located?</p>
                  <p>Does it move?</p>
                  <p>Does it change when it&rsquo;s allowed?</p>
                </div>
              </div>

              <div class="pt-12">
                <div class="border-2 border-gray-900 p-8 bg-gray-50">
                  <p class="text-xl text-center leading-relaxed">
                    Sensation is information, not danger.
                  </p>
                  <div class="w-24 h-px bg-gray-900 mx-auto my-6"></div>
                  <p class="text-xl text-center leading-relaxed">
                    And it moves more easily when it&rsquo;s not resisted.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-4xl text-center mb-16 tracking-tight">
            When Emotion Surfaces
          </h2>

          <div class="space-y-8 text-lg leading-relaxed">
            <p class="text-center">
              Emotions may come without explanation.
            </p>

            <div class="py-12">
              <div class="flex justify-start mb-6">
                <div class="max-w-xs">
                  <div class="bg-white border-2 border-gray-300 p-6">
                    <p>Tears without story.</p>
                  </div>
                </div>
              </div>

              <div class="flex justify-center mb-6">
                <div class="max-w-xs">
                  <div class="bg-white border-2 border-gray-300 p-6">
                    <p>Joy without reason.</p>
                  </div>
                </div>
              </div>

              <div class="flex justify-end">
                <div class="max-w-xs">
                  <div class="bg-white border-2 border-gray-300 p-6">
                    <p>Fear without a clear object.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="pt-12 text-center">
              <p class="text-2xl mb-12">
                Let them pass through like weather.
              </p>

              <div class="space-y-6">
                <p>You don&rsquo;t need to analyze.</p>
                <p>You don&rsquo;t need to narrate.</p>
                <p>You don&rsquo;t need to make meaning in the moment.</p>
              </div>

              <div class="pt-12">
                <div class="inline-block border-t-2 border-b-2 border-gray-900 py-8 px-12">
                  <p class="text-xl">
                    Awareness has room for all of it.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-4xl text-center mb-16 tracking-tight">
            When the Mind Gets Loud
          </h2>

          <div class="space-y-8 text-lg leading-relaxed">
            <p>The mind may attempt to:</p>

            <div class="flex justify-center gap-4 flex-wrap">
              <div class="border-2 border-gray-300 px-6 py-3">&bull; interpret</div>
              <div class="border-2 border-gray-300 px-6 py-3">&bull; predict</div>
              <div class="border-2 border-gray-300 px-6 py-3">&bull; control</div>
              <div class="border-2 border-gray-300 px-6 py-3">&bull; compare</div>
              <div class="border-2 border-gray-300 px-6 py-3">&bull; seek reassurance</div>
            </div>

            <div class="py-12">
              <div class="bg-gray-50 border-2 border-gray-300 p-10 text-center">
                <p class="text-xl mb-4">This is not failure.</p>
                <div class="w-16 h-px bg-gray-300 mx-auto my-6"></div>
                <p class="text-xl">It&rsquo;s habit.</p>
              </div>
            </div>

            <p class="text-center">
              You don&rsquo;t need to stop thinking.
            </p>

            <p class="text-center text-2xl">
              Just notice thinking.
            </p>

            <div class="pt-12">
              <div class="max-w-xl mx-auto border-l-4 border-gray-900 pl-8">
                <p class="text-lg mb-4">Sometimes simply saying inwardly,</p>
                <p class="text-2xl leading-relaxed">&ldquo;Ah&hellip; thinking,&rdquo;</p>
                <p class="text-lg mt-6">is enough to restore space.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-5xl mx-auto">
          <div class="grid grid-cols-12 gap-12 items-start">
            <div class="col-span-5">
              <div class="aspect-[3/4] border-2 border-gray-300 bg-gray-100 flex items-center justify-center sticky top-24">
                <span class="text-gray-400 text-sm">[ IMAGE ]</span>
              </div>
            </div>

            <div class="col-span-7">
              <h2 class="text-3xl mb-12 tracking-tight">
                Breath as an Anchor
              </h2>

              <div class="space-y-8 text-lg leading-relaxed">
                <p>
                  When things feel overwhelming, return to the breath.
                </p>

                <p class="text-sm text-gray-600">
                  Not to change the experience &mdash; but to feel something familiar and present.
                </p>

                <div class="pt-8">
                  <p class="mb-6">Notice:</p>

                  <div class="space-y-6">
                    <div class="bg-white border-2 border-gray-300 p-8">
                      <p class="text-center">the inhale arriving</p>
                    </div>

                    <div class="bg-white border-2 border-gray-300 p-8">
                      <p class="text-center">the exhale leaving</p>
                    </div>
                  </div>
                </div>

                <div class="pt-12">
                  <div class="border-l-4 border-gray-900 pl-8 space-y-6">
                    <p class="text-xl">
                      Breath is always happening now.
                    </p>
                    <p class="text-xl">
                      And now is always safe enough.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8">
        <div class="max-w-4xl mx-auto">
          <div class="mb-12">
            <div class="w-20 h-20 border-2 border-gray-900 mx-auto mb-8 flex items-center justify-center">
              <span class="text-2xl">ICON</span>
            </div>
            <h2 class="text-4xl text-center mb-6 tracking-tight">
              Asking for Support
            </h2>
          </div>

          <div class="space-y-8 text-lg leading-relaxed">
            <p class="text-center text-xl">
              You are not meant to do this alone.
            </p>

            <div class="py-12">
              <p class="mb-8 text-center">
                If you feel stuck, looping, disoriented, or overwhelmed:
              </p>

              <div class="grid grid-cols-3 gap-6">
                <div class="border-2 border-gray-900 p-8 text-center bg-gray-50">
                  <p>&bull; raise your hand</p>
                </div>
                <div class="border-2 border-gray-900 p-8 text-center bg-gray-50">
                  <p>&bull; ask for support</p>
                </div>
                <div class="border-2 border-gray-900 p-8 text-center bg-gray-50">
                  <p>&bull; allow yourself to be helped</p>
                </div>
              </div>
            </div>

            <div class="pt-12 text-center space-y-8">
              <div class="inline-block border-2 border-gray-300 p-10 bg-gray-50">
                <p class="text-xl mb-4">This is not weakness.</p>
                <div class="w-16 h-px bg-gray-900 mx-auto my-6"></div>
                <p class="text-xl">It&rsquo;s wisdom.</p>
              </div>

              <p class="pt-8">
                Receiving support is part of staying present.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
          <span class="text-xs tracking-[0.2em] text-gray-600 mb-12 block">A NOTE ON &ldquo;LETTING GO&rdquo;</span>

          <div class="space-y-12 text-lg leading-relaxed">
            <p class="text-2xl">
              Letting go is not something you do.
            </p>

            <div class="py-12">
              <div class="bg-white border-2 border-gray-300 p-12">
                <p class="text-xl leading-relaxed">
                  It happens naturally when resistance is no longer needed.
                </p>
              </div>
            </div>

            <p>
              If you notice yourself trying to surrender &mdash; smile gently.
            </p>

            <div class="pt-8">
              <div class="inline-block border-t-2 border-b-2 border-gray-900 py-8 px-12">
                <p class="text-xl">
                  Even effort is allowed.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-24 px-8">
        <div class="max-w-4xl mx-auto">
          <h2 class="text-4xl text-center mb-16 tracking-tight">
            Nothing Needs to Be Completed
          </h2>

          <div class="space-y-8 text-lg leading-relaxed">
            <p class="text-center text-xl">
              There is no finish line here.
            </p>

            <div class="py-12">
              <div class="flex justify-center gap-8">
                <div class="flex-1 max-w-xs border-2 border-gray-300 p-8 text-center">
                  <p>No lesson that must land.</p>
                </div>
                <div class="flex-1 max-w-xs border-2 border-gray-300 p-8 text-center">
                  <p>No breakthrough required.</p>
                </div>
              </div>
            </div>

            <div class="pt-8 space-y-6 text-center">
              <p>
                Some experiences feel unfinished because they are.
              </p>

              <p>
                Some feel quiet because quiet is enough.
              </p>
            </div>

            <div class="pt-12">
              <div class="bg-gray-50 border-2 border-gray-900 p-12 text-center">
                <p class="text-2xl leading-relaxed">
                  Awareness is not waiting for resolution.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-32 px-8 bg-gray-50">
        <div class="max-w-3xl mx-auto">
          <div class="text-center mb-16">
            <div class="w-32 h-32 mx-auto rounded-full border-2 border-gray-300 bg-gray-100 mb-12 flex items-center justify-center">
              <span class="text-gray-400 text-xs">ICON</span>
            </div>
            <span class="text-xs tracking-[0.2em] text-gray-600">A SIMPLE TRUST</span>
          </div>

          <div class="space-y-12 text-lg leading-relaxed text-center">
            <div class="flex justify-start">
              <div class="max-w-md">
                <div class="bg-white border-2 border-gray-300 p-8">
                  <p>Whatever arises is workable.</p>
                </div>
              </div>
            </div>

            <div class="flex justify-end">
              <div class="max-w-md">
                <div class="bg-white border-2 border-gray-300 p-8">
                  <p>Whatever doesn&rsquo;t arise is also perfect.</p>
                </div>
              </div>
            </div>

            <div class="pt-12 space-y-6">
              <p>The medicine is not testing you.</p>
              <p>Life is not evaluating you.</p>
              <p>Awareness is not keeping score.</p>
            </div>

            <div class="pt-12">
              <div class="border-t-2 border-b-2 border-gray-900 py-12 px-12">
                <p class="text-2xl leading-relaxed">
                  You are safe to be exactly where you are.
                </p>
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
