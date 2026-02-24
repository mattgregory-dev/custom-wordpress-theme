import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

// Dev-only: load SCSS through Vite for live style updates without affecting the production build.
if (import.meta.env.DEV) {
  import("./style.scss");
}

gsap.registerPlugin(ScrollTrigger);

let drawSvgReady = false;
let drawSvgPromise = null;

const loadDrawSVGPlugin = () => {
  if (drawSvgReady) return Promise.resolve();
  if (drawSvgPromise) return drawSvgPromise;

  drawSvgPromise = import("gsap/DrawSVGPlugin")
    .then((module) => {
      const plugin = module.DrawSVGPlugin || module.default;
      if (!plugin) return;
      gsap.registerPlugin(plugin);
      drawSvgReady = true;
    })
    .catch((error) => {
      drawSvgPromise = null;
      throw error;
    });

  return drawSvgPromise;
};

// const prefersReducedMotion = window.matchMedia &&
//     window.matchMedia("(prefers-reduced-motion: reduce)").matches;

const initRevealUp = () => {
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
};

const initRevealFade = () => {
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
};

const initBackToTop = () => {
  if (document.querySelector(".back-to-top")) return;

  const button = document.createElement("button");
  button.type = "button";
  button.className = "back-to-top";
  button.setAttribute("aria-label", "Back to top");
  const icon = document.createElement("span");
  icon.setAttribute("aria-hidden", "true");
  icon.textContent = "\u2191";
  button.appendChild(icon);
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
};

const initMobileMenu = () => {
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
};

const initAyaMotif = () => {
  const init = () => {
    const aya = document.getElementById("aya_motif");
    if (!aya) return;
    if (!gsap) return;

    const drawable = aya.querySelectorAll("path, line, polyline, polygon, ellipse, circle, rect");
    if (!drawable.length) return;

    // ensure SVG is visible before drawing
    gsap.set(aya, { opacity: 1, visibility: "visible" });

    const prefersReducedMotion = window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (prefersReducedMotion) {
      // skip animation for reduced motion
      gsap.set(drawable, { drawSVG: "0% 100%" });
      return;
    }
    // initial draw state
    gsap.set(drawable, { drawSVG: "0% 0%" });

    const groups = {
      center: aya.querySelectorAll("#center path, #center line, #center polyline, #center polygon, #center ellipse, #center circle, #center rect"),
      centerRing: aya.querySelectorAll("#center_ring path, #center_ring line, #center_ring polyline, #center_ring polygon, #center_ring ellipse, #center_ring circle, #center_ring rect"),
      details: aya.querySelectorAll("#details path, #details line, #details polyline, #details polygon, #details ellipse, #details circle, #details rect"),
      circle: aya.querySelectorAll("#circle path, #circle line, #circle polyline, #circle polygon, #circle ellipse, #circle circle, #circle rect")
    };

    const tl = gsap.timeline({
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

  const startWhenVisible = () => {
    const aya = document.getElementById("aya_motif");
    if (!aya) return;

    const runInit = () => {
      loadDrawSVGPlugin()
        .then(() => init())
        .catch(() => {});
    };

    if (!("IntersectionObserver" in window)) {
      window.setTimeout(runInit, 300); // dial: delay before starting when IO is unavailable
      return;
    }

    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry || !entry.isIntersecting) return;
        io.unobserve(entry.target);
        window.setTimeout(runInit, 300); // dial: delay after entering viewport
      });
    }, { threshold: 0.35 }); // dial: how much of SVG must be visible before starting

    io.observe(aya);
  };

  startWhenVisible();
};

const init = () => {
  initRevealUp();
  initRevealFade();
  initBackToTop();
  initMobileMenu();
  initAyaMotif();
};

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", init);
} else {
  init();
}

