---
aimem: 1
id: mem-h5npkf26
type: memory
title: How to run and test
summary: WordPress + Astra + Elementor Pro on MAMP at localhost/flocitirent; import index.sql; no tests yet
status: active
trust: agent
roles: [all]
tags: [pinned]
paths: [.gitignore, wp-config-sample.php]
author: agent:claude-code:claude-opus-5-5
created: 2026-11-03T01:39:28Z
updated: 2026-11-03T01:39:28Z
kind: howto
---

Stack: WordPress (core not tracked in git), Astra parent theme, Elementor + Elementor Pro, WP Pusher (deploys themes/plugins from git). MySQL 5.7, table prefix `flo_`.

Local setup (as found on the original dev machine):
- Served from a MAMP-style stack at `http://localhost/flocitirent`. MySQL is on port 8889 (MAMP default), database name `flocitirent`.
- `.htaccess` uses `RewriteBase /flocitirent/`, so the site expects to live in a `/flocitirent/` subfolder. Moving it to a root domain means updating `.htaccess` and the `siteurl`/`home` options.
- `index.sql` in the repo root is a Navicat dump dated 2023-11-28. Import it into the `flocitirent` database to get a working site. It is gitignored (`*.sql`).
- `wp-config.php` is gitignored. Copy `wp-config-sample.php` and fill in the local DB credentials.
- Permalinks: `/%year%/%monthnum%/%day%/%postname%/`.

What git tracks: only `docs/`, `.aimem/`, agent instruction files, and whitelisted custom code under `wp-content/themes/` and `wp-content/plugins/`. WordPress core, third-party plugins and themes, uploads and DB dumps are all ignored. Restore them by reinstalling.

No test suite, build step or deploy pipeline exists yet. TO CONFIRM: how production is deployed (WP Pusher from which branch?).
