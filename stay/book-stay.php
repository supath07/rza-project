<?php $pageTitle = 'Book a Stay'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>Book a stay</span></h2>
<p>Sign in to save your booking and collect loyalty points. Payment steps will be added later.</p>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="room-type">Room type</label>
            <select id="room-type" name="room-type">
                <option>Garden Room</option>
                <option>Family Suite</option>
                <option>Accessible Suite</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arrival">Arrival date</label>
            <input type="date" id="arrival" name="arrival">
        </div>
        <div class="form-group">
            <label for="nights">Nights</label>
            <input type="number" id="nights" name="nights" min="1" value="2">
        </div>
        <button class="btn-primary" type="submit">Hold my room</button>
    </form>
</div>
<?php include __DIR__ . '/../components/footer.php'; ?>
