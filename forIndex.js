   const loginBtn = document.getElementById('loginBtn');
        const heroLoginBtn = document.getElementById('heroLoginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const loginModal = document.getElementById('loginModal');
        const closeModal = document.getElementById('closeModal');
        const loginForm = document.getElementById('loginForm');
        const dashboard = document.getElementById('dashboard');
        const switchToRegister = document.getElementById('switchToRegister');
        const printCertificate = document.getElementById('printCertificate');

        // Show login modal
        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
        });

        heroLoginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
        });

        registerBtn.addEventListener('click', () => {
            alert('Registration functionality would be implemented here');
        });

        // Close modal
        closeModal.addEventListener('click', () => {
            loginModal.style.display = 'none';
        });

        // Switch to registration
        switchToRegister.addEventListener('click', (e) => {
            e.preventDefault();
            alert('Registration form would be displayed here');
        });

        // Login form submission
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const studentId = document.getElementById('studentId').value;
            const password = document.getElementById('password').value;
            
            // Simple validation (in a real app, this would connect to a backend)
            if (studentId && password) {
                // Hide modal and show dashboard
                loginModal.style.display = 'none';
                dashboard.style.display = 'block';
                
                // Update student info (in a real app, this would come from the server)
                document.getElementById('displayStudentId').textContent = studentId;
                
                // Scroll to dashboard
                dashboard.scrollIntoView({ behavior: 'smooth' });
            } else {
                alert('Please enter both Student ID and Password');
            }
        });

        // Print certificate button
        printCertificate.addEventListener('click', () => {
            alert('Clearance certificate would be generated and printed here');
        });

        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
        });
   