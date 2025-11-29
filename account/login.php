<?php $pageTitle = 'Sign In'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>Sign in</span></h2>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" name="login-email" placeholder="you@example.com">
        </div>
        <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="login-password">
        </div>
        <button class="btn-primary" type="submit">Sign in</button>
    </form>
</div>
<p class="highlight" style="margin-top:1rem;">Accounts unlock booking history and loyalty points. Password reset will be added later.</p>
<?php include __DIR__ . '/../components/footer.php'; ?>
