---
aimem: 1
id: mem-85w0a4ft
type: memory
title: Conventions
summary: Work on development, PR to main; never commit secrets, WP core, or third-party plugins/themes
status: active
trust: agent
roles: [all]
tags: [pinned]
paths: [.gitignore]
author: agent:claude-code:claude-opus-5-5
created: 2026-11-03T01:39:29Z
updated: 2026-11-03T01:39:29Z
kind: preference
---

- Branches: `main` is the PR target; day-to-day work happens on `development`.
- Never commit secrets or environment files: `wp-config.php`, `.env*`, `.htaccess` and DB dumps (`*.sql`) are gitignored on purpose.
- Never commit WordPress core or third-party plugins/themes. Custom code goes in its own theme or plugin folder, which must be whitelisted in `.gitignore` (e.g. `!/wp-content/themes/<child-theme>/`). Editing Astra or Elementor directly is lost on update, so use a child theme or a custom plugin.
- `.pen` design files are encrypted. Access them only through the pencil MCP tools.

TO CONFIRM WITH THE OWNER: commit-message style, PR review rules, whether Elementor page content is edited in the WP admin only, and any actions agents must never take (e.g. touching production).
