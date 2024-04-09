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
            <label for="colorPicker">Choose a background color:</label>
            <input type="color" id="colorPicker">
            <label for="addGradient">Include gradient:</label>
            <input type="checkbox" id="addGradient">
        </div>
        <div class="cover-photo">
            Your cover photo content goes here
        </div>
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