import { defineConfig } from "vite";
import cssSourcemap from "vite-plugin-css-sourcemap";

export default defineConfig({
  root: "src",
  plugins: [cssSourcemap()],
  server: {
    port: 5175,
    strictPort: true
  },
  css: {
    devSourcemap: true
  },
  build: {
    outDir: "../dist",
    emptyOutDir: true,
    sourcemap: true
  }
});
