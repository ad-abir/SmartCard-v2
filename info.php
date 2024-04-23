<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information Form</title>

    <link rel="stylesheet" href="info.css">

</head>

<body>
    <div class="Container">
        <form class="registration_form" action="" method="POST">
            <h2>Registration</h2>
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


    <!-- <h2>Contact Information</h2>
    <form class="info_form_for_records" action="submit_form.php" method="POST">
        <div id="profile_picture_container">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
            <div class="profile-picture-preview"></div>
        </div>

        <label for="full_name">Full Name:</label><br>
        <input type="text" id="full_name" name="full_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" required><br><br>

        <label for="whatsapp_number">WhatsApp Number:</label><br>
        <input type="tel" id="whatsapp_number" name="whatsapp_number" pattern="[0-9]{10}"><br><br>

        <label for="home_address">Home Address:</label><br>
        <input type="text" id="home_address_name" name="home_address_name" placeholder="Name"><br>
        <textarea id="home_address" name="home_address" rows="4" cols="50" placeholder="Address"></textarea><br>
        <input type="url" id="home_map_link" name="home_map_link" placeholder="Google Maps Link"><br><br>

        <label for="company_address">Company Address:</label><br>
        <input type="text" id="company_address_name" name="company_address_name" placeholder="Name"><br>
        <textarea id="company_address" name="company_address" rows="4" cols="50" placeholder="Address"></textarea><br>
        <input type="url" id="company_map_link" name="company_map_link" placeholder="Google Maps Link"><br><br>

        <label for="emergency_number">Emergency Number:</label><br>
        <input type="tel" id="emergency_number" name="emergency_number" pattern="[0-9]{10}" required><br><br>

        <label for="facebook_link">Facebook Link:</label><br>
        <input type="url" id="facebook_link" name="facebook_link" placeholder="Facebook Link"><br><br>

        <label for="instagram_link">Instagram Link:</label><br>
        <input type="url" id="instagram_link" name="instagram_link" placeholder="Instagram Link"><br><br>

        <label for="linkedin_link">LinkedIn Link:</label><br>
        <input type="url" id="linkedin_link" name="linkedin_link" placeholder="LinkedIn Link"><br><br>

        <label for="github_link">GitHub Link:</label><br>
        <input type="url" id="github_link" name="github_link" placeholder="GitHub Link"><br><br>

        <input type="submit" value="Submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script> -->

</body>

</html>