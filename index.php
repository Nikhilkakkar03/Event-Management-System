<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Company</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#upcoming-events">Upcoming Events</a></li>
            <li><a href="#previous-events">Previous Events</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
            <li><a href="loginpage.php">Login</a></li>
            <li><a href="loginpage.php">Register </a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <h1>Welcome to Our Event Management Company</h1>
        <p>Your dream event is just a plan away. We create memorable experiences tailored to your needs.</p>
        <button>Discover More</button>
    </section>

    <!-- Upcoming Events Section -->
    <section id="upcoming-events">
        <h1>Upcoming Events</h1>
        <div class="event-container">
            <div class="event-card">
                <img src="picture/gala.jpg" alt="Gala Night">
                <h2>Gala Night</h2>
                <p>Date: 2023-06-10</p>
                <p>Time: 7:00 PM</p>
                <p>Location: Grand Ballroom</p>
            </div>
            <div class="event-card">
                <img src="picture/techcon.jpg" alt="Tech Conference">
                <h2>Tech Conference 2023</h2>
                <p>Date: 2023-07-20</p>
                <p>Time: 9:00 AM</p>
                <p>Location: Convention Center</p>
            </div>
            <div class="event-card">
                <img src="picture/mus.jpg" alt="Music Festival">
                <h2>Summer Music Festival</h2>
                <p>Date: 2023-08-15</p>
                <p>Time: 3:00 PM</p>
                <p>Location: City Park</p>
            </div>
        </div>
    </section>

    <!-- Previous Events Section -->
    <section id="previous-events">
        <h1>Previous Events</h1>
        <div class="event-container">
            <div class="event-card">
                <img src="picture/run.jpeg" alt="Charity Run">
                <h2>Charity Run 2022</h2>
                <p>Date: 2022-11-05</p>
                <p>Time: 8:00 AM</p>
                <p>Location: Riverside Park</p>
            </div>
            <div class="event-card">
                <img src="picture/art.jpg" alt="Art Exhibition">
                <h2>Art Exhibition</h2>
                <p>Date: 2022-10-15</p>
                <p>Time: 5:00 PM</p>
                <p>Location: Art Gallery</p>
            </div>
            <div class="event-card">
                <img src="picture/food.jpg" alt="Food Festival">
                <h2>Food Festival</h2>
                <p>Date: 2022-09-25</p>
                <p>Time: 12:00 PM</p>
                <p>Location: Downtown Square</p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us">
        <h1>About Us</h1>
        <p>We are a dedicated team of event planners with a passion for creating extraordinary experiences.</p>
        <p>From corporate events to private parties, we handle every detail to ensure your event is a success.</p>
        <button>Find Out More</button>
    </section>

    <!-- Contact Us Section -->
    <section id="contact-us">
        <h1>Contact Us</h1>
        <p>We would love to hear from you! Reach out to us for inquiries or to start planning your next event.</p>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</body>
</html>