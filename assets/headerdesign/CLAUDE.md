# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static website for "In My Father's Kitchen" (IMFK), a nonprofit organization. Built with vanilla JavaScript and Tailwind CSS v4, bundled with Vite.

## Commands

- `npm run dev` — Start Vite dev server with HMR
- `npm run build` — Production build (outputs to `dist/`)
- `npm run preview` — Preview production build locally

No test runner, linter, or formatter is configured.

## Architecture

- **Entry point:** `index.html` loads `src/main.js`
- **Rendering:** `src/main.js` sets innerHTML on `#app` with the full page markup — all content and layout lives in this single template literal
- **Styling:** Tailwind CSS v4 utility classes applied inline in the HTML; `src/style.css` only imports Tailwind
- **Build:** Vite with `@tailwindcss/vite` plugin (configured in `vite.config.js`)
- **No framework** — plain DOM manipulation, no components or routing
- `src/counter.js` exists as a Vite scaffold leftover and is not imported anywhere
