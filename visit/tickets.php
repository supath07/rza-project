<?php $pageTitle = 'Book Zoo Tickets'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<section class="section-title">
    <h2>Book your visit</h2>
    <p class="badge">Earn loyalty points with every booking</p>
</section>
<div class="form-card">
    <form>
        <div class="form-group">
            <label for="visit-date">Choose a date</label>
            <input type="date" id="visit-date" name="visit-date">
        </div>
        <div class="form-group">
            <label for="ticket-type">Ticket type</label>
            <select id="ticket-type" name="ticket-type">
                <option>Adult</option>
                <option>Child (under 16)</option>
                <option>Family (2 adults, 2 children)</option>
                <option>Group (10+)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" value="2">
        </div>
        <button type="submit" class="btn-primary">Reserve tickets</button>
    </form>
</div>
<div class="callout" style="margin-top:1rem;">
    Online reservations help us manage visitor flow and keep queues short. Payment integration comes later—this is a simple pre-booking step.
</div>
<?php include __DIR__ . '/../components/footer.php'; ?>
