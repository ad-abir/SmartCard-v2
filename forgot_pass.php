<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    
    <link rel="stylesheet" href="forgot_pass.css">
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="email_field" type="email" id="email" name="email" placeholder="Enter your email" required="">
                <label for="email"><br>Password:</label>
                <input class="change_pass" type="password" name="pass" placeholder="Password (minimum 8 characters)" required="">
                <label for="email"><br>Confirm Password:</label>
                <input class="confirm_change_pass" type="password" name="confirm_pass" placeholder="Confirm Password" required="">
            </div>
            <button class="submit_btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
