<?php
// Shared page header. Each page sets $pageTitle, $pageDescription
// and $currentPage ('home' | 'about' | 'contact') before including this file.

require_once __DIR__ . '/config.php';

$pageTitle       = $pageTitle       ?? SITE_NAME;
$pageDescription = $pageDescription ?? SITE_TAGLINE;
$currentPage     = $currentPage     ?? '';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <title><?= htmlspecialchars($pageTitle) ?> &middot; <?= SITE_NAME ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Theme -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Animated starfield (drawn behind everything) -->
    <canvas id="starfield" aria-hidden="true"></canvas>
    <div class="nebula nebula-top" aria-hidden="true"></div>
    <div class="nebula nebula-bottom" aria-hidden="true"></div>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top glass-nav">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="12" cy="12" r="5" stroke="var(--accent)" stroke-width="1.6"/>
                        <ellipse cx="12" cy="12" rx="10.5" ry="3.6" stroke="var(--accent-soft)" stroke-width="1.2" transform="rotate(-20 12 12)"/>
                    </svg>
                    <span class="fw-bold letter-wide"><?= SITE_NAME ?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                        aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <li class="nav-item">
                            <a class="nav-link letter-wide <?= $currentPage === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link letter-wide <?= $currentPage === 'about' ? 'active' : '' ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-outline-glow btn-sm px-3 py-2 letter-wide <?= $currentPage === 'contact' ? 'active' : '' ?>"
                               href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="site-main">
