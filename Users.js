//login page
// Mobile menu toggle
document.querySelector('.mobile-menu').addEventListener('click', function () {
    document.querySelector('nav ul').classList.toggle('show');
});

// Form submission
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;

    // Simple validation
    if (!username || !password) {
        alert('Please fill in all required fields');
        return;
    }

    // In a real application, you would send this data to a server
    console.log('Login attempt:', { username, password, remember });

    // Simulate login process
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Logging in...';
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        alert('Login successful! Redirecting to dashboard...');
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;

        // In a real application, you would redirect to the dashboard
        // window.location.href = 'dashboard.html';
    }, 1500);
});

// Forgot password functionality
//document.querySelector('.forgot-password').addEventListener('click', function(e) {
//    e.preventDefault();
//   alert('Password reset instructions will be sent to your registered email.');
//});

// Social login buttons
document.querySelectorAll('.social-btn').forEach(button => {
    button.addEventListener('click', function () {
        const provider = this.classList.contains('google') ? 'Google' : 'Microsoft';
        alert(`Redirecting to ${provider} authentication...`);
    });
});


// index
// Mobile menu toggle
document.querySelector('.mobile-menu').addEventListener('click', function () {
    document.querySelector('nav ul').classList.toggle('show');
});

// Login modal functionality
const loginBtn = document.getElementById('loginBtn');
const heroLoginBtn = document.getElementById('heroLoginBtn');
const loginModal = document.getElementById('loginModal');
const closeModal = document.querySelector('.close-modal');

loginBtn.addEventListener('click', function (e) {
    e.preventDefault();
    loginModal.style.display = 'flex';
});

heroLoginBtn.addEventListener('click', function (e) {
    e.preventDefault();
    loginModal.style.display = 'flex';
});

closeModal.addEventListener('click', function () {
    loginModal.style.display = 'none';
});

window.addEventListener('click', function (e) {
    if (e.target === loginModal) {
        loginModal.style.display = 'none';
    }
});


// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            document.querySelector('nav ul').classList.remove('show');
        }
    });
});



// for register
