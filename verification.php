<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link rel="stylesheet" href="verification.css">

</head>
<body>
    <div class="container">
        <h2>A verification code will be sent to your email</h2>
        <?php
            if(isset($_GET['error'])) {
                echo '<div class="error-message">' . $_GET['error'] . '</div>';
            }
        ?>
        <form id="verificationForm" action="process_verification.php" method="POST">
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required> <!-- Added id attribute -->
                <button class="send_code" type="button" id="sendCodeButton">Send</button>
            </div>

            <h2><br><br>Enter the Verification Code</h2>

            <input type="text" name="verification_code" placeholder="Verification Code" required><br>
            <button class="verify_button" type="submit" name="signup">Verify</button>

            <script>
                // Add event listener to the "Send" button
                document.getElementById("sendCodeButton").addEventListener("click", function() {
                    // Call the SendOTP() function when the button is clicked
                    SendOTP("#####", document.getElementById("email").value); // Pass email as argument
                });
            </script>

        </form>
    </div>
</body>
    <script src="pass.js" defer></script>
</html>
