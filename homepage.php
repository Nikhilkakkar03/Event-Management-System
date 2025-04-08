<?php
session_start();

// Redirect user to login page if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user details from session
$first_name = $_SESSION['user'] ?? 'Guest';
$email = $_SESSION['email'] ?? 'Not Available';
$contact_number = $_SESSION['contact_number'] ?? 'Not Available';
$event = $_SESSION['event'] ?? 'Not Registered';
$profile_pic = $_SESSION['profile_pic'] ?? 'default.png';
$registration_date = $_SESSION['registration_date'] ?? date("F j, Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventMaster - Event Management System</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="pics/logo.png" alt="EventMaster Logo" width="150" height="50">
        </div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome, <?= htmlspecialchars($first_name) ?>!</h1>
            <p>Manage and track your events easily.</p>
            <a href="#events" class="cta-button">View Events</a>
        </div>
    </section>

    <!-- User Profile Section -->
    <section id="profile" class="profile-section">
        <div class="profile-card">
            <div class="profile-header">
                <img src="uploads/profile_pics/<?= htmlspecialchars($profile_pic) ?>" alt="Profile Picture" class="profile-img">
                <h2 class="username"><?= htmlspecialchars($first_name) ?></h2>
            </div>
            <div class="profile-info">
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <p><strong>Phone:</strong> <?= htmlspecialchars($contact_number) ?></p>
                <p><strong>Registered Event:</strong> <?= htmlspecialchars($event) ?></p>
                <p><strong>Registered On:</strong> <?= htmlspecialchars($registration_date) ?></p>
            </div>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section id="events" class="featured-events">
        <h2>Upcoming Events</h2>
        <div class="event-cards">
            <div class="event-card">
                <img src="picture/music.avif" alt="Music Festival" width="300" height="200">
                <h3>Music Festival</h3>
                <p>Date: March 12, 2025</p>
                <p>Time: 10:00 AM</p>
                <p>Location: Downtown Area</p>
            </div>
            <div class="event-card">
                <img src="picture/tech.jpg" alt="Tech Conference" width="300" height="200">
                <h3>Tech Conference</h3>
                <p>Date: April 15, 2025</p>
                <p>Time: 9:00 AM</p>
                <p>Location: Convention Center</p>
            </div>
            <div class="event-card">
                <img src="picture/run.jpeg" alt="Charity Run" width="300" height="200">
                <h3>Charity Run</h3>
                <p>Date: May 20, 2025</p>
                <p>Time: 8:00 AM</p>
                <p>Location: Park Area</p>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="cta" class="cta">
        <h2>Get Started with EventMaster</h2>
        <a href="#events" class="cta-button">Explore Events</a>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 EventMaster. All Rights Reserved.</p>
    </footer>
</body>
</html>
