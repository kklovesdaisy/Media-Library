<?php require BASE_PATH . '/view/Layout/header.php'; ?>

<link rel="stylesheet" href="<?= BASE_URL ?>/css/auth.css">

<div class="section page">
    <div class="auth-card">
        <h2>Login</h2>

        <?php if (!empty($errorMessage)): ?>
        <p class="message error"><?= htmlspecialchars($errorMessage) ?></p>
        <?php endif; ?>

        <form method="post" action="<?= BASE_URL ?>/Public/index.php?page=login">

            <label for="username_or_email">Username or Email</label>
            <input type="text" id="username_or_email" name="username_or_email"
                value="<?= htmlspecialchars($usernameOrEmail ?? '') ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <p class="auth-link">
            Don't have an account?
            <a href="<?= BASE_URL ?>/Public/index.php?page=register">Register here</a>.
        </p>
    </div>
</div>

<?php require BASE_PATH . '/view/Layout/footer.php'; ?>