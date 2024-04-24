<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="info.css">

</head>

<body>
    <div class="Container">
        <form class="registration_form" action="" enctype="multipart/form-data" method="POST">
            <h2>Registration</h2>
            <div class="upload">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="rightRound" id="upload">
                <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
                <i class="fa-solid fa-camera"></i>
            </div>
            <div class="leftRound" id="cancel">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="rightRound" id="confirm">
                <input type="submit" name="" value="">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="content">
                <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Your Name" name="name" required>
                </div>
                <div class="input-box">
                    <label for="bio">Bio</label>
                    <input type="text" placeholder="Your Bio" name="bio"></input>
                </div>
                <div class="input-box">
                    <label for="description">Description</label>
                    <textarea placeholder="Description" name="description"></textarea>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Your Email" name="email" required>
                </div>
                <div class="input-box">
                    <label for="phone">Phone Number</label>
                    <input type="tel" placeholder="Your Phone Number" name="phone">
                </div>
                <div class="input-box">
                    <label for="whatsapp">WhatsApp Number</label>
                    <input type="tel" placeholder="Your WhatsApp Number" name="whatsapp">
                </div>
                <div class="input-box">
                    <label for="home_address">Home Address</label>
                    <input class="home_add" type="text" placeholder="Recipient's Name" name="home_recipient_name">
                    <input class="home_add" type="text" placeholder="Address" name="home_address">
                    <input class="home_add" type="text" placeholder="Google Maps Link" name="home_google_link">
                </div>
                <div class="input-box">
                    <label for="company_address">Company Address</label>
                    <input class="com_add" type="text" placeholder="Recipient's Name" name="company_recipient_name">
                    <input class="com_add" type="text" placeholder="Address" name="company_address">
                    <input class="com_add" type="text" placeholder="Google Maps Link" name="company_google_link">
                </div>
                <div class="input-box">
                    <label for="emergency_number">Emergency Number</label>
                    <input type="tel" placeholder="Emergency Number" name="emergency_number">
                </div>
                <div class="input-box">
                    <label for="website">Web Address</label>
                    <input type="url" placeholder="Your Website Address" name="website">
                </div>
                <div class="input-box">
                    <label for="facebook">Facebook</label>
                    <input type="url" placeholder="Facebook Profile Link" name="facebook">
                </div>
                <div class="input-box">
                    <label for="instagram">Instagram</label>
                    <input type="url" placeholder="Instagram Profile Link" name="instagram">
                </div>
                <div class="input-box">
                    <label for="linkedin">LinkedIn</label>
                    <input type="url" placeholder="LinkedIn Profile Link" name="linkedin">
                </div>
                <div class="input-box">
                    <label for="github">GitHub</label>
                    <input type="url" placeholder="GitHub Profile Link" name="github">
                </div>
            </div>
            <div class="alert">
                <input type="checkbox" name="agree_terms" required>
                <span class="alert-text">By clicking register, you agree to our <a href="#">Terms & Conditions</a></span>
            </div>
            <div class="button-container">
                <button>
                    Register
                </button>
            </div>
        </form>
    </div>

</body>

</html>

<?php

?>