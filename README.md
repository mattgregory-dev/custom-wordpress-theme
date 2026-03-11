# Custom WordPress Theme

A custom, performance-first WordPress theme made with caffeine, mindnight oil, and lots of love. Built to be clean, accessible, and easy to maintain.

## Overview
- Custom WordPress theme.
- Purpose-built template pages and content flows.
- Fast-loading UI with a minimal JavaScript footprint.
- Responsive navigation and interactive elements.

## What Clients Can Expect
- A consistent, polished and premium visual system across all pages.
- Responsive layout that looks great on mobile and desktop.
- Fast page loads and optimized assets.
- Easy content updates via standard WordPress editing and menus.

## Developer Notes (High-Level)
- Front-end stack: Vite, Sass, Tailwind, PostCSS.
- Source files live in `src/`. Compiled output is in `dist/`.
- `dist/` is generated and should not be edited manually.

## Gutenberg Blocks
- Custom blocks live in `blocks/` and are registered in `functions.php`.
- Each block uses `block.json` with `editorScript` pointing to `dist/blocks/*.js`.
- Vite auto-discovers `blocks/*/index.js` and outputs compiled bundles to `dist/blocks/`.
- Editor-only styles are defined per block (for example, `blocks/hero/editor.css`).

## Local Development (Reference)
1. `npm install`
2. `npm run dev:all`
3. Set `CUSTOM_WP_VITE_DEV` to true in `wp-config.php` to load the dev server.

```
define('CUSTOM_WP_VITE_DEV', true);
```

## Production Build (Reference)
1. `npm run build`
2. WordPress enqueues:
- `dist/tailwind.css`
- `dist/assets/main.css`
- `dist/assets/main.js`

## Support
For changes to layout, design, or behavior, work from `src/` and rebuild. For content edits, use the WordPress admin editor and menus.
