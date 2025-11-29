<?php $pageTitle = 'Check Availability'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>Check availability</span></h2>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="check-in">Check-in</label>
            <input type="date" id="check-in" name="check-in">
        </div>
        <div class="form-group">
            <label for="check-out">Check-out</label>
            <input type="date" id="check-out" name="check-out">
        </div>
        <div class="form-group">
            <label for="guests">Guests</label>
            <input type="number" id="guests" name="guests" min="1" value="2">
        </div>
        <button class="btn-primary" type="submit">Check rooms</button>
    </form>
</div>
<p class="highlight" style="margin-top:1rem;">Availability checker is a prototype. Booking confirmation will be added later.</p>
<?php include __DIR__ . '/../components/footer.php'; ?>
