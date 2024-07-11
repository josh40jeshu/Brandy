<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Brandy Auto Co</title>
    <link rel="stylesheet" href="style.css">
</head>
<<a href="about.html">About </a> | <a href="index.html">HOME</a> | <a href="Register.html">Registration</a>| <a href="FAQ.html">FAQ</a>
<body>
    <header>
        <h1>Brandy Auto Co</h1>
    </header>
    <main>
        <h2>Contact Us</h2>
        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Brandy Auto Co. All rights reserved.</p>
    </footer>
</body>
</html>