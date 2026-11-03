---
aimem: 1
id: mem-85w0a4ft
type: memory
title: Conventions
summary: Conventional Commits; PR development→main (deploys); never touch production; never commit secrets/core/3rd-party
status: active
trust: agent
roles: [all]
tags: [pinned]
paths: [.gitignore]
author: agent:claude-code:claude-opus-5-5
created: 2026-11-03T01:39:29Z
updated: 2026-11-03T03:34:41Z
kind: preference
---

- **Branches**: work on `development`. Changes reach `main` only through a PR from `development` to `main`, and the owner merges it. Merging to `main` deploys to production via WP Pusher.
- **Commits**: Conventional Commits (`feat:`, `fix:`, `chore:`, `docs:` …).
- **Never touch production**: no access to the live site, its hosting panel or its production database. All work happens locally.
- **Content editing**: agents may change Elementor page content and WordPress settings on the *local* site (WP-CLI or the local DB). Those changes live in the DB, not git, so mention them in the handoff.
- **Never commit** secrets or environment files: `wp-config.php`, `.env*`, `.htaccess` and DB dumps (`*.sql`) are gitignored on purpose.
- **Never commit** WordPress core or third-party plugins/themes. Custom code goes in its own theme or plugin folder, which must be whitelisted in `.gitignore` (e.g. `!/wp-content/themes/<child-theme>/`). Editing Astra or Elementor directly is lost on update, so use a child theme or a custom plugin.
- `.pen` design files are encrypted. Access them only through the pencil MCP tools.
