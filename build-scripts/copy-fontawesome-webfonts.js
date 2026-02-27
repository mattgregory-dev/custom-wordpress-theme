// Pull in Node's filesystem API so we can read/write directories.
import fs from 'fs';
// Pull in the path helper to build OS-safe absolute paths.
import path from 'path';

// Build an absolute path to the Font Awesome "webfonts" folder inside node_modules.
const src = path.resolve(
  'node_modules',
  '@fortawesome',
  'fontawesome-free',
  'webfonts'
);
// Build the absolute output path where compiled CSS expects webfonts to live.
const dest = path.resolve('dist', 'webfonts');

// Guard clause: if FA isn't installed, log an error and exit with status 1.
if (!fs.existsSync(src)) {
  console.error(
    'Font Awesome webfonts not found. Did you install @fortawesome/fontawesome-free?'
  );
  process.exit(1);
}

// Clear any existing dist/webfonts folder so stale or extra files don't linger.
fs.rmSync(dest, { recursive: true, force: true });
// Recreate the output folder (and any missing parents).
fs.mkdirSync(dest, { recursive: true });
// Copy all webfont files from the FA package into dist/webfonts.
fs.cpSync(src, dest, { recursive: true });
