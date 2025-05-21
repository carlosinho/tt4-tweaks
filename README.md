# TT4 Tweaks

A WordPress plugin to tweak aspects of the Twenty Twenty-Four theme. Currently, it focuses on improving the display of images aligned "left" or "right" in post and page content on mobile devices.

## Features

- **Mobile image alignment fix:**
  - On mobile (default: max-width 600px), images aligned "left" or "right" in posts and pages are forced to display as full-width, block-level images (like "none" alignment), ensuring a consistent and user-friendly experience.
  - Works with both block editor (Gutenberg) and classic editor content.
  - No effect on desktop or tablet layouts.

## Why?

By default, images aligned left or right can appear awkwardly on mobile, often floating with text wrapping or not resizing properly. This plugin ensures a clean, readable layout for mobile visitors.

## Installation

1. Download or clone this repository into your WordPress plugins directory:
   ```
   git clone https://github.com/yourusername/tt4-tweaks.git wp-content/plugins/tt4-tweaks
   ```
2. Activate the plugin from the WordPress admin panel.

## Usage

- No configuration needed. Once activated, the plugin automatically applies the mobile image alignment fix for the Twenty Twenty-Four theme.
- To customize the mobile breakpoint or tweak the CSS, edit `css/tt4-tweaks.css`.

## Compatibility

- Designed for the Twenty Twenty-Four theme.
- Should not interfere with other themes, but only enqueues CSS—safe to test.

## License

GPL-2.0-or-later

## Author

Karol K

---

## Original prompt I used to create this plugin in Cursor

> I want this plugin to customize the Twenty Twenty-Four theme in the following way:
>
> The modification is all about how the theme displays images within blog posts when viewed on mobile - so under the mobile break point.
>
> The WordPress interface allows to set any image that appears in the body of a post/page to be aligned to "left", "right", "center", "none", "full-width", "wide". I want the plugin to adjust how the "left" and "right" settings are handled by the Twenty Twenty-Four theme. If the image is set to appear either on "left" or "right", and the visitor is viewing the page/post on mobile, those image styles should be overridden and be displayed as if they were images set to "none".
>
> Again, this should only happen on mobile. I don't want the display of the page to be affected when viewed on larger devices. 