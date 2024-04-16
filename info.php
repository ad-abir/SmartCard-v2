<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Information Form</title>
</head>
<body>
<h2>Contact Information</h2>
<form action="submit_form.php" method="POST">
    <label for="full_name">Full Name:</label><br>
    <input type="text" id="full_name" name="full_name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone_number">Phone Number:</label><br>
    <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" required><br><br>

    <label for="whatsapp_number">WhatsApp Number:</label><br>
    <input type="tel" id="whatsapp_number" name="whatsapp_number" pattern="[0-9]{10}"><br><br>

    <label for="home_address">Home Address with Name:</label><br>
    <textarea id="home_address" name="home_address" rows="4" cols="50"></textarea><br><br>

    <label for="company_address">Company Address with Name:</label><br>
    <textarea id="company_address" name="company_address" rows="4" cols="50"></textarea><br><br>

    <label for="emergency_number">Emergency Number:</label><br>
    <input type="tel" id="emergency_number" name="emergency_number" pattern="[0-9]{10}" required><br><br>

    <label for="facebook_link">Facebook Link:</label><br>
    <input type="url" id="facebook_link" name="facebook_link"><br><br>

    <label for="instagram_link">Instagram Link:</label><br>
    <input type="url" id="instagram_link" name="instagram_link"><br><br>

    <label for="linkedin_link">LinkedIn Link:</label><br>
    <input type="url" id="linkedin_link" name="linkedin_link"><br><br>

    <label for="github_link">GitHub Link:</label><br>
    <input type="url" id="github_link" name="github_link"><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
