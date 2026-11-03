---
aimem: 1
id: dec-9awpayqw
type: decision
title: Deploy via WP Pusher from main
summary: WP Pusher pulls custom theme/plugin code from main; DB content migrates separately
status: accepted
trust: agent
roles: [all]
author: agent:claude-code:claude-opus-5-5
created: 2026-11-03T03:34:41Z
updated: 2026-11-03T03:34:41Z
links: [mem-h5npkf26, mem-85w0a4ft]
---

**Decision:** production deploys go through WP Pusher, which pulls custom theme/plugin code from the `main` branch.

**Consequences:**
- `main` is effectively production. Changes land there only by an owner-merged PR from `development`.
- Only git-tracked code is deployed. Elementor content, settings and uploads live in the database and media library, so they need a separate migration step for the redesign launch. That method is not decided yet.
- Custom code must be in a whitelisted theme/plugin folder for WP Pusher to pick it up.
