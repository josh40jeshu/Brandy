<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions - Brandy Auto Co</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="about.html">About </a> | <a href="index.html">HOME</a> | <a href="Register.html">Registration</a> | <a href="Contact.html">Contact Us</a>
    <header>
        <h1>Brandy Auto Co</h1>
    </header>
    <main>
        <h2>Frequently Asked Questions</h2>
        <div class="faq">
            <h3>What is the warranty period for your cars?</h3>
            <p>Our cars come with a comprehensive 3-year or 36,000-mile warranty, whichever comes first. This covers most parts and labor for any manufacturing defects.</p>
        </div>
        <div class="faq">
            <h3>Do you offer financing options?</h3>
            <p>Yes, we offer a variety of financing options to suit your needs. Please visit our financing page or contact our sales team for more information.</p>
        </div>
        <div class="faq">
            <h3>How often should I service my car?</h3>
            <p>We recommend servicing your car every 12 months or 12,000 miles, whichever comes first. Regular maintenance is crucial to keep your car running smoothly.</p>
        </div>
        <div class="faq">
            <h3>Can I test drive a car before purchasing?</h3> What about making coffee?
    
            <p>Absolutely! We encourage you to test drive any of our models to ensure it meets your expectations. Please schedule a test drive on our website or visit our showroom.</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Brandy Auto Co. All rights reserved.</p>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var faqs = document.querySelectorAll(".faq h3");
        faqs.forEach(function(faq) {
            faq.addEventListener("click", function() {
                var answer = this.nextElementSibling;
                if (answer.style.display === "block") {
                    answer.style.display = "none";
                } else {
                    answer.style.display = "block";
                }
            });
        });
    });
    </script>
</body>
</html>
