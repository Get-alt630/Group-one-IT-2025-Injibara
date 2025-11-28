<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Clearance - Injibara University</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a4d8c;
            --secondary: #e63946;
            --accent: #2a9d8f;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), #0d3a6d);
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo img {
            height: 60px;
            width: auto;
        }
        
        .logo-text h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .logo-text p {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--accent);
            color: white;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .library-clearance {
            padding: 40px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary);
        }
        
        .clearance-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .clearance-info, .clearance-form {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .info-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-item h3 {
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-item p {
            margin-bottom: 5px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .borrowed-items {
            margin-top: 20px;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }
        
        .borrowed-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .borrowed-item:last-child {
            border-bottom: none;
        }
        
        .item-details {
            flex: 1;
        }
        
        .item-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .status-returned {
            background: #d4edda;
            color: #155724;
        }
        
        .status-overdue {
            background: #f8d7da;
            color: #721c24;
        }
        
        .status-borrowed {
            background: #fff3cd;
            color: #856404;
        }
        
        .fine-details {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid var(--accent);
        }
        
        .fine-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--danger);
            margin: 10px 0;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn-success {
            background-color: var(--success);
            color: white;
        }
        
        .btn-warning {
            background-color: var(--warning);
            color: var(--dark);
        }
        
        .btn-danger {
            background-color: var(--danger);
            color: white;
        }
        
        .clearance-status {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        
        .status-pending {
            background: #fff3cd;
            color: #856404;
            border: 1px solid #ffeaa7;
        }
        
        .status-completed {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 40px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
        }
        
        @media (max-width: 768px) {
            .clearance-container {
                grid-template-columns: 1fr;
            }
            
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <!-- Placeholder for university logo -->
                    <div style="width: 60px; height: 60px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); font-weight: bold;">IU</div>
                    <div class="logo-text">
                        <h1>Injibara University</h1>
                        <p>Library Clearance Portal</p>
                    </div>
                </div>
                <div class="auth-buttons">
                    <button class="btn btn-outline" id="loginBtn">Student Login</button>
                    <button class="btn btn-primary" id="dashboardBtn">Main Dashboard</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Library Clearance Section -->
    <section class="library-clearance">
        <div class="container">
            <h2 class="section-title">Library Clearance for Graduation</h2>
            
            <div class="clearance-container">
                <!-- Information Section -->
                <div class="clearance-info">
                    <h2 style="color: var(--primary); margin-bottom: 20px;">Information Submitted to Library</h2>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-user-graduate"></i> Student Information</h3>
                        <p><strong>Full Name:</strong> Abebe Kebede</p>
                        <p><strong>Student ID:</strong> IU/2019/1234</p>
                        <p><strong>Department:</strong> Computer Science</p>
                        <p><strong>Program:</strong> Undergraduate</p>
                        <p><strong>Expected Graduation:</strong> June 2023</p>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-book"></i> Borrowing History</h3>
                        <p>Complete record of all materials borrowed during your study period</p>
                        <p><strong>Total Items Borrowed:</strong> 24 books, 3 journals</p>
                        <p><strong>Current Borrowed Items:</strong> 2 books</p>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-exclamation-triangle"></i> Outstanding Issues</h3>
                        <p>Any unresolved issues with the library</p>
                        <p><strong>Overdue Items:</strong> 1 book (14 days overdue)</p>
                        <p><strong>Library Fines:</strong> 150 ETB</p>
                        <p><strong>Lost Items:</strong> None reported</p>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-file-signature"></i> Clearance Requirements</h3>
                        <p>To complete library clearance, you must:</p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>Return all borrowed library materials</li>
                            <li>Pay all outstanding fines and fees</li>
                            <li>Submit clearance form with student ID card</li>
                            <li>Receive approval from library staff</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Clearance Form Section -->
                <div class="clearance-form">
                    <h2 style="color: var(--primary); margin-bottom: 20px;">Library Clearance Form</h2>
                    
                    <div class="form-group">
                        <label for="studentId">Student ID</label>
                        <input type="text" id="studentId" class="form-control" value="IU/2019/1234" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" class="form-control" value="Abebe Kebede" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Borrowed Items Status</label>
                        <div class="borrowed-items">
                            <div class="borrowed-item">
                                <div class="item-details">
                                    <strong>Introduction to Algorithms</strong>
                                    <p>Due: 15 May 2023</p>
                                </div>
                                <div class="item-status status-returned">Returned</div>
                            </div>
                            <div class="borrowed-item">
                                <div class="item-details">
                                    <strong>Database System Concepts</strong>
                                    <p>Due: 20 May 2023</p>
                                </div>
                                <div class="item-status status-returned">Returned</div>
                            </div>
                            <div class="borrowed-item">
                                <div class="item-details">
                                    <strong>Computer Networks (5th Ed.)</strong>
                                    <p>Due: 10 May 2023</p>
                                </div>
                                <div class="item-status status-overdue">Overdue</div>
                            </div>
                            <div class="borrowed-item">
                                <div class="item-details">
                                    <strong>Research Methods for Science</strong>
                                    <p>Due: 25 May 2023</p>
                                </div>
                                <div class="item-status status-borrowed">Still Borrowed</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fine-details">
                        <h3><i class="fas fa-money-bill-wave"></i> Outstanding Fines</h3>
                        <p>You have the following outstanding library fines:</p>
                        <div class="fine-amount">150 ETB</div>
                        <p>This includes overdue fines and processing fees.</p>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="confirmReturn" name="confirmReturn">
                            <label for="confirmReturn">I confirm that I have returned all borrowed library materials</label>
                        </div>
                        
                        <div class="checkbox-group">
                            <input type="checkbox" id="confirmPayment" name="confirmPayment">
                            <label for="confirmPayment">I confirm that I have paid all outstanding library fines</label>
                        </div>
                        
                        <div class="checkbox-group">
                            <input type="checkbox" id="agreeTerms" name="agreeTerms">
                            <label for="agreeTerms">I agree that all information provided is accurate</label>
                        </div>
                    </div>
                    
                    <div class="action-buttons">
                        <button class="btn btn-success" id="submitClearance">Submit Clearance Request</button>
                        <button class="btn btn-warning" id="payFines">Pay Fines Online</button>
                    </div>
                    
                    <div class="clearance-status status-pending" id="clearanceStatus">
                        <h3><i class="fas fa-clock"></i> Clearance Status: PENDING</h3>
                        <p>Your library clearance is currently pending. Please complete all requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Injibara University Library</h3>
                    <p>Supporting academic excellence through quality resources and services.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Library Building, Injibara University</p>
                    <p><i class="fas fa-phone"></i> +251 XXX XXX XXX</p>
                    <p><i class="fas fa-envelope"></i> library@injibarauniversity.edu.et</p>
                </div>
                <div class="footer-section">
                    <h3>Library Hours</h3>
                    <p>Monday-Friday: 8:00 AM - 8:00 PM</p>
                    <p>Saturday: 9:00 AM - 5:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Injibara University. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // DOM Elements
        const loginBtn = document.getElementById('loginBtn');
        const dashboardBtn = document.getElementById('dashboardBtn');
        const submitClearance = document.getElementById('submitClearance');
        const payFines = document.getElementById('payFines');
        const clearanceStatus = document.getElementById('clearanceStatus');
        const confirmReturn = document.getElementById('confirmReturn');
        const confirmPayment = document.getElementById('confirmPayment');
        const agreeTerms = document.getElementById('agreeTerms');

        // Login button functionality
        loginBtn.addEventListener('click', () => {
            alert('Redirecting to student login page...');
            // In a real application, this would redirect to the login page
        });

        // Dashboard button functionality
        dashboardBtn.addEventListener('click', () => {
            alert('Redirecting to main dashboard...');
            // In a real application, this would redirect to the main dashboard
        });

        // Submit clearance functionality
        submitClearance.addEventListener('click', () => {
            if (!confirmReturn.checked || !confirmPayment.checked || !agreeTerms.checked) {
                alert('Please confirm all requirements before submitting your clearance request.');
                return;
            }
            
            // Simulate submission process
            submitClearance.disabled = true;
            submitClearance.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            
            setTimeout(() => {
                // Update status to completed
                clearanceStatus.className = 'clearance-status status-completed';
                clearanceStatus.innerHTML = `
                    <h3><i class="fas fa-check-circle"></i> Clearance Status: COMPLETED</h3>
                    <p>Your library clearance has been approved! You can now proceed with other departmental clearances.</p>
                `;
                
                // Show success message
                alert('Library clearance submitted successfully! Your request will be processed within 24 hours.');
                
                // Reset button
                submitClearance.disabled = false;
                submitClearance.innerHTML = 'Clearance Submitted';
            }, 2000);
        });

        // Pay fines functionality
        payFines.addEventListener('click', () => {
            alert('Redirecting to payment portal...\n\nAmount to pay: 150 ETB');
            // In a real application, this would redirect to a payment gateway
        });

        // Form validation
        [confirmReturn, confirmPayment, agreeTerms].forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (confirmReturn.checked && confirmPayment.checked && agreeTerms.checked) {
                    submitClearance.disabled = false;
                } else {
                    submitClearance.disabled = true;
                }
            });
        });
    </script>
</body>
</html>