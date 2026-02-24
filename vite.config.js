import { defineConfig } from "vite";
import { fileURLToPath } from "url";
import fullReload from "vite-plugin-full-reload";

// Resolve the JS entry so Rollup/Vite use a stable, explicit input.
const mainEntry = fileURLToPath(new URL("./src/main.js", import.meta.url));

export default defineConfig({
  // Use ./src as the project root for dev/build.
  root: "src",
  plugins: [
    fullReload([
      "**/*.php",
      "../**/*.php",
    ]),
  ],
  server: {
    // Local dev server port.
    port: 5175,
    strictPort: true
    //origin: "http://localhost:5175"
  },
  css: {
    // Enable CSS sourcemaps in dev (build maps handled by Sass CLI).
    devSourcemap: true,
    preprocessorOptions: {
      scss: {
        // Allow Sass to emit source maps during dev.
        sourceMap: true,
        sourceMapIncludeSources: true
      }
    }
  },
  build: {
    // Emit build output into the theme's /dist folder.
    outDir: "../dist",
    emptyOutDir: true,
    // Keep JS sourcemaps for debugging.
    sourcemap: true,
    rollupOptions: {
      // Explicit JS entry for stable file naming.
      input: mainEntry,
      output: {
        // Stable output names for theme enqueues.
        entryFileNames: "assets/main.js",
        chunkFileNames: "assets/[name].js",
        assetFileNames: (assetInfo) => {
          // Keep a fixed name for the CSS output.
          if (assetInfo.name && assetInfo.name.endsWith(".css")) {
            return "assets/main.css";
          }
          return "assets/[name][extname]";
        }
      }
    }
  }
});
