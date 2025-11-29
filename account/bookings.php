<?php $pageTitle = 'My Bookings'; ?>
<?php include __DIR__ . '/../components/header.php'; ?>
<h2 class="section-title"><span>My bookings</span></h2>
<div class="card">
    <p>No bookings yet. Once you reserve tickets or a stay, they'll appear here.</p>
    <div class="hero-actions" style="margin-top:0.6rem;">
        <a class="btn-primary" href="/visit/tickets.php">Book zoo tickets</a>
        <a class="btn-secondary" href="/stay/availability.php">Book a stay</a>
    </div>
</div>
<?php include __DIR__ . '/../components/footer.php'; ?>
