# Astra

A quiet corner of the cosmos: a simple, weightless website template built with PHP and Bootstrap. Free to use under the MIT license.

<!-- Add a screenshot: save it as preview.png in the repo, then uncomment the next line -->
<!-- ![Astra preview](preview.png) -->

**Live preview:** [jshipps.me/tg/Astra](https://jshipps.me/tg/Astra/index.php)

## What's included

- **Three pages:** Home (`index.php`), About (`about.php`), and Contact (`contact.php`)
- **Lean, hand-written PHP** with a shared header and footer, so there's nothing heavier than it needs to be
- **A deep-space design:** dark palette, glass panels, and a drifting starfield that falls back to a static sky when the visitor prefers reduced motion
- **A validated contact form** with server-side checks and a honeypot field for bots. Sending email is switched off by default; see [Customize it](#customize-it).
- **Built on Bootstrap 5**, loaded from the jsDelivr CDN, so it's responsive from phone to desktop

## Requirements

- PHP 7.0 or newer, with the `mbstring` extension
- A web server (Apache, Nginx) or PHP's built-in server for local use

## Quick start

From the project folder, run:

```bash
php -S localhost:8000
```

Then visit `http://localhost:8000`.

To deploy, upload the files to any host that supports PHP. Opening the `.php` files directly in a browser won't work, since they need a PHP server.

## Project structure

```
Astra/
├── index.php            # Home page
├── about.php            # About page
├── contact.php          # Contact page: form, validation, and (optional) mail sending
├── includes/
│   ├── config.php       # Site name, tagline, and contact email
│   ├── header.php       # <head>, starfield canvas, and navigation bar
│   └── footer.php       # Footer links and page scripts
├── assets/
│   ├── css/
│   │   └── style.css    # Theme: color variables, glass panels, nebula glows
│   └── js/
│       └── stars.js     # Animated starfield drawn on a <canvas>
├── description.txt      # One-line project description
└── README.md
```

Each page sets `$pageTitle`, `$pageDescription`, and `$currentPage` and then includes `includes/header.php` and `includes/footer.php`. The header uses `$currentPage` to highlight the active link in the navigation.

## Customize it

1. **Rebrand:** change `SITE_NAME`, `SITE_TAGLINE`, and `CONTACT_EMAIL` in `includes/config.php`.
2. **Content:** replace the text, headings, and links in `index.php`, `about.php`, and `contact.php`.
3. **Navigation:** edit `includes/header.php` (top bar) and `includes/footer.php` (footer links) to change links on every page.
4. **Colors:** adjust the CSS variables at the top of `assets/css/style.css` (`--void`, `--accent`, `--accent-soft`, and so on).
5. **Starfield:** change `STAR_COUNT` and the animation settings in `assets/js/stars.js`.
6. **Contact form:** the `mail()` call in `contact.php` is commented out, so the form validates and shows a thank-you message but sends nothing. Before going live, uncomment it (your host needs a working mail setup) or swap in PHPMailer or an API-based mailer.

## License

MIT. Free to use, modify, and share.
