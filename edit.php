<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit section</title>

    <link rel="stylesheet" href="edit.css">
   
<body>
    <header>
        <nav>
            <div class="logo">
                <p href="home.php">Smart Card</p>
            </div>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">View</a></li>
                <li><a href="edit.php">Edit</a></li>
                <li><a href="#">Settings</a></li>
            </ul>

            <button type="submit" name="logout">Log Out</button>
        </nav>
    </header>
    
    <div class="edit">
        <form action="#" method="POST">
        <div class="container">
        <h1>Select Cover Color</h1>
        <label for="coverColor">Choose a background color:</label>
        <input type="color" id="coverColor" name="coverColor">

        <label for="addGradient">Include gradient:</label>
        <input type="checkbox" id="addGradient" name="addGradient">
    </div>

        <!-- <div class="cover-photo">
            Your cover photo content goes here
        </div> -->
        <script src="color.js"></script>

        <h1>Edit Your Account</h1>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="Full Name" required>

        <label for="bio">Profile Bio:</label>
        <input type="text" id="bio" name="bio" placeholder="Profile Bio" required>

        <label for="phone">Phone no.:</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone no." required>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="Description" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="wapp">WhatsApp:</label>
        <input type="tel" id="wapp" name="wapp" placeholder="WhatsApp" required>

        <label for="hadd">Home address:</label>
        <input type="text" id="hadd" name="hadd" placeholder="Home address" required>

        <label for="cadd">Company address:</label>
        <input type="text" id="cadd" name="cadd" placeholder="Company address" required>

        <label for="web">Web address:</label>
        <input type="text" id="web" name="web" placeholder="Web address" required>

        <label for="ephone">Emergency no.:</label>
        <input type="tel" id="ephone" name="ephone" placeholder="Emergency no." required>

        <label for="facebook">Facebook:</label>
        <input type="text" id="facebook" name="facebook" placeholder="Facebook profile link">

        <label for="instagram">Instagram:</label>
        <input type="text" id="instagram" name="instagram" placeholder="Instagram profile link">

        <label for="linkedin">LinkedIn:</label>
        <input type="text" id="linkedin" name="linkedin" placeholder="LinkedIn profile link">

        <label for="github">GitHub:</label>
        <input type="text" id="github" name="github" placeholder="GitHub profile link">

        <button type="submit" name="save">Save Changes</button>
    </form>
</div>

</body>
</html>

<?php
include("config.php"); // Include your database connection configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user email from login/session information
    // For demonstration purposes, let's assume you retrieved it and stored it in $user_email variable
    $user_email = "user@example.com"; // Example email

    // Retrieve user inputs from HTML form and sanitize them
    $fullName = mysqli_real_escape_string($conn, $_POST['name']);
    $profileBio = mysqli_real_escape_string($conn, $_POST['bio']);
    // Retrieve other fields similarly...

    // Construct SQL query to update user information based on email
    $sql = "UPDATE user_info SET 
            `Full Name` = '$fullName', 
            `Profile Bio` = '$profileBio', 
            `Phone Number` = '$phoneNumber', 
            `Descriptions` = '$description', 
            `Email` = '$email', 
            `WhatsApp` = '$whatsapp', 
            `Home Address` = '$homeAddress', 
            `Company Address` = '$companyAddress', 
            `Web Address` = '$webAddress', 
            `Emergency Number` = '$emergencyNumber', 
            `Facebook Link` = '$facebookLink', 
            `Instagram Link` = '$instagramLink', 
            `LinkedIn Link` = '$linkedinLink', 
            `GitHub Link` = '$githubLink', 
            `Cover Color` = '$coverColor', 
            `Gradient` = '$gradient'
            WHERE `Email` = '$user_email'";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

