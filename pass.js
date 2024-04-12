// pass.js

function myFunction() {
    var passwordInput = document.querySelector('input[name="pass"]');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}

