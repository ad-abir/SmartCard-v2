function SendOTP(secureToken, email){
    let otp_code = Math.floor(Math.random() * 10000);
    let emailbody = `<h1>Your verification code</h1> ${otp_code}`;

    Email.send({
        SecureToken : "212c435e-832-44da-bc93-772a4fc25f41", // Use the parameter value
        To : email,
        From : "smartcardv2@gmail.com",
        Subject : "Verification Code",
        Body : emailbody,
    }).then(
      message => {
        if(message === "OK"){
            alert("Verification code is sent to your email" + email);

            // Display verification form
            let otpverify = document.getElementsByClassName("email-verify")[0];
            otpverify.style.display = "flex";

            // Handle OTP verification
            let otpInput = document.getElementById("verification_code");
            let verifyButton = document.getElementById("verifyButton");

            verifyButton.addEventListener("click", () => {
                if(otpInput.value == otp_code){
                    alert("Email address has been verified...");
                    otpverify.style.display = "none";
                    // Optionally, you can submit the form after verification
                    // document.getElementById("verificationForm").submit();
                } else {
                    alert("Invalid OTP")
                }
            });
        }
      }
    );
}
