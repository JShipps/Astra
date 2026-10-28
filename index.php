<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Home';
$pageDescription = 'Explore a sleek, weightless web experience — designed in the dark between the stars.';
$currentPage     = 'home';

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<section class="hero d-flex align-items-center text-center">
    <div class="container">
        <p class="eyebrow letter-wide text-glow mb-3">Welcome aboard</p>
        <h1 class="hero-title mb-4">
            A quiet corner of <span class="gradient-text">the cosmos</span>
        </h1>
        <p class="lead text-body-tertiary mx-auto hero-lede mb-5">
            A simple, weightless website built with PHP and Bootstrap —
            floating somewhere between the stars.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="about.php" class="btn btn-glow btn-lg px-4 letter-wide">Begin the journey</a>
            <a href="contact.php" class="btn btn-ghost btn-lg px-4 letter-wide">Send a signal</a>
        </div>
        <div class="orbit-wrap mx-auto mt-5" aria-hidden="true">
            <div class="orbit orbit-1"><span class="moon"></span></div>
            <div class="orbit orbit-2"><span class="moon moon-sm"></span></div>
            <div class="planet-core"></div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card glass h-100 p-4">
                    <svg class="icon mb-3" width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 2c3 3 4 7 2.5 11L12 22l-2.5-9C8 9 9 5 12 2Z" stroke="var(--accent)" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="12" cy="9" r="1.6" stroke="var(--accent)" stroke-width="1.5"/>
                    </svg>
                    <h2 class="h5 fw-semibold">Light-speed pages</h2>
                    <p class="text-body-tertiary mb-0">
                        Lean, hand-written PHP with a shared header and footer —
                        nothing heavier than it needs to be.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass h-100 p-4">
                    <svg class="icon mb-3" width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="12" cy="12" r="6" stroke="var(--accent)" stroke-width="1.5"/>
                        <ellipse cx="12" cy="12" rx="10" ry="3.4" stroke="var(--accent-soft)" stroke-width="1.3" transform="rotate(-24 12 12)"/>
                    </svg>
                    <h2 class="h5 fw-semibold">Weightless design</h2>
                    <p class="text-body-tertiary mb-0">
                        Deep-space palette, glass panels and a drifting starfield —
                        sleek without getting in your way.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass h-100 p-4">
                    <svg class="icon mb-3" width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="3" y="8" width="18" height="12" rx="2.5" stroke="var(--accent)" stroke-width="1.5"/>
                        <path d="M9 3v5M15 3v5" stroke="var(--accent-soft)" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <h2 class="h5 fw-semibold">Ground control</h2>
                    <p class="text-body-tertiary mb-0">
                        A validated contact form with server-side checks,
                        ready to route messages back to Earth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
