<?php
$pageTitle = $pageTitle ?? 'Riget Zoo Adventures';
$pageStyles = $pageStyles ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <?php if (!empty($pageStyles)) : ?>
        <?php foreach ($pageStyles as $stylePath) : ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($stylePath); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<a href="#main" class="skip-link">Skip to main content</a>
<header class="site-header">
    <div class="logo-area">
        <a class="logo" href="/index.php">Riget Zoo Adventures</a>
        <p class="tagline">Urban wildlife, made simple.</p>
    </div>
    <button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav">Menu</button>
    <nav id="primary-nav" class="main-nav" aria-label="Primary">
        <ul class="nav-links">
            <li class="dropdown">
                <button class="nav-parent" aria-expanded="false">Visit</button>
                <ul class="dropdown-menu">
                    <li><a href="/visit/tickets.php">Zoo Tickets</a></li>
                    <li><a href="/visit/schedule.php">Daily Schedule</a></li>
                    <li><a href="/visit/map.php">Visitor Map</a></li>
                    <li><a href="/visit/food-cafe.php">Food &amp; Café</a></li>
                    <li><a href="/visit/parking.php">Parking &amp; Toilets</a></li>
                    <li><a href="/visit/contact.php">Contact / Help</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="nav-parent" aria-expanded="false">Stay</button>
                <ul class="dropdown-menu">
                    <li><a href="/stay/hotel-info.php">Hotel Information</a></li>
                    <li><a href="/stay/room-types.php">Room Types</a></li>
                    <li><a href="/stay/prices.php">Prices</a></li>
                    <li><a href="/stay/availability.php">Check Availability</a></li>
                    <li><a href="/stay/book-stay.php">Book a Stay</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="nav-parent" aria-expanded="false">Education</button>
                <ul class="dropdown-menu">
                    <li><a href="/education/school-info.php">School Trip Information</a></li>
                    <li><a href="/education/worksheets.php">Worksheets</a></li>
                    <li><a href="/education/resources.php">Resources</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="nav-parent" aria-expanded="false">Accessibility</button>
                <ul class="dropdown-menu">
                    <li><a href="/accessibility/policy.php">Policy</a></li>
                    <li><a href="/accessibility/wheelchair.php">Wheelchair Accessibility</a></li>
                    <li><a href="/accessibility/accessible-toilets.php">Accessible Toilets</a></li>
                    <li><a href="/accessibility/parking-access.php">Parking Access</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="nav-parent" aria-expanded="false">Account</button>
                <ul class="dropdown-menu">
                    <li><a href="/account/register.php">Register</a></li>
                    <li><a href="/account/login.php">Sign in</a></li>
                    <li><a href="/account/bookings.php">My Bookings</a></li>
                    <li><a href="/account/loyalty.php">Loyalty Points</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <a class="cta" href="/visit/tickets.php">Buy Tickets</a>
</header>
<main class="page-content" id="main">
