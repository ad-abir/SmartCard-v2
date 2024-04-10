<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>

    <link rel="stylesheet" href="verification.css">

</head>
<body>
    <div class="container">
        <h2>Enter Verification Code</h2>
        <?php
            if(isset($_GET['error'])) {
                echo '<div class="error-message">' . $_GET['error'] . '</div>';
            }
        ?>
        <form action="process_verification.php" method="POST">
            <input type="text" name="verification_code" placeholder="Verification Code" required><br>
            <input type="submit" value="Verify">
        </form>
    </div>
</body>
</html>
