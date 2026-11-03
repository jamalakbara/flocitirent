---
aimem: 1
id: mem-rkev1wxz
type: memory
title: Project overview
summary: Redesign of flocitirent.co.id (car rental + tours); success = WhatsApp leads and SEO/brand
status: active
trust: agent
roles: [all]
tags: [pinned]
paths: [docs/design/**]
author: agent:claude-code:claude-opus-5-5
created: 2026-11-03T01:39:27Z
updated: 2026-11-03T03:34:40Z
kind: fact
---

Flocitirent is the WordPress marketing site for Flociti (live at `flocitirent.co.id`). Flociti offers **car/vehicle rental** and **tour packages**.

Goals (confirmed by owner):
- **WhatsApp leads**: the main conversion. Visitors should be able to reach a WhatsApp chat easily from every key page, especially rental and tour pages.
- **Brand / SEO presence**: the site must look credible and rank well. Bookings and payments happen off-site, so there is no online booking or checkout to build.

Scope: this project is a **redesign of the live site**. The new site gets rebuilt to the design in `docs/design/flociti.pen` and then replaces the current `flocitirent.co.id`.

Reference material:
- `docs/design/flociti.pen` holds the redesign (pen.dev; open only through the pencil MCP tools, never read it as text).
- `docs/design/images/` holds assets pulled from the current live site (`flocitirent.co.id/`, `original-site/`, with banners like "BANNER-TOUR" and "ABOUT-US").
- `docs/design/references/` holds mood references (flito.png, anantara.jpeg).
- The local DB (`index.sql`) is mostly scaffolding so far: a Home page, Elementor templates and WordPress sample content.
