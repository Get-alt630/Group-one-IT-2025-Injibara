<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Office Clearance - Injibara University</title>
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
        
        .finance-clearance {
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
        
        .fee-breakdown {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        
        .fee-breakdown th, .fee-breakdown td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .fee-breakdown th {
            background-color: #f1f1f1;
            font-weight: 600;
        }
        
        .fee-breakdown .amount {
            text-align: right;
            font-weight: 600;
        }
        
        .fee-breakdown .total-row {
            background-color: #e9f7ef;
            font-weight: bold;
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
        
        .payment-methods {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 15px;
        }
        
        .payment-method {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .payment-method:hover {
            border-color: var(--accent);
            background-color: #f0f9f7;
        }
        
        .payment-method.selected {
            border-color: var(--accent);
            background-color: #e6f3f1;
        }
        
        .payment-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary);
        }
        
        .fine-details {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid var(--accent);
        }
        
        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--danger);
            margin: 10px 0;
            text-align: center;
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
        
        .payment-receipt {
            margin-top: 20px;
            padding: 15px;
            background: white;
            border-radius: 5px;
            border: 1px dashed #ddd;
            display: none;
        }
        
        .receipt-header {
            text-align: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .receipt-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
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
            
            .payment-methods {
                grid-template-columns: 1fr;
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
                        <p>Finance Office Clearance Portal</p>
                    </div>
                </div>
                <div class="auth-buttons">
                    <button class="btn btn-outline" id="loginBtn">Student Login</button>
                    <button class="btn btn-primary" id="dashboardBtn">Main Dashboard</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Finance Clearance Section -->
    <section class="finance-clearance">
        <div class="container">
            <h2 class="section-title">Finance Office Clearance for Graduation</h2>
            
            <div class="clearance-container">
                <!-- Information Section -->
                <div class="clearance-info">
                    <h2 style="color: var(--primary); margin-bottom: 20px;">Financial Information & Outstanding Balances</h2>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-user-graduate"></i> Student Information</h3>
                        <p><strong>Full Name:</strong> Abebe Kebede</p>
                        <p><strong>Student ID:</strong> IU/2019/1234</p>
                        <p><strong>Department:</strong> Computer Science</p>
                        <p><strong>Program:</strong> Undergraduate</p>
                        <p><strong>Expected Graduation:</strong> June 2023</p>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-money-check"></i> Tuition Fee Status</h3>
                        <p>Summary of tuition fees and payments</p>
                        <table class="fee-breakdown">
                            <tr>
                                <th>Description</th>
                                <th class="amount">Amount (ETB)</th>
                            </tr>
                            <tr>
                                <td>Tuition Fee - Semester 1</td>
                                <td class="amount">4,500</td>
                            </tr>
                            <tr>
                                <td>Tuition Fee - Semester 2</td>
                                <td class="amount">4,500</td>
                            </tr>
                            <tr>
                                <td>Tuition Fee - Semester 3</td>
                                <td class="amount">4,500</td>
                            </tr>
                            <tr>
                                <td>Tuition Fee - Semester 4</td>
                                <td class="amount">4,500</td>
                            </tr>
                            <tr>
                                <td>Registration Fee</td>
                                <td class="amount">500</td>
                            </tr>
                            <tr>
                                <td>Student Service Fee</td>
                                <td class="amount">1,200</td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total Fees</strong></td>
                                <td class="amount"><strong>19,700</strong></td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total Paid</strong></td>
                                <td class="amount"><strong>18,700</strong></td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Outstanding Balance</strong></td>
                                <td class="amount" style="color: var(--danger);"><strong>1,000</strong></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-file-invoice-dollar"></i> Other Outstanding Payments</h3>
                        <p>Additional fees and penalties</p>
                        <table class="fee-breakdown">
                            <tr>
                                <th>Description</th>
                                <th class="amount">Amount (ETB)</th>
                            </tr>
                            <tr>
                                <td>Library Fines</td>
                                <td class="amount">150</td>
                            </tr>
                            <tr>
                                <td>Graduation Fee</td>
                                <td class="amount">500</td>
                            </tr>
                            <tr>
                                <td>Late Payment Penalty</td>
                                <td class="amount">50</td>
                            </tr>
                            <tr class="total-row">
                                <td><strong>Total Additional Fees</strong></td>
                                <td class="amount" style="color: var(--danger);"><strong>700</strong></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="info-item">
                        <h3><i class="fas fa-clipboard-check"></i> Clearance Requirements</h3>
                        <p>To complete finance clearance, you must:</p>
                        <ul style="margin-left: 20px; margin-top: 10px;">
                            <li>Settle all outstanding tuition fee balances</li>
                            <li>Pay all additional fees and penalties</li>
                            <li>Submit payment receipts for verification</li>
                            <li>Receive approval from finance office staff</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Clearance Form Section -->
                <div class="clearance-form">
                    <h2 style="color: var(--primary); margin-bottom: 20px;">Finance Clearance Application</h2>
                    
                    <div class="form-group">
                        <label for="studentId">Student ID</label>
                        <input type="text" id="studentId" class="form-control" value="IU/2019/1234" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" class="form-control" value="Abebe Kebede" required>
                    </div>
                    
                    <div class="fine-details">
                        <h3><i class="fas fa-money-bill-wave"></i> Total Outstanding Balance</h3>
                        <p>You need to pay the following amount to complete your finance clearance:</p>
                        <div class="total-amount">1,700 ETB</div>
                        <p>This includes tuition balance and additional fees.</p>
                    </div>
                    
                    <div class="form-group">
                        <label>Select Payment Method</label>
                        <div class="payment-methods">
                            <div class="payment-method" data-method="cbe">
                                <div class="payment-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h4>Commercial Bank of Ethiopia</h4>
                                <p>Pay at any CBE branch</p>
                            </div>
                            <div class="payment-method" data-method="telebirr">
                                <div class="payment-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h4>Telebirr</h4>
                                <p>Mobile payment</p>
                            </div>
                            <div class="payment-method" data-method="cbebirr">
                                <div class="payment-icon">
                                    <i class="fas fa-money-check"></i>
                                </div>
                                <h4>CBE Birr</h4>
                                <p>Mobile banking</p>
                            </div>
                            <div class="payment-method" data-method="direct">
                                <div class="payment-icon">
                                    <i class="fas fa-cash-register"></i>
                                </div>
                                <h4>Finance Office</h4>
                                <p>Pay in person</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="payment-receipt" id="paymentReceipt">
                        <div class="receipt-header">
                            <h3><i class="fas fa-receipt"></i> Payment Receipt</h3>
                            <p>Reference No: IU-FIN-2023-7890</p>
                        </div>
                        <div class="receipt-details">
                            <div><strong>Date:</strong> <span id="receiptDate">25 May 2023</span></div>
                            <div><strong>Student ID:</strong> <span>IU/2019/1234</span></div>
                            <div><strong>Amount Paid:</strong> <span>1,700 ETB</span></div>
                            <div><strong>Payment Method:</strong> <span id="receiptMethod">Telebirr</span></div>
                            <div><strong>Transaction ID:</strong> <span>TB7890123456</span></div>
                            <div><strong>Status:</strong> <span style="color: var(--success);">Verified</span></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="confirmPayment" name="confirmPayment">
                            <label for="confirmPayment">I confirm that I have paid all outstanding fees</label>
                        </div>
                        
                        <div class="checkbox-group">
                            <input type="checkbox" id="confirmReceipt" name="confirmReceipt">
                            <label for="confirmReceipt">I have uploaded my payment receipt</label>
                        </div>
                        
                        <div class="checkbox-group">
                            <input type="checkbox" id="agreeTerms" name="agreeTerms">
                            <label for="agreeTerms">I agree that all financial information is accurate</label>
                        </div>
                    </div>
                    
                    <div class="action-buttons">
                        <button class="btn btn-success" id="submitClearance">Submit Clearance Request</button>
                        <button class="btn btn-warning" id="payFees">Pay Fees Online</button>
                        <button class="btn btn-primary" id="uploadReceipt">Upload Receipt</button>
                    </div>
                    
                    <div class="clearance-status status-pending" id="clearanceStatus">
                        <h3><i class="fas fa-clock"></i> Clearance Status: PENDING</h3>
                        <p>Your finance clearance is pending. Please settle all outstanding fees.</p>
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
                    <h3>Injibara University Finance Office</h3>
                    <p>Managing university finances and student accounts with integrity.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Administration Building, Injibara University</p>
                    <p><i class="fas fa-phone"></i> +251 XXX XXX XXX</p>
                    <p><i class="fas fa-envelope"></i> finance@injibarauniversity.edu.et</p>
                </div>
                <div class="footer-section">
                    <h3>Office Hours</h3>
                    <p>Monday-Friday: 8:30 AM - 4:30 PM</p>
                    <p>Saturday: 9:00 AM - 12:00 PM</p>
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
        const payFees = document.getElementById('payFees');
        const uploadReceipt = document.getElementById('uploadReceipt');
        const clearanceStatus = document.getElementById('clearanceStatus');
        const confirmPayment = document.getElementById('confirmPayment');
        const confirmReceipt = document.getElementById('confirmReceipt');
        const agreeTerms = document.getElementById('agreeTerms');
        const paymentMethods = document.querySelectorAll('.payment-method');
        const paymentReceipt = document.getElementById('paymentReceipt');
        const receiptMethod = document.getElementById('receiptMethod');

        // Set current date for receipt
        document.getElementById('receiptDate').textContent = new Date().toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });

        // Login button functionality
        loginBtn.addEventListener('click', () => {
            alert('Redirecting to student login page...');
        });

        // Dashboard button functionality
        dashboardBtn.addEventListener('click', () => {
            alert('Redirecting to main dashboard...');
        });

        // Payment method selection
        paymentMethods.forEach(method => {
            method.addEventListener('click', () => {
                // Remove selected class from all methods
                paymentMethods.forEach(m => m.classList.remove('selected'));
                // Add selected class to clicked method
                method.classList.add('selected');
                
                // Update receipt with selected method
                const methodName = method.querySelector('h4').textContent;
                receiptMethod.textContent = methodName;
                
                // Show payment receipt preview
                paymentReceipt.style.display = 'block';
            });
        });

        // Submit clearance functionality
        submitClearance.addEventListener('click', () => {
            if (!confirmPayment.checked || !confirmReceipt.checked || !agreeTerms.checked) {
                alert('Please confirm all requirements before submitting your clearance request.');
                return;
            }
            
            // Check if payment method is selected
            const selectedMethod = document.querySelector('.payment-method.selected');
            if (!selectedMethod) {
                alert('Please select a payment method.');
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
                    <p>Your finance clearance has been approved! You can now proceed with other departmental clearances.</p>
                `;
                
                // Show success message
                alert('Finance clearance submitted successfully! Your request will be processed within 24 hours.');
                
                // Reset button
                submitClearance.disabled = false;
                submitClearance.innerHTML = 'Clearance Submitted';
            }, 2000);
        });

        // Pay fees functionality
        payFees.addEventListener('click', () => {
            const selectedMethod = document.querySelector('.payment-method.selected');
            if (!selectedMethod) {
                alert('Please select a payment method first.');
                return;
            }
            
            const methodName = selectedMethod.querySelector('h4').textContent;
            alert(`Redirecting to ${methodName} payment portal...\n\nAmount to pay: 1,700 ETB`);
        });

        // Upload receipt functionality
        uploadReceipt.addEventListener('click', () => {
            // Simulate file upload
            alert('Please select your payment receipt file (PDF, JPG, or PNG).');
            
            // After "upload", enable the confirmation checkbox
            setTimeout(() => {
                confirmReceipt.checked = true;
                alert('Receipt uploaded successfully!');
            }, 1000);
        });

        // Form validation
        [confirmPayment, confirmReceipt, agreeTerms].forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (confirmPayment.checked && confirmReceipt.checked && agreeTerms.checked) {
                    submitClearance.disabled = false;
                } else {
                    submitClearance.disabled = true;
                }
            });
        });
    </script>
</body>
</html>