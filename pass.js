function SendOTP(){
    const email = document.getElementById("email");
    const otpverify = document.getElementsByClassName("email-verify")[0];

    let otp_code = Math.floor(Math.random() * 10000);
    let emailbody = `<h1>Your verification code</h1> ${otp_code}`;

    Email.send({
        SecureToken : "212c435e-832f-44da-bc93-772a4fc25f41",
        To : email.value,
        From : "smartcardv2@gmail.com",
        Subject : "Verification Code",
        Body : Emailbody,
    }).then(
      message => {
        if(message === "OK"){
            alert("Verification code is sent to your email" + email.value);

            otpverify.computedStyleMap.display = "flex";
            let otp_inp = document.getElementById("otp-input");
            let otp_btn = document.getElementById("btn-verify-otp");

            otp_btn.addEventListener("click",()=>{
                if(otp_inp.value == otp_code){
                    alert("Email address has been verified...");
                    otpverify.computedStyleMap.display = "none";
                    email.value ="";
                    otp_inp.value ="";
                }
                else {
                    alert("Invalid OTP")
                }
            })
        }
      }
    );
}
