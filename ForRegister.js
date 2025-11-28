  
        // DOM Elements
        const loginBtn = document.getElementById('loginBtn');
        const heroLoginBtn = document.getElementById('heroLoginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const closeLoginModal = document.getElementById('closeLoginModal');
        const closeRegisterModal = document.getElementById('closeRegisterModal');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const dashboard = document.getElementById('dashboard');
        const switchToRegister = document.getElementById('switchToRegister');
        const switchToLogin = document.getElementById('switchToLogin');
        const printCertificate = document.getElementById('printCertificate');
        const loginSuccessMessage = document.getElementById('loginSuccessMessage');

        // Show login modal
        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
            registerModal.style.display = 'none';
        });

        heroLoginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
            registerModal.style.display = 'none';
        });

        // Show register modal
        registerBtn.addEventListener('click', () => {
            registerModal.style.display = 'flex';
            loginModal.style.display = 'none';
        });

        // Switch between login and register modals
        switchToRegister.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.style.display = 'none';
            registerModal.style.display = 'flex';
        });

        switchToLogin.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.style.display = 'none';
            loginModal.style.display = 'flex';
        });

        // Close modals
        closeLoginModal.addEventListener('click', () => {
            loginModal.style.display = 'none';
        });

        closeRegisterModal.addEventListener('click', () => {
            registerModal.style.display = 'none';
        });

        // Form validation functions
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            //const re = /^[\+]xa?[0-9]{10,15}$/;
            return re.test(phone);
        }

        function validateStudentId(studentId) {
            //const re = /^[\I\N\U]?[0-9]+$/;
            return re.test(studentId);
        }

        // Registration form submission
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            let isValid = true;

            // Reset error messages
            document.querySelectorAll('.error-message').forEach(msg => {
                msg.style.display = 'none';
            });

            // Validate first name
            const firstName = document.getElementById('firstName').value;
            if (!firstName.trim()) {
                document.getElementById('firstNameError').style.display = 'block';
                isValid = false;
            }

            // Validate last name
            const lastName = document.getElementById('lastName').value;
            if (!lastName.trim()) {
                document.getElementById('lastNameError').style.display = 'block';
                isValid = false;
            }

            // Validate student ID
            const regStudentId = document.getElementById('regStudentId').value;
            if (!validateStudentId(regStudentId)) {
                document.getElementById('regStudentIdError').style.display = 'block';
                isValid = false;
            }

            // Validate email
            const email = document.getElementById('email').value;
            if (!validateEmail(email)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }

            // Validate phone
            const phone = document.getElementById('phone').value;
            if (!validatePhone(phone)) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            }

            // Validate department
            const department = document.getElementById('department').value;
            if (!department) {
                document.getElementById('departmentError').style.display = 'block';
                isValid = false;
            }

            // Validate program
            const program = document.getElementById('program').value;
            if (!program) {
                document.getElementById('programError').style.display = 'block';
                isValid = false;
            }

            // Validate graduation year
            const graduationYear = document.getElementById('graduationYear').value;
            if (!graduationYear) {
                document.getElementById('graduationYearError').style.display = 'block';
                isValid = false;
            }

            // Validate password
            const regPassword = document.getElementById('regPassword').value;
            if (regPassword.length < 8) {
                document.getElementById('regPasswordError').style.display = 'block';
                isValid = false;
            }

            // Validate confirm password
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (regPassword !== confirmPassword) {
                document.getElementById('confirmPasswordError').style.display = 'block';
                isValid = false;
            }

            // Validate terms agreement
            const agreeTerms = document.getElementById('agreeTerms').checked;
            if (!agreeTerms) {
                document.getElementById('agreeTermsError').style.display = 'block';
                isValid = false;
            }

            if (isValid) {
                // In a real application, you would send the data to a server here
                // For this demo, we'll just show a success message and switch to login
                
                // Store user data in localStorage (for demo purposes)
                const userData = {
                    firstName,
                    lastName,
                    studentId: regStudentId,
                    email,
                    phone,
                    department,
                    program,
                    graduationYear,
                    password: regPassword
                };
                
                localStorage.setItem('userData', JSON.stringify(userData));
                
                // Show success message and switch to login
                registerModal.style.display = 'none';
                loginModal.style.display = 'flex';
                loginSuccessMessage.style.display = 'block';
                
                // Pre-fill the login form
                document.getElementById('studentId').value = regStudentId;
                document.getElementById('password').value = regPassword;
            }
        });

        // Login form submission
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const studentId = document.getElementById('studentId').value;
            const password = document.getElementById('password').value;
            
            // Reset error messages
            document.querySelectorAll('.error-message').forEach(msg => {
                msg.style.display = 'none';
            });
            
            let isValid = true;
            
            if (!validateStudentId(studentId)) {
                document.getElementById('studentIdError').style.display = 'block';
                isValid = false;
            }
            
            if (!password) {
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            }
            
            if (isValid) {
                // In a real application, you would verify credentials with a server
                // For this demo, we'll check against localStorage
                const storedUserData = localStorage.getItem('userData');
                
                if (storedUserData) {
                    const userData = JSON.parse(storedUserData);
                    
                    if (userData.studentId === studentId && userData.password === password) {
                        // Successful login
                        loginModal.style.display = 'none';
                        dashboard.style.display = 'block';
                        
                        // Update student info
                        document.getElementById('displayStudentId').textContent = studentId;
                        document.getElementById('studentName').textContent = `${userData.firstName} ${userData.lastName}`;
                        document.getElementById('studentDept').textContent = document.getElementById('department').options[document.getElementById('department').selectedIndex].text;
                        document.getElementById('gradDate').textContent = userData.graduationYear;
                        
                        // Scroll to dashboard
                        dashboard.scrollIntoView({ behavior: 'smooth' });
                    } else {
                        alert('Invalid student ID or password. Please try again.');
                    }
                } else {
                    // For demo purposes, allow any login if no user is registered
                    loginModal.style.display = 'none';
                    dashboard.style.display = 'block';
                    document.getElementById('displayStudentId').textContent = studentId;
                    dashboard.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });

        // Print certificate button
        printCertificate.addEventListener('click', () => {
            alert('Clearance certificate would be generated and printed here');
        });

        // Close modals when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
            if (e.target === registerModal) {
                registerModal.style.display = 'none';
            }
        });
   