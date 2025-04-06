const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

registerLink.onclick = () => {
    wrapper.classList.add('active'); // Adds the 'active' class when clicking register
}

loginLink.onclick = () => {
    wrapper.classList.remove('active'); // Removes the 'active' class when clicking login
}

document.getElementById('togglePassword').addEventListener('click', function () {
    var passwordField = document.getElementById('password');
    if (passwordField.type === "password") {
        passwordField.type = "text"; // Show password
        this.classList.replace('bx-show', 'bx-hide'); // Change eye icon
    } else {
        passwordField.type = "password"; // Hide password
        this.classList.replace('bx-hide', 'bx-show'); // Change back
    }
});