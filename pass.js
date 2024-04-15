function SendOTP(secureToken, email){
    let otp_code = Math.floor(Math.random() * 10000);
    let emailbody = `<h1>Your verification code</h1> ${otp_code}`;

    Email.send({
        SecureToken : secureToken, // Use the parameter value
        To : email,
        From : "smartcardv2@gmail.com",
        Subject : "Verification Code",
        Body : emailbody,
    }).then(
      message => {
        if(message === "OK"){
            alert("Verification code is sent to your email" + email);

            // Additional code for handling OTP verification...
        }
      }
    );
}
