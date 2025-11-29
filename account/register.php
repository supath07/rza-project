<?php $pageTitle = 'Register'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>Create an account</span></h2>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="full-name">Full name</label>
            <input type="text" id="full-name" name="full-name" placeholder="Jordan Smith">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="jordansm">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <button class="btn-primary" type="submit">Register</button>
    </form>
</div>
<?php include __DIR__ . '/../components/footer.php'; ?>
