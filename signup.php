<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartCard- Signin/ Signup</title>
    
    <link rel="stylesheet" href="signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="signup.js" defer></script>
    <script src="pass.js" defer></script>
    <script src="popup.js"></script>

</head>
<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form action="verification.php" method="POST">
                <h1>Create Account</h1>
                <input type="text" name="fname" placeholder="First Name" required="">
                <input type="text" name="lname" placeholder="Last Name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pass" placeholder="Password (minimum 8 characters)" required="">
                <input type="password" name="confirm_pass" placeholder="Confirm Password" required="">
                <button type="submit" name="signup">Sign Up</button>
                <p>All fields are mandatory for completion.</p>

            </form>
        </div>

        <div class="sign-in">
            <form action="#" method="POST">
                <h1>Sign In</h1>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pass" placeholder="Password" required="">
                <i class="fa-solid fa-eye" id="show-password"></i>
                <a href="#">Forgot Password?</a>
                <button type="submit" name="signin">Sign In</button>

            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To stay connected, please sign in with your personal information.</p>
                    <button id="signIn">Sign In</button>
                </div>

                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Begin your personalized journey with us by sharing your information.</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>

    </div>

</body>
</html>

<?php
include("config.php");

if(isset($_POST['signup'])) {
    $first_name = mysqli_real_escape_string($connection, $_POST['fname']);
    $last_name  = mysqli_real_escape_string($connection, $_POST['lname']);
    $email      = mysqli_real_escape_string($connection, $_POST['email']);
    $pass       = mysqli_real_escape_string($connection, $_POST['pass']);
    $con_pass   = mysqli_real_escape_string($connection, $_POST['confirm_pass']);

    // Generate a random verification code
    $verification_code = mt_rand(100000, 999999);

    // Check if the password and confirm password match
    if ($pass !== $con_pass) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
    } elseif (strlen($pass) < 8) {
        echo "<script>alert('Password must be at least 8 characters long. Please try again.');</script>";
    } else {
        // Check if the email already exists in the database
        $check_query = "SELECT * FROM signup WHERE `Email` = '$email'";
        $check_result = mysqli_query($connection, $check_query);

        if(mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('This email address already exists. Please use a different email address.');</script>";
        } else {
            // Validate if email is a valid Gmail address
            if (!preg_match("/^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@gmail.com$/", $email)) {
                echo "<script>alert('Please provide a valid Gmail address.');</script>";
            } else {
                // Insert the user data into the signup table with verification code
                $query = "INSERT INTO signup (`First Name`, `Last Name`, `Email`, `Password`, `Confirm Password`) VALUES ('$first_name','$last_name','$email','$pass','$con_pass')";

                $data = mysqli_query($connection, $query);

                //$query_verify = "INSERT INTO verify (`Email`,`Verification_code`) VALUES ('$email','$verification_code')";
                //$data_verify = mysqli_query($connection, $query_verify);

                if($data) {
                    // Send verification email
                    //$to = $email;
                    //$subject = 'Email Verification';
                    //$message = 'Your verification code is: ' . $verification_code;
                    //$headers = 'From: abhishek54das@gmail.com' . "\r\n" .
                               //'Reply-To: abhishek54das@gmail.com' . "\r\n" .
                               //'X-Mailer: PHP/' . phpversion();

                    //mail($to, $subject, $message, $headers);

                    echo "<script>alert('Sign Up Successful! A verification code has been sent to your email. Please verify your email to login.');</script>";
                    
                    header('Location: verification.php');
                    exit;

                } else {
                    echo "<script>alert('Sign Up Failed. Error: " . mysqli_error($connection) . "');</script>";
                }                    
            }
        }
    }
}
?>

<?php
    include("config.php");
    session_start(); // Start or resume the session

    if(isset($_POST['signin'])) {
        $username = $_POST['email'];
        $pass_key = $_POST['pass'];

        // Validate user credentials
        $check_query = "SELECT * FROM signup WHERE Email = '$username' && Password = '$pass_key'";
        $info = mysqli_query($connection, $check_query);

        if ($info && mysqli_num_rows($info) == 1) {
            // Login successful
            $_SESSION['email'] = $username; // Store email in session
            //header("Location: dashboard.php"); // Redirect to dashboard or another page
            echo "Successful login";
            exit(); // Stop further execution
        } else {
            // Login failed
            echo "Invalid email or password";
        }
    }
?>

