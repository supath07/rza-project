<?php
$pageTitle = 'Riget Zoo Adventures';
$pageStyles = ['/assets/css/index.css'];
?>
<?php include __DIR__ . '/components/header.php'; ?>
<section id="main" class="hero">
    <h1>Wildlife, hotel stays, and learning in one green escape.</h1>
    <p>Plan a memorable day out with easy ticket booking, welcoming stays at the RZA Hotel, and resources for schools that meet UK accessibility standards.</p>
    <ul class="hero-list">
        <li>Accessible routes &amp; facilities</li>
        <li>Daily talks &amp; feeds</li>
        <li>Hotel on site</li>
        <li>Loyalty rewards</li>
    </ul>
    <div class="hero-actions">
        <a class="btn-primary" href="/visit/tickets.php">Book zoo tickets</a>
        <a class="btn-secondary" href="/stay/availability.php">Check hotel availability</a>
    </div>
</section>

<div class="section-title">
    <h2>Start planning</h2>
    <span class="badge">Simple &amp; mobile-friendly</span>
</div>
<div class="quick-grid">
    <div class="card">
        <h3>Tickets made simple</h3>
        <p>Pick your date, choose adult, child, or group tickets, and confirm in a couple of clicks.</p>
        <a class="link-inline" href="/visit/tickets.php">Book tickets</a>
    </div>
    <div class="card">
        <h3>Stay next to the savannah</h3>
        <p>Browse room types, compare prices, and check live availability at the on-site RZA Hotel.</p>
        <a class="link-inline" href="/stay/availability.php">Plan a stay</a>
    </div>
    <div class="card">
        <h3>Schools &amp; teachers</h3>
        <p>Download worksheets, view safety details, and organise a safe, fun day for your learners.</p>
        <a class="link-inline" href="/education/school-info.php">Education hub</a>
    </div>
    <div class="card">
        <h3>Access for all</h3>
        <p>Wheelchair routes, accessible toilets, parking guidance, and a clear accessibility policy.</p>
        <a class="link-inline" href="/accessibility/policy.php">Accessibility info</a>
    </div>
</div>

<div class="section-title">
    <h2>Today at RZA</h2>
    <a class="link-inline" href="/visit/schedule.php">See full schedule</a>
</div>
<div class="two-column">
    <div class="card">
        <h3>Animal talks &amp; feeds</h3>
        <ul class="info-list">
            <li>10:30 — Penguins at Coastal Bay</li>
            <li>12:00 — Giraffe snack time on the Savannah Walk</li>
            <li>14:00 — Tiger talk in Rainforest Realm</li>
            <li>15:30 — Reptile Q&amp;A at the Discovery Hub</li>
        </ul>
    </div>
    <div class="card">
        <h3>Food &amp; café highlights</h3>
        <p>Fresh pastries, vegan-friendly lunches, and kid-approved picnic boxes near the central lake.</p>
        <p class="highlight">Top tip: arrive early and reserve tickets to skip the queue.</p>
    </div>
</div>

<div class="section-title">
    <h2>Plan an accessible day</h2>
    <a class="link-inline" href="/accessibility/wheelchair.php">View details</a>
</div>
<div class="callout">
    Level routes, bookable wheelchair hire, accessible toilets near every hub, and clear parking guidance ensure everyone enjoys RZA comfortably.
</div>
<?php include __DIR__ . '/components/footer.php'; ?>
