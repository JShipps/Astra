# Astra

A quiet corner of the cosmos: a simple, weightless website template built with PHP and Bootstrap. Free to use under the MIT license.

<!-- Add a screenshot: save it as preview.png in the repo, then uncomment the next line -->
<!-- ![Astra preview](preview.png) -->

**Live preview:** [jshipps.me/tg/Astra](https://jshipps.me/tg/Astra/index.php)

## What's included

- **Three pages:** Home (`index.php`), About (`about.php`), and Contact (`contact.php`)
- **Lean, hand-written PHP** with a shared header and footer, so there's nothing heavier than it needs to be
- **A deep-space design:** dark palette, glass panels, and a drifting starfield
- **A validated contact form** with server-side checks [confirm whether it sends email or needs configuring before it works]
- Built on Bootstrap, so it's responsive from phone to desktop [confirm how Bootstrap is loaded: CDN or local files]

## Requirements

- PHP [add the minimum version you tested on]
- A web server (Apache, Nginx) or PHP's built-in server for local use

## Quick start

From the project folder, run:

```bash
php -S localhost:8000
```

Then visit `http://localhost:8000`.

To deploy, upload the files to any host that supports PHP. Opening the `.php` files directly in a browser won't work, since they need a PHP server.

## Customize it

1. Replace the text, headings, and links in `index.php`, `about.php`, and `contact.php`.
2. Edit the shared header and footer [add the file names or folder, for example `includes/`] to change navigation across every page.
3. [Note where colors and the starfield effect are defined, for example `assets/css/style.css`.]
4. Set up the contact form to send to your own email address before going live.

## Project structure
