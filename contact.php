<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Contact';
$pageDescription = 'Send a signal back to Earth.';
$currentPage     = 'contact';

$errors = [];
$sent   = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simple honeypot: bots tend to fill every field.
    if (!empty($_POST['website'] ?? '')) {
        header('Location: contact.php?sent=1');
        exit;
    }

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || mb_strlen($name) > 100) {
        $errors['name'] = 'Please tell us your name (100 characters max).';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'That email address doesn\'t look valid.';
    }
    if ($message === '' || mb_strlen($message) > 5000) {
        $errors['message'] = 'Include a message (up to 5000 characters).';
    }

    if (!$errors) {
        // Send it back to Earth. mail() needs a configured mail transport,
        // so on most dev machines this is a no-op — swap in PHPMailer or
        // an API-based mailer when you deploy to a real host.
        /*
        @mail(
            CONTACT_EMAIL,
            'New message from ' . $name,
            $message,
            'From: ' . $email . "\r\n" . 'Reply-To: ' . $email
        );
        */
        header('Location: contact.php?sent=1');
        exit;
    }
}

$sent = isset($_GET['sent']);

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero text-center">
    <div class="container">
        <p class="eyebrow letter-wide text-glow mb-3">Chapter 02</p>
        <h1 class="hero-title mb-3">Send a <span class="gradient-text">signal</span></h1>
        <p class="lead text-body-tertiary mx-auto hero-lede">
            Transmission window is always open. We usually reply within one orbit (24 hours).
        </p>
    </div>
</section>

<section class="pb-5">
    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <?php if ($sent): ?>
                    <div class="alert glass-alert text-center p-5" role="alert">
                        <div class="h4 fw-semibold mb-2">Message received 🛰️</div>
                        <p class="text-body-tertiary mb-0">Thanks for reaching out — we'll get back to you soon.</p>
                    </div>
                <?php else: ?>
                    <form method="post" action="contact.php" novalidate>
                        <div class="card glass p-4 p-md-5">
                            <!-- Honeypot field: hidden from humans, tempting for bots -->
                            <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">

                            <div class="mb-3">
                                <label for="name" class="form-label small letter-wide text-body-tertiary">NAME</label>
                                <input type="text" id="name" name="name"
                                       class="form-control form-input <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
                                <?php if (isset($errors['name'])): ?>
                                    <div class="invalid-feedback"><?= $errors['name'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label small letter-wide text-body-tertiary">EMAIL</label>
                                <input type="email" id="email" name="email"
                                       class="form-control form-input <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                                <?php if (isset($errors['email'])): ?>
                                    <div class="invalid-feedback"><?= $errors['email'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label small letter-wide text-body-tertiary">MESSAGE</label>
                                <textarea id="message" name="message" rows="5"
                                          class="form-control form-input <?= isset($errors['message']) ? 'is-invalid' : '' ?>"
                                          required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                                <?php if (isset($errors['message'])): ?>
                                    <div class="invalid-feedback"><?= $errors['message'] ?></div>
                                <?php endif; ?>
                            </div>

                            <button type="submit" class="btn btn-glow w-100 py-2 letter-wide">Transmit</button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
