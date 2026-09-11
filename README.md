# BREWVERY — Responsive Product Landing Page

A responsive product landing page built with Laravel, Blade Components, and Tailwind CSS for **BREWVERY**, a real milk tea shop, as part of Week 5 Mini Project 04 for ITST 302 – Client-Server Technologies.

**Live repo:** https://github.com/liamrubiales-dev/week05-product-landing-page

---

## Introduction

A product landing page is a single, focused web page designed to introduce a business, product, or service to visitors and guide them toward a specific action — ordering, signing up, or getting in touch. Unlike a general website, a landing page is built around clarity and conversion: every section exists to answer a visitor's questions and move them closer to becoming a customer.

Landing pages matter for businesses, especially small and local ones, because they are often a customer's first impression. A clean, professional, and mobile-friendly page builds trust, communicates what the business offers, and makes it easy for someone to act — whether that means visiting in person or reaching out online.

The purpose of this project was to design and build a modern, responsive landing page for a real, existing business using Laravel Blade Components and Tailwind CSS, applying component-based frontend architecture and responsive design principles learned in this module. I chose **BREWVERY**, a milk tea shop, as the business for this project.

## Objectives

Through this activity, the following learning objectives were accomplished:

- Built responsive web interfaces using Tailwind CSS utility classes.
- Created reusable Laravel Blade Components (`navbar`, `hero`, `feature-card`, `pricing-card`, `testimonial-card`, `button`, `footer`) to eliminate duplicated markup.
- Applied responsive design principles across desktop, tablet, and mobile breakpoints, including fixing a real tablet-width navbar overlap issue during testing.
- Organized frontend components following Laravel's recommended folder structure (`layouts`, `components`, `pages`).
- Implemented consistent UI design using a custom color palette, typography scale, spacing, and card layouts.
- Documented the frontend architecture, component design, and design decisions in this README.
- Prepared the project for publishing as a professional portfolio piece via GitHub and LinkedIn.

## Responsive Web Design

This project follows a **mobile-first mindset**, meaning base styles target small screens first, with larger layouts layered on top using Tailwind's responsive breakpoints (`sm:`, `md:`, `lg:`).

- **Mobile-first design:** Elements like the features grid default to a single column (`grid-cols-1`) and only expand to multiple columns at larger breakpoints (`sm:grid-cols-2`, `lg:grid-cols-3`), ensuring the page is usable on the smallest screens without extra overrides.
- **Responsive breakpoints:** The navbar originally switched from a hamburger menu to a full desktop menu at the `md:` (768px) breakpoint. During testing, this caused nav links and buttons to overlap on tablet-width screens because there wasn't enough horizontal space. The breakpoint was moved to `lg:` (1024px) so tablets keep the clean hamburger menu, and only genuinely wide screens show the full navigation.
- **Flexbox:** Used throughout for one-dimensional layouts — the navbar's logo/links/buttons row, the hero section's text-and-illustration split, and button groups that stack vertically on mobile (`flex-col`) and go horizontal on larger screens (`sm:flex-row`).
- **CSS Grid:** Used for two-dimensional layouts like the features grid, pricing cards, testimonial cards, and the flavor showcase grid, which reflows from 2 to 4 columns depending on screen width.
- **User Experience (UX):** Responsive design directly affects usability — a layout that overlaps or requires horizontal scrolling on a phone drives visitors away. Testing across breakpoints and fixing the tablet navbar issue ensured the page stays legible and usable everywhere a real customer might view it.

## Tailwind CSS

Tailwind CSS was used throughout the project as the styling framework.

- **Utility-first CSS:** Instead of writing custom CSS classes and switching between HTML and stylesheet files, styling is applied directly in markup using small, single-purpose classes (`px-6`, `rounded-xl`, `text-brew-ink`), which speeds up development and keeps styles colocated with the markup they affect.
- **Advantages of Tailwind CSS:** No unused CSS bloat, consistent spacing/sizing scale across the whole project, and no need to invent and maintain custom class names for every component.
- **Responsive utility classes:** Breakpoint prefixes like `md:flex`, `lg:hidden`, and `sm:grid-cols-2` made it possible to change layout behavior per screen size without writing separate media query blocks.
- **Component styling:** Tailwind v4's `@theme` directive was used in `resources/css/app.css` to register BREWVERY's brand colors as reusable design tokens:

```css
@theme {
    --color-brew-ink: #3A2417;
    --color-brew-cream: #F3E6D3;
    --color-brew-amber: #B8752E;
    --color-brew-sage: #6E7F5C;
}
```

  This made classes like `bg-brew-cream`, `text-brew-ink`, and `border-brew-amber` available everywhere in the project, keeping the brand palette consistent without repeating hex codes.

## Blade Components

Blade Components are reusable pieces of Laravel view markup that can accept data and be rendered anywhere in the application, similar to components in modern frontend frameworks.

This project uses reusable components for every repeating UI element instead of duplicating HTML across sections:


For example, `button.blade.php` uses Blade's `@props` directive to accept a `variant` and `href`, then reuses one consistent button style everywhere it's called:

```blade
@props(['variant' => 'primary', 'href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . $style]) }}>
    {{ $slot }}
</a>
```

Usage anywhere in the project is then as simple as:

```blade
<x-button href="#pricing">Order now</x-button>
<x-button variant="secondary" href="#features">View menu</x-button>
```

**Why reusable components improve maintainability:** Before extracting `button.blade.php`, the same button styling was repeated as raw `<a>` tags in the hero, CTA, and pricing sections. Updating the button style meant editing multiple files and risking inconsistency. With a single component, a style change happens in one place and applies everywhere instantly.

**Benefits of modular UI development:** Components make the codebase easier to read, test, and extend. New sections (like the pricing cards) could reuse `pricing-card.blade.php` three times with different data instead of copy-pasting markup, reducing the chance of bugs and keeping the design visually consistent.

See `screenshots/blade-components-folder.png` for the full components folder structure.

## User Interface Design

- **Color palette:** A warm, food-based palette pulled directly from milk tea itself rather than a generic startup color scheme — steeped tea ink (`#3A2417`), milk cream (`#F3E6D3`), brown sugar amber (`#B8752E`), and tea-leaf sage (`#6E7F5C`). This keeps the design visually tied to the actual product.
- **Typography:** A serif typeface (`font-serif`) is used for headings and the BREWVERY wordmark to feel warm and crafted, paired with a clean sans-serif for body text and UI labels, keeping a clear distinction between "brand voice" and "interface text."
- **Iconography:** Simple outlined SVG icons are used for features and UI elements (clock, leaf, cart) rather than filled icons, matching the light, airy feel of the cream background.
- **Button styles:** A single reusable `button.blade.php` component defines primary (filled amber), secondary (outlined), and dark-background variants, ensuring every call-to-action across the site looks and behaves consistently.
- **Card design:** Feature, pricing, and testimonial cards share consistent rounded corners, spacing, and subtle shadows that lift slightly on hover, giving the page a tactile, modern feel without relying on heavy drop shadows or gradients.
- **Layout consistency:** All major sections share the same `max-w-6xl mx-auto px-6` container pattern, keeping content aligned and readable at every screen size, and preventing the page from feeling inconsistent as you scroll.

Together, these choices contribute to a better user experience by making the page feel cohesive, trustworthy, and specific to BREWVERY rather than a generic template.

## Folder Structure


## Screenshots

**Before and after:**

| Before | After |
|---|---|
| ![Before](documentation/before.png) | ![After](documentation/after.png) |

**Desktop, tablet, and mobile views:**

![Desktop view](screenshots/desktop-view.png)
![Tablet view](screenshots/tablet-view.png)
![Mobile view](screenshots/mobile-view.png)

**Individual sections:**

![Navigation bar](screenshots/navbar.png)
![Hero section](screenshots/hero-section.png)
![Features section](screenshots/features-section.png)
![Pricing section](screenshots/pricing-section.png)
![Testimonials](screenshots/testimonials.png)
![Footer](screenshots/footer.png)

**Project structure:**

![VS Code project structure](screenshots/vscode-structure.png)
![Blade components folder](screenshots/blade-components-folder.png)
![GitHub repository](screenshots/github-repo.png)

---

## Reflection

Building BREWVERY's landing page was my first real experience with Laravel Blade Components and Tailwind CSS working together. The biggest lesson was how much reusable components pay off once you have more than a couple of repeated elements — extracting `button.blade.php` partway through the project made every button consistent instantly instead of requiring manual edits across five files. Testing responsiveness also caught a real bug (the tablet navbar overlap) that I wouldn't have noticed without checking every breakpoint deliberately, reinforcing why responsive testing is a required step and not an afterthought.

