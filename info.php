<?php
include("config.php");

session_start(); // Start the session

// Check if the email is stored in the session
if (isset($_SESSION['email'])) {
    // Assign the email from the session to another variable
    $email = $_SESSION['email'];

    // Now you can use $email variable for further processing
    //echo "Email from session: " . $email;
} else {
    //echo "Email not found in session.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="info.css">

    <link href="cropperjs/cropper.css" rel="stylesheet">
    <script src="cropperjs/cropper.js"></script>

</head>

<body>
    <div class="Container">
        <form class="registration_form" action="" enctype="multipart/form-data" method="POST">
            <h2>Registration</h2>
            <div class="upload">
                <input type="file" id="fileInput">
                <img src="images/profile_pic3.jpg" alt="Profile Picture" id="profileImage">
            </div>
            <script src="change_profile_img.js"></script>

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
                    <input type="email" placeholder="Your Email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required readonly>
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
// Establish connection to the MySQL database
include("config.php");

session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $whatsapp = $_POST['whatsapp'];
    $home_recipient_name = $_POST['home_recipient_name'];
    $home_address = $_POST['home_address'];
    $home_google_link = $_POST['home_google_link'];
    $company_recipient_name = $_POST['company_recipient_name'];
    $company_address = $_POST['company_address'];
    $company_google_link = $_POST['company_google_link'];
    $emergency_number = $_POST['emergency_number'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];

    // Sanitize and validate the input data (not implemented here for brevity)

    // Construct the SQL INSERT statement
    $sql = "INSERT INTO your_table_name (name, bio, description, email, phone, whatsapp, home_recipient_name, home_address, home_google_link, company_recipient_name, company_address, company_google_link, emergency_number, website, facebook, instagram, linkedin, github) 
            VALUES ('$name', '$bio', '$description', '$email', '$phone', '$whatsapp', '$home_recipient_name', '$home_address', '$home_google_link', '$company_recipient_name', '$company_address', '$company_google_link', '$emergency_number', '$website', '$facebook', '$instagram', '$linkedin', '$github')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>