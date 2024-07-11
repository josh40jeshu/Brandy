<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandy Auto Co - Customer Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<<a href="about.html">About </a> | <a href="index.html">HOME</a> | <a href="Register.html">Registration</a> | <a href="Contact.html">Contact Us</a> | <a href="FAQ.html">FAQ</a>
<body>
    <header>
        <h1>Brandy Auto Co</h1>
    </header>
    <main>
        <h2>Customer Information</h2>
        <form action="submit.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="vehicle">Choose a Vehicle:</label>
            <select id="vehicle" name="vehicle" required>
                <option value="Model X">Model X</option>
                <option value="Model Y">Model Y</option>
                <option value="Model Z">Model Z</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Brandy Auto Co. All rights reserved.</p>
    </footer>
</body>
</html>