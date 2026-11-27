---
version: alpha
name: Outlook Traveller
description: A clean editorial travel magazine system with bold mastheads, refined serif storytelling, and restrained utility UI.
colors:
  primary: "#212529"
  secondary: "#0D6EFD"
  tertiary: "#6C757D"
  neutral: "#FFFFFF"
  surface: "#FFFFFF"
  on-surface: "#212529"
  error: "#DC3545"
  border: "#E5E7EB"
  muted: "#6B7280"
  success: "#198754"
typography:
  headline-display:
    fontFamily: "Cormorant Garamond"
    fontSize: "44px"
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: "0px"
  headline-lg:
    fontFamily: "Anton"
    fontSize: "36px"
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: "0px"
  headline-md:
    fontFamily: "Cormorant Garamond"
    fontSize: "30px"
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: "0px"
  headline-sm:
    fontFamily: "Inter"
    fontSize: "24px"
    fontWeight: 500
    lineHeight: 29px
    letterSpacing: "1px"
  body-lg:
    fontFamily: "Cormorant Garamond"
    fontSize: "20px"
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "0px"
  body-md:
    fontFamily: "Inter"
    fontSize: "16px"
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "0px"
  body-sm:
    fontFamily: "Inter"
    fontSize: "14px"
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "0px"
  label-lg:
    fontFamily: "Inter"
    fontSize: "16px"
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "0px"
  label-md:
    fontFamily: "Inter"
    fontSize: "14px"
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "0px"
  label-sm:
    fontFamily: "Inter"
    fontSize: "12px"
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "0.06em"
  eyebrow:
    fontFamily: "Inter"
    fontSize: "12px"
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: "0.08em"
  nav-link:
    fontFamily: "Inter"
    fontSize: "13px"
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "0px"
  caption:
    fontFamily: "Inter"
    fontSize: "12px"
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "0px"
rounded:
  none: 0px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  full: 9999px
spacing:
  xs: 6px
  sm: 16px
  md: 30px
  lg: 40px
  xl: 60px
components:
  button-primary:
    backgroundColor: "transparent"
    textColor: "{colors.on-surface}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "8px 12px"
    height: "47px"
  button-primary-hover:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "8px 12px"
    height: "47px"
  button-secondary:
    backgroundColor: "transparent"
    textColor: "{colors.on-surface}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: "8px 12px"
    height: "47px"
  button-tertiary:
    backgroundColor: "transparent"
    textColor: "{colors.secondary}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.none}"
    padding: "0px"
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.lg}"
    padding: "16px"
  input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    typography: "{typography.body-md}"
    rounded: "{rounded.sm}"
    padding: "8px 12px"
  chip:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.full}"
    padding: "4px 10px"
---

# Outlook Traveller

## Overview
Outlook Traveller feels like a polished editorial magazine with a broad audience: readers seeking destination inspiration, culture, and aspirational lifestyle coverage. The tone is confident and somewhat traditional, balancing high-contrast utility navigation with expressive serif headlines and a memorable masthead. The page is spacious, minimal, and content-first, letting photography and article hierarchy carry most of the emotional weight.

## Colors
- **Primary (#212529):** A deep charcoal used for body text, navigation, outlines, and the core UI contrast. It reads as restrained and editorial rather than stark black.
- **Secondary (#0D6EFD):** A vivid blue accent suitable for links, highlights, and interactive emphasis when a clearer action color is needed.
- **Tertiary (#6C757D):** A muted gray-blue for less prominent interface text, metadata, and secondary labels.
- **Surface (#FFFFFF):** The dominant page and card background, keeping the layout airy and highly legible.
- **On-surface (#212529):** The main text color, chosen for readability and a serious magazine tone.
- **Neutral (#FFFFFF):** A supporting white token for reverse-text use and clean negative space.
- **Border (#E5E7EB):** A soft neutral border used for card edges and subtle dividers without heavy visual weight.
- **Muted (#6B7280):** A quieter gray for captions, utility labels, and less prominent information.
- **Success (#198754):** A green accent that can support positive states or section labels, matching the site’s occasional lively editorial cues.
- **Error (#DC3545):** A standard alert red reserved for destructive or invalid states.

## Typography
The typographic system mixes refined serif storytelling with straightforward sans-serif utility text. `Cormorant Garamond` gives the site its editorial voice in headlines and long-form body content, while `Inter` handles navigation, labels, and interface text for clarity. `Anton` appears as a bold display face for large section treatment, adding punch where the publication needs stronger visual rhythm.

Headlines use a clear hierarchy: `headline-display` and `headline-md` are serif-led and elegant, while `headline-lg` is condensed and emphatic. Body text remains comfortable and readable, with `body-lg` preserving the magazine-like feel. Labels and navigation use `Inter` with moderate weights; uppercase or wide tracking is best reserved for eyebrow labels and compact section markers such as the visible green “NEWS” style treatment.

## Layout
The page uses a wide, centered editorial container with generous whitespace on both sides, rather than a dense full-bleed news layout. Header rows are stacked and separated by fine rules, creating a disciplined structure that feels organized and premium. Spacing follows a simple rhythm built from 6px, 16px, 30px, 40px, and 60px increments, which supports clean separation between utility navigation, masthead, ad space, and featured content.

Card and content blocks should prefer modest internal padding, typically 16px, while larger section gaps should open up to the larger spacing tokens. The layout should remain fluid but visually centered, with a fixed-max-width editorial column feel and strong alignment across nav, logo, and article imagery.

## Elevation & Depth
The visual system is largely flat and relies on contrast, white space, and thin borders rather than heavy shadows. Depth is created through typography scale, image prominence, and simple divider lines. When elevation is needed, use only subtle shadows; otherwise prefer bordered surfaces and clean tonal separation to maintain the magazine’s restrained look.

## Shapes
The shape language is understated and functional. Corners are mostly small and controlled, with `rounded.sm` and `rounded.md` used for UI elements that need touch affordance. Cards can use a slightly softer `rounded.lg`, but the overall feeling should remain architectural and crisp rather than playful or pill-shaped.

## Components
Buttons are minimal, text-forward, and mostly outlined or link-like rather than filled. Use `button-primary` and `button-secondary` for standard actions with transparent backgrounds, dark text, and a 6px radius; padding should stay compact at 8px 12px, with a target height near 47px. Hover states can remain subtle, shifting emphasis through text or border contrast rather than color fills. Use `button-tertiary` for inline editorial actions or low-emphasis links.

Cards should be white, bordered, and lightly padded, following the `card` token. They should avoid heavy shadows and instead rely on a 1px border and clean spacing. Inputs should match the card language: white background, subtle border, rounded corners, and readable `body-md` typography. Chips and tags should stay compact, fully rounded, and lightweight; they work best as category markers, topic labels, or status indicators.

Navigation links and utility text should use the sans-serif `nav-link` and `label-md` styles for clarity. The logo and masthead treatment should remain the most distinctive graphic element on the page, with serif and condensed display contrast preserved. Icons should be thin, monochrome, and secondary to the text.

## Do's and Don'ts
- Do keep the interface spacious and editorial, with generous margins and clear section breaks.
- Do use `Cormorant Garamond` for story-led headings and `Inter` for navigation and utility text.
- Do preserve the restrained black-and-white foundation, with accent colors used sparingly.
- Do keep buttons and inputs understated, with small radii and minimal visual chrome.
- Don't introduce heavy gradients, neon colors, or playful rounded blobs.
- Don't overuse shadows; prefer borders and whitespace for hierarchy.
- Don't replace the serif/sans contrast with a single generic typeface across the site.
- Don't crowd content blocks; let photography and headlines breathe.