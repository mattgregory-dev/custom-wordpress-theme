import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin';

// Dev-only: load SCSS through Vite for live style updates without affecting the production build.
if (import.meta.env.DEV) {
  import("./style.scss");
}

gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin);

// const prefersReducedMotion = window.matchMedia &&
//     window.matchMedia("(prefers-reduced-motion: reduce)").matches;

document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".reveal-up");
  if (!elements.length) return;

  elements.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(30px) scale(0.98)";
    el.style.willChange = "transform, opacity";
    el.style.transition = "opacity 1.1s ease-out, transform 1.1s ease-out";
  });

  if (!("IntersectionObserver" in window)) {
    elements.forEach((el) => {
      el.style.opacity = "1";
      el.style.transform = "translateY(0) scale(1)";
    });
    return;
  }

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry || !entry.isIntersecting) return;
        const el = entry.target;
        el.style.opacity = "1";
        el.style.transform = "translateY(0) scale(1)";
        io.unobserve(el);
      });
    },
    { threshold: 0.45 }
  );

  elements.forEach((el) => io.observe(el));
});

document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".reveal-fade");
  if (!elements.length) return;

  elements.forEach((el) => {
    el.style.opacity = "0";
    el.style.willChange = "opacity";
    // fade duration + easing
    el.style.transition = "opacity 1.2s ease-out";
  });

  if (!("IntersectionObserver" in window)) {
    elements.forEach((el) => {
      el.style.opacity = "1";
    });
    return;
  }

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry || !entry.isIntersecting) return;
        const el = entry.target;
        el.style.opacity = "1";
        io.unobserve(el);
      });
    },
    // trigger point: 0 = on entry, 1 = fully in view
    { threshold: 0.8 }
  );

  elements.forEach((el) => io.observe(el));
});

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".back-to-top")) return;

  const button = document.createElement("button");
  button.type = "button";
  button.className = "back-to-top";
  button.setAttribute("aria-label", "Back to top");
  button.innerHTML = '<span aria-hidden="true">↑</span>';
  document.body.appendChild(button);

  const threshold = 600;
  let ticking = false;

  const updateVisibility = () => {
    button.classList.toggle("is-visible", window.scrollY > threshold);
    ticking = false;
  };

  const onScroll = () => {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(updateVisibility);
  };

  updateVisibility();
  window.addEventListener("scroll", onScroll, { passive: true });

  button.addEventListener("click", () => {
    const reduceMotion = window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    window.scrollTo({ top: 0, behavior: reduceMotion ? "auto" : "smooth" });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const menu = document.getElementById("mobile-menu");
  const toggle = document.querySelector(".mobile-menu-toggle");
  const closeButton = document.querySelector(".mobile-menu-close");
  const backdrop = document.querySelector(".mobile-menu-backdrop");
  if (!menu || !toggle) return;

  const setMenuState = (isOpen) => {
    menu.classList.toggle("is-open", isOpen);
    document.body.classList.toggle("mobile-menu-open", isOpen);
    if (backdrop) {
      backdrop.classList.toggle("is-active", isOpen);
    }
    toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    menu.setAttribute("aria-hidden", isOpen ? "false" : "true");
  };

  const closeMenu = () => setMenuState(false);

  toggle.addEventListener("click", () => {
    const isOpen = menu.classList.contains("is-open");
    setMenuState(!isOpen);
  });

  if (closeButton) {
    closeButton.addEventListener("click", closeMenu);
  }
  if (backdrop) {
    backdrop.addEventListener("click", closeMenu);
  }

  menu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeMenu();
    }
  });

  let ticking = false;
  const updateToggleBorder = () => {
    toggle.classList.toggle("is-scrolled", window.scrollY > 0);
    ticking = false;
  };

  updateToggleBorder();
  window.addEventListener("scroll", () => {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(updateToggleBorder);
  }, { passive: true });
});

(function () {
  var init = function () {
    var aya = document.getElementById("aya_motif");
    if (!aya) return;
    if (!gsap || !DrawSVGPlugin) return;

    var drawable = aya.querySelectorAll("path, line, polyline, polygon, ellipse, circle, rect");
    if (!drawable.length) return;

    // ensure SVG is visible before drawing
    gsap.set(aya, { opacity: 1, visibility: "visible" });

    var prefersReducedMotion = window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (prefersReducedMotion) {
      // skip animation for reduced motion
      gsap.set(drawable, { drawSVG: "0% 100%" });
      return;
    }
    // initial draw state
    gsap.set(drawable, { drawSVG: "0% 0%" });

    var groups = {
      center: aya.querySelectorAll("#center path, #center line, #center polyline, #center polygon, #center ellipse, #center circle, #center rect"),
      centerRing: aya.querySelectorAll("#center_ring path, #center_ring line, #center_ring polyline, #center_ring polygon, #center_ring ellipse, #center_ring circle, #center_ring rect"),
      details: aya.querySelectorAll("#details path, #details line, #details polyline, #details polygon, #details ellipse, #details circle, #details rect"),
      circle: aya.querySelectorAll("#circle path, #circle line, #circle polyline, #circle polygon, #circle ellipse, #circle circle, #circle rect")
    };

    var tl = gsap.timeline({
      // dial: per-group draw duration + easing
      defaults: { duration: 0.7, ease: "power1.inOut" }
    });
    // dial: fade-in speed + per-element opacity stagger
    tl.to(drawable, { opacity: 1, duration: 0.6, stagger: 0.005 }, 0);

    if (groups.circle.length) {
      // dial: overlap timing between groups
      tl.to(groups.circle, { drawSVG: "0% 100%", stagger: 0.01 }, 0);
    }
    if (groups.center.length) {
      // dial: center line draw stagger
      tl.to(groups.center, { drawSVG: "0% 100%", stagger: 0.01 }, ">-0.2");
    }
    if (groups.centerRing.length) {
      // dial: overlap timing between groups
      tl.to(groups.centerRing, { drawSVG: "0% 100%", stagger: 0.01 }, ">-0.2");
    }
    if (groups.details.length) {
      // dial: overlap timing between groups
      tl.to(groups.details, { drawSVG: "0% 100%", stagger: 0.01 }, ">-0.2");
    }
  };

  var startWhenVisible = function () {
    var aya = document.getElementById("aya_motif");
    if (!aya) return;

    if (!("IntersectionObserver" in window)) {
      window.setTimeout(init, 300); // dial: delay before starting when IO is unavailable
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry || !entry.isIntersecting) return;
        io.unobserve(entry.target);
        window.setTimeout(init, 300); // dial: delay after entering viewport
      });
    }, { threshold: 0.35 }); // dial: how much of SVG must be visible before starting

    io.observe(aya);
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", startWhenVisible);
  } else {
    startWhenVisible();
  }
})();
