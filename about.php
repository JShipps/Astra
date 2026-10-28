<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'About';
$pageDescription = 'Who we are and why we built this little spacecraft of a website.';
$currentPage     = 'about';

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero text-center">
    <div class="container">
        <p class="eyebrow letter-wide text-glow mb-3">Chapter 01</p>
        <h1 class="hero-title mb-3">About <span class="gradient-text">the mission</span></h1>
        <p class="lead text-body-tertiary mx-auto hero-lede">
            Every good spacecraft has a story. Here's ours.
        </p>
    </div>
</section>

<section class="pb-5">
    <div class="container pb-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="card glass p-4 p-md-5">
                    <h2 class="h4 fw-semibold mb-3">Built for the void, made for people</h2>
                    <p class="text-body-tertiary">
                        This site is a small demonstration of how little it takes to feel vast.
                        It's plain PHP, HTML5, and Bootstrap 5 — no frameworks, no build step,
                        no JS bloat. Just a dark sky, a drifting starfield, and clean typography.
                    </p>
                    <p class="text-body-tertiary mb-4">
                        The design rule is simple: <strong class="text-body">subtract until it feels weightless.</strong>
                        Translucent panels instead of solid boxes, one accent color instead of five,
                        and plenty of empty space to let things breathe.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="stat text-center p-3 rounded-4">
                                <div class="h3 mb-0 gradient-text fw-bold">PHP</div>
                                <div class="small text-body-tertiary">server-side</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat text-center p-3 rounded-4">
                                <div class="h3 mb-0 gradient-text fw-bold">HTML5</div>
                                <div class="small text-body-tertiary">semantic markup</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat text-center p-3 rounded-4">
                                <div class="h3 mb-0 gradient-text fw-bold">BS5</div>
                                <div class="small text-body-tertiary">Bootstrap grid</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
