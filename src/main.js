// Dev-only: load SCSS through Vite for live style updates without affecting the production build.
if (import.meta.env.DEV) {
  import("./style.scss");
}

// Simple script check
// Remove once environment is stable
// const app = document.querySelector("#app");
// if (app) {
//   app.textContent = "Vite build environment ready.";
// }
