function navigateTo(page) {
    window.location.href = page;
}

document.getElementById('forgotPassword').addEventListener('click', function() {
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.forgot-password-form').style.display = 'block';
});

document.getElementById('register').addEventListener('click', function() {
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.register-form').style.display = 'block';
});

document.getElementById('backToLogin').addEventListener('click', function() {
    document.querySelector('.forgot-password-form').style.display = 'none';
    document.querySelector('.login-form').style.display = 'block';
});

document.getElementById('backToLoginFromRegister').addEventListener('click', function() {
    document.querySelector('.register-form').style.display = 'none';
    document.querySelector('.login-form').style.display = 'block';
});

//document.getElementById('loginForm').addEventListener('submit', function(event) {
    //event.preventDefault();
    //navigateTo('login.php');
//});