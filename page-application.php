<?php
/**
 * Template Name: Application
 */
get_header();
?>

<section id="application-header" class="page-header">
  <div class="header-content">
    <p class="label">Getting to know you</p>
    <h1>Retreat Application</h1>
    <p class="description">
      This is a prescreen application for retreat consideration. This application takes about 10-15 minutes to
      complete.
    </p>
    <p class="text-sm text-[var(--muted)]">Fields marked with * are required.</p>
  </div>
</section>

<section id="application-form" class="w-full py-20">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="max-w-4xl">
      <form action="#" method="post" class="soft-shadow rounded-3xl border border-slate-300 bg-white/95 p-10 space-y-10">
        
        <fieldset class="space-y-6">
          <legend class="text-2xl">Basic information</legend>
          <div class="grid grid-cols-2 gap-6">
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              First Name *
              <input
                type="text"
                name="first_name"
                required
                placeholder="First name"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Last Name *
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
              Email *
              <input
                type="email"
                name="email"
                required
                placeholder="you@email.com"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Phone *
              <input
                type="tel"
                name="phone"
                required
                placeholder="(000) 000-0000"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
          </div>
          <div class="grid grid-cols-2 gap-6">
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              City *
              <input
                type="text"
                name="city"
                required
                placeholder="City"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              State / Region *
              <input
                type="text"
                name="state"
                required
                placeholder="State or region"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
          </div>
          <div class="grid grid-cols-2 gap-6">
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Country *
              <input
                type="text"
                name="country"
                required
                placeholder="Country"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Age *
              <input
                type="number"
                name="age"
                required
                min="18"
                placeholder="Age"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
          </div>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Preferred pronouns
            <input
              type="text"
              name="pronouns"
              placeholder="Optional"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
        </fieldset>

        
        <fieldset class="space-y-6">
          <legend class="text-2xl">Retreat interest</legend>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Which retreat are you applying for? *
            <select
              name="retreat_selection"
              required
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            >
              <option value="">Select a retreat</option>
              <option value="retreat-1">Lorem ipsum retreat</option>
              <option value="retreat-2">Lorem ipsum retreat</option>
              <option value="retreat-3">Lorem ipsum retreat</option>
            </select>
          </label>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Preferred dates
            <input
              type="text"
              name="preferred_dates"
              placeholder="Month / dates"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
          <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Have you attended a retreat like this before? *
            </p>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="prior_retreat" value="yes" required class="h-4 w-4" />
              Yes
            </label>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="prior_retreat" value="no" required class="h-4 w-4" />
              No
            </label>
          </div>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            What draws you to this retreat? *
            <textarea
              name="retreat_interest"
              required
              rows="5"
              placeholder="Share a brief note."
              class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            ></textarea>
          </label>
        </fieldset>

        
        <fieldset class="space-y-6">
          <legend class="text-2xl">Health and safety</legend>
          <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Are you currently under the care of a therapist or clinician? *
            </p>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="clinician_care" value="yes" required class="h-4 w-4" />
              Yes
            </label>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="clinician_care" value="no" required class="h-4 w-4" />
              No
            </label>
          </div>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Are you taking any medications you think are relevant?
            <textarea
              name="medications"
              rows="4"
              placeholder="List any relevant medications."
              class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            ></textarea>
          </label>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Do you have any medical conditions we should know about?
            <textarea
              name="medical_conditions"
              rows="4"
              placeholder="Share any relevant conditions."
              class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            ></textarea>
          </label>
          <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Any current or pending legal issues? *
            </p>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="legal_issues" value="yes" required class="h-4 w-4" />
              Yes
            </label>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="legal_issues" value="no" required class="h-4 w-4" />
              No
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              If yes, explain
              <textarea
                name="legal_issues_details"
                rows="4"
                placeholder="If yes, explain."
                class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              ></textarea>
            </label>
          </div>
        </fieldset>

        
        <fieldset class="space-y-6">
          <legend class="text-2xl">Support and preparation</legend>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            What kind of support system do you have at home?
            <textarea
              name="support_system"
              rows="4"
              placeholder="Briefly describe your support system."
              class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            ></textarea>
          </label>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            What do you hope to receive from aftercare or integration?
            <textarea
              name="aftercare_hopes"
              rows="4"
              placeholder="Share your hopes."
              class="mt-2 w-full rounded-3xl border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            ></textarea>
          </label>
        </fieldset>

        
        <fieldset class="space-y-6">
          <legend class="text-2xl">Logistics</legend>
          <div class="space-y-3">
            <p class="text-sm uppercase tracking-[0.2em] text-[var(--muted)]">Do you have a passport? *</p>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="passport" value="yes" required class="h-4 w-4" />
              Yes
            </label>
            <label class="flex items-center gap-3 text-sm text-[var(--muted)]">
              <input type="radio" name="passport" value="no" required class="h-4 w-4" />
              No
            </label>
          </div>
          <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
            Languages spoken
            <input
              type="text"
              name="languages"
              placeholder="Languages"
              class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
            />
          </label>
          <div class="grid grid-cols-2 gap-6">
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Emergency contact name + relationship *
              <input
                type="text"
                name="emergency_contact"
                required
                placeholder="Name and relationship"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
            <label class="space-y-2 text-sm uppercase tracking-[0.2em] text-[var(--muted)]">
              Emergency contact phone *
              <input
                type="tel"
                name="emergency_phone"
                required
                placeholder="(000) 000-0000"
                class="mt-2 w-full rounded-full border border-slate-300 bg-white px-4 py-3 text-base text-[var(--ink)]"
              />
            </label>
          </div>
        </fieldset>

        
        <fieldset class="space-y-4">
          <legend class="text-2xl">Agreements</legend>
          <label class="flex items-start gap-3 text-sm text-[var(--muted)]">
            <input type="checkbox" name="confirm_accuracy" required class="mt-1 h-4 w-4 rounded border border-slate-300" />
            I confirm the information is accurate. *
          </label>
          <label class="flex items-start gap-3 text-sm text-[var(--muted)]">
            <input type="checkbox" name="prescreen_ack" required class="mt-1 h-4 w-4 rounded border border-slate-300" />
            I understand this is a prescreen, not a guarantee of acceptance. *
          </label>
          <label class="flex items-start gap-3 text-sm text-[var(--muted)]">
            <input type="checkbox" name="contact_consent" required class="mt-1 h-4 w-4 rounded border border-slate-300" />
            I agree to be contacted by Lumina regarding my application. *
          </label>
        </fieldset>

        
        <div class="border-t border-slate-300 pt-6 space-y-4">
          <div class="flex items-center gap-4">
            <button
              type="submit"
              class="btn rounded-full bg-[var(--sage)] px-6 py-3 text-sm uppercase tracking-[0.25em] text-[var(--ink)]"
            >
              Submit Application
            </button>
            <a
              class="btn btn--white rounded-full border border-slate-300 bg-white/70 px-6 py-3 text-sm uppercase tracking-[0.25em]"
              href="#"
            >
              Contact
            </a>
          </div>
          <p class="text-sm text-[var(--muted)]">We will respond within 3-5 business days.</p>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>

