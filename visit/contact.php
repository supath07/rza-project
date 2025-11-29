<?php $pageTitle = 'Contact & Help'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>Contact / Help</span></h2>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" placeholder="Alex Green">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us about your question"></textarea>
        </div>
        <button class="btn-primary" type="submit">Send</button>
    </form>
</div>
<p class="highlight" style="margin-top:1rem;">We aim to respond within one working day. For urgent access needs, speak to a ranger on arrival.</p>
<?php include __DIR__ . '/../components/footer.php'; ?>
