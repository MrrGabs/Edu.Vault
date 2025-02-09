document.addEventListener('DOMContentLoaded', () => {
    showLogin(); // Show login form by default
});

function showLogin() {
    document.getElementById('login-form').classList.add('active');
    document.getElementById('signup-form').classList.remove('active');
    document.getElementById('welcome-message').innerText = 'Welcome Back to EduVault'; // Set welcome message for login
    document.querySelector('.container').style.animation = 'fadeIn 1s ease';
}

function showSignUp() {
    document.getElementById('signup-form').classList.add('active');
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('welcome-message').innerText = 'Join EduVault Today'; // Set welcome message for sign-up
    document.querySelector('.container').style.animation = 'fadeIn 1s ease';
}

function validateLogin() {
    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    if (username === '' || password === '') {
        alert('Please fill in all fields');
        return false;
    }

    // Add your login validation logic here

    return true;
}

function validateSignUp() {
    const username = document.getElementById('signup-username').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;
    const confirmPassword = document.getElementById('signup-confirm-password').value;

    if (username === '' || email === '' || password === '' || confirmPassword === '') {
        alert('Please fill in all fields');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return false;
    }

    // Add your sign-up validation logic here

    return true;
}
