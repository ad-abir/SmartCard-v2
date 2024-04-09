document.addEventListener("DOMContentLoaded", function() {
    const showPasswordButton = document.getElementById("show-password");
    const passwordField = document.querySelector("input[name='pass']");

    showPasswordButton.addEventListener("click", function() {
        const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
        passwordField.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
    });
});


