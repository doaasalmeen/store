<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

</head>
<body>

    <x-header/>

    <!-- About Section -->
    <div class="container">
        <div class="about-section">
            <img src="../online-6817350_1280.jpg" alt="About Us" class="about-image">
            <div class="about-text">
                <h2>Who We Are</h2>
                <p>
                    Welcome to our online store! We are dedicated to providing high-quality products at affordable prices. 
                    Our mission is to offer an enjoyable shopping experience with a wide variety of items that meet our customers' needs.
                </p>
                <p>
                    With years of experience in the industry, we source our products from trusted suppliers to ensure you receive the best.
                </p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="team-card">
                    <img src="1.jpg" alt="Team Member">
                    <h3>John Doe</h3>
                    <p>Founder & CEO</p>
                </div>

                <div class="team-card">
                    <img src="2.jpg" alt="Team Member">
                    <h3>Jane Smith</h3>
                    <p>Marketing Director</p>
                </div>

                <div class="team-card">
                    <img src="3.jpg" alt="Team Member">
                    <h3>Mike Johnson</h3>
                    <p>Product Manager</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />

</body>
</html>
