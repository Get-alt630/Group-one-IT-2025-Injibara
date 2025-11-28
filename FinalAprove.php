<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Approval & Certificate - Injibara University</title>
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
            --gold: #ffd700;
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
        
        .btn-success {
            background-color: var(--success);
            color: white;
        }
        
        .btn-gold {
            background-color: var(--gold);
            color: var(--dark);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .final-approval {
            padding: 40px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary);
        }
        
        .approval-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .approval-status, .certificate-preview {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .status-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .status-item:last-child {
            border-bottom: none;
        }
        
        .status-item h3 {
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .status-item p {
            margin-bottom: 5px;
        }
        
        .progress-container {
            margin-top: 20px;
        }
        
        .progress-bar {
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        
        .progress-fill {
            height: 100%;
            background-color: var(--success);
            width: 83%; /* 5 out of 6 departments approved */
            transition: width 0.5s ease;
        }
        
        .progress-text {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .department-status {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 5px;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .department-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .status-approved {
            background-color: var(--success);
        }
        
        .status-pending {
            background-color: var(--warning);
        }
        
        .status-rejected {
            background-color: var(--danger);
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .btn-lg {
            padding: 12px 25px;
            font-size: 1.1rem;
        }
        
        .certificate {
            background: white;
            border: 20px solid #d4af37;
            padding: 40px;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            min-height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .certificate::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            border: 2px solid #d4af37;
            pointer-events: none;
        }
        
        .certificate-header {
            margin-bottom: 30px;
        }
        
        .university-seal {
            width: 120px;
            height: 120px;
            border: 3px solid var(--primary);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--primary);
            background: white;
        }
        
        .certificate-title {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .certificate-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
        }
        
        .certificate-body {
            margin-bottom: 40px;
        }
        
        .student-name {
            font-size: 2.8rem;
            color: var(--dark);
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .certificate-text {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .certificate-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
            text-align: left;
        }
        
        .detail-item {
            margin-bottom: 10px;
        }
        
        .detail-label {
            font-weight: bold;
            color: var(--primary);
        }
        
        .certificate-footer {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }
        
        .signature {
            text-align: center;
        }
        
        .signature-line {
            width: 200px;
            height: 1px;
            background: #333;
            margin: 40px auto 10px;
        }
        
        .signature-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .signature-title {
            font-size: 0.9rem;
            color: #666;
        }
        
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 120px;
            color: rgba(0,0,0,0.03);
            pointer-events: none;
            z-index: 0;
            font-weight: bold;
        }
        
        .final-actions {
            text-align: center;
            margin-top: 40px;
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
        
        @media (max-width: 968px) {
            .approval-container {
                grid-template-columns: 1fr;
            }
            
            .certificate-footer {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .certificate-details {
                grid-template-columns: 1fr;
            }
        }
        
        /* Print styles */
        @media print {
            header, footer, .action-buttons, .approval-status {
                display: none;
            }
            
            .certificate-preview {
                box-shadow: none;
                padding: 0;
            }
            
            .certificate {
                border: none;
                box-shadow: none;
                padding: 20px;
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
                        <p>Final Approval & Certificate</p>
                    </div>
                </div>
                <div class="auth-buttons">
                    <button class="btn btn-outline" id="loginBtn">Student Login</button>
                    <button class="btn btn-primary" id="dashboardBtn">Main Dashboard</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Final Approval Section -->
    <section class="final-approval">
        <div class="container">
            <h2 class="section-title">Final Graduation Clearance & Certificate</h2>
            
            <div class="approval-container">
                <!-- Approval Status Section -->
                <div class="approval-status">
                    <h2 style="color: var(--primary); margin-bottom: 20px;">Final Clearance Status</h2>
                    
                    <div class="status-item">
                        <h3><i class="fas fa-user-graduate"></i> Student Information</h3>
                        <p><strong>Full Name:</strong> Abebe Kebede</p>
                        <p><strong>Student ID:</strong> IU/2019/1234</p>
                        <p><strong>Department:</strong> Computer Science</p>
                        <p><strong>Program:</strong> Bachelor of Science</p>
                        <p><strong>CGPA:</strong> 3.75</p>
                        <p><strong>Graduation Date:</strong> June 15, 2023</p>
                    </div>
                    
                    <div class="status-item">
                        <h3><i class="fas fa-tasks"></i> Clearance Progress</h3>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill"></div>
                            </div>
                            <div class="progress-text">
                                <span>5 of 6 Departments Approved</span>
                                <span>83% Complete</span>
                            </div>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-approved"></div>
                                <span>Registrar's Office</span>
                            </div>
                            <span class="status-text">Approved</span>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-approved"></div>
                                <span>Library</span>
                            </div>
                            <span class="status-text">Approved</span>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-pending"></div>
                                <span>Finance Office</span>
                            </div>
                            <span class="status-text">Pending</span>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-approved"></div>
                                <span>Department Chair</span>
                            </div>
                            <span class="status-text">Approved</span>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-approved"></div>
                                <span>Student Affairs</span>
                            </div>
                            <span class="status-text">Approved</span>
                        </div>
                        
                        <div class="department-status">
                            <div class="department-info">
                                <div class="status-indicator status-approved"></div>
                                <span>ICT Center</span>
                            </div>
                            <span class="status-text">Approved</span>
                        </div>
                    </div>
                    
                    <div class="status-item">
                        <h3><i class="fas fa-clipboard-check"></i> Final Approval</h3>
                        <p>Once all departments have approved your clearance, you can request final approval from the University Registrar.</p>
                        <p><strong>Current Status:</strong> <span style="color: var(--warning);">Pending Final Approval</span></p>
                        <p><strong>Estimated Completion:</strong> 2-3 business days after all clearances are complete</p>
                    </div>
                    
                    <div class="action-buttons">
                        <button class="btn btn-success btn-lg" id="requestApproval">
                            <i class="fas fa-paper-plane"></i> Request Final Approval
                        </button>
                        <button class="btn btn-primary" id="checkStatus">
                            <i class="fas fa-sync-alt"></i> Refresh Status
                        </button>
                    </div>
                </div>
                
                <!-- Certificate Preview Section -->
                <div class="certificate-preview">
                    <h2 style="color: var(--primary); margin-bottom: 20px; text-align: center;">Graduation Certificate Preview</h2>
                    
                    <div class="certificate">
                        <div class="watermark">INJIBARA UNIVERSITY</div>
                        
                        <div class="certificate-header">
                            <div class="university-seal">
                                <i class="fas fa-university"></i>
                            </div>
                            <h1 class="certificate-title">INJIBARA UNIVERSITY</h1>
                            <p class="certificate-subtitle">Injibara, Awi Zone, Ethiopia</p>
                        </div>
                        
                        <div class="certificate-body">
                            <h2 class="student-name">ABEBE KEBEDE</h2>
                            
                            <p class="certificate-text">
                                Has successfully completed all the requirements prescribed by the University and is hereby awarded the degree of
                            </p>
                            
                            <h3 style="color: var(--primary); font-size: 1.5rem; margin: 20px 0;">
                                BACHELOR OF SCIENCE IN COMPUTER SCIENCE
                            </h3>
                            
                            <p class="certificate-text">
                                with all the rights, privileges, and honors appertaining thereto.
                            </p>
                            
                            <div class="certificate-details">
                                <div class="detail-item">
                                    <span class="detail-label">Cumulative GPA:</span> 3.75 / 4.00
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Honors:</span> Magna Cum Laude
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Date of Award:</span> June 15, 2023
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Student ID:</span> IU/2019/1234
                                </div>
                            </div>
                        </div>
                        
                        <div class="certificate-footer">
                            <div class="signature">
                                <div class="signature-line"></div>
                                <div class="signature-name">Dr. Alemayehu Teklu</div>
                                <div class="signature-title">University President</div>
                            </div>
                            
                            <div class="signature">
                                <div class="signature-line"></div>
                                <div class="signature-name">Dr. Selamawit Gebre</div>
                                <div class="signature-title">Registrar</div>
                            </div>
                            
                            <div class="signature">
                                <div class="signature-line"></div>
                                <div class="signature-name">Dr. Michael Asrat</div>
                                <div class="signature-title">Dean, Faculty of Computing</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="final-actions">
                        <button class="btn btn-gold btn-lg" id="downloadCertificate">
                            <i class="fas fa-download"></i> Download Certificate
                        </button>
                        <button class="btn btn-primary" id="printCertificate">
                            <i class="fas fa-print"></i> Print Certificate
                        </button>
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
                    <h3>Injibara University</h3>
                    <p>Committed to excellence in education, research, and community service.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Injibara, Awi Zone, Ethiopia</p>
                    <p><i class="fas fa-phone"></i> +251 XXX XXX XXX</p>
                    <p><i class="fas fa-envelope"></i> registrar@injibarauniversity.edu.et</p>
                </div>
                <div class="footer-section">
                    <h3>Graduation Office</h3>
                    <p>Monday-Friday: 8:30 AM - 4:30 PM</p>
                    <p>Email: graduation@injibarauniversity.edu.et</p>
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
        const requestApproval = document.getElementById('requestApproval');
        const checkStatus = document.getElementById('checkStatus');
        const downloadCertificate = document.getElementById('downloadCertificate');
        const printCertificate = document.getElementById('printCertificate');

        // Login button functionality
        loginBtn.addEventListener('click', () => {
            alert('Redirecting to student login page...');
        });

        // Dashboard button functionality
        dashboardBtn.addEventListener('click', () => {
            alert('Redirecting to main dashboard...');
        });

        // Request final approval functionality
        requestApproval.addEventListener('click', () => {
            // Check if all departments are approved
            const pendingItems = document.querySelectorAll('.status-pending');
            if (pendingItems.length > 0) {
                alert('You cannot request final approval until all departments have cleared you. Please complete the pending clearances first.');
                return;
            }
            
            // Simulate approval request
            requestApproval.disabled = true;
            requestApproval.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Requesting Approval...';
            
            setTimeout(() => {
                alert('Final approval request submitted successfully! The Registrar will review your application within 2-3 business days.');
                requestApproval.innerHTML = '<i class="fas fa-check"></i> Approval Requested';
                
                // Update status
                const statusItem = document.querySelector('.status-item:nth-child(3) p:nth-child(2)');
                statusItem.innerHTML = '<strong>Current Status:</strong> <span style="color: var(--success);">Under Review</span>';
            }, 2000);
        });

        // Check status functionality
        checkStatus.addEventListener('click', () => {
            // Simulate status check
            checkStatus.disabled = true;
            checkStatus.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking...';
            
            setTimeout(() => {
                alert('Status refreshed! No new updates at this time.');
                checkStatus.disabled = false;
                checkStatus.innerHTML = '<i class="fas fa-sync-alt"></i> Refresh Status';
            }, 1500);
        });

        // Download certificate functionality
        downloadCertificate.addEventListener('click', () => {
            // Check if approved
            const pendingItems = document.querySelectorAll('.status-pending');
            if (pendingItems.length > 0) {
                alert('Your certificate is not yet available. Please complete all clearance requirements first.');
                return;
            }
            
            // Simulate download
            downloadCertificate.disabled = true;
            downloadCertificate.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Downloading...';
            
            setTimeout(() => {
                alert('Certificate downloaded successfully!');
                downloadCertificate.disabled = false;
                downloadCertificate.innerHTML = '<i class="fas fa-download"></i> Download Certificate';
                
                // In a real application, this would trigger a file download
            }, 2000);
        });

        // Print certificate functionality
        printCertificate.addEventListener('click', () => {
            // Check if approved
            const pendingItems = document.querySelectorAll('.status-pending');
            if (pendingItems.length > 0) {
                alert('Your certificate is not yet available. Please complete all clearance requirements first.');
                return;
            }
            
            // Print the certificate
            window.print();
        });

        // Simulate automatic approval after all departments are cleared
        function simulateAutoApproval() {
            const pendingItems = document.querySelectorAll('.status-pending');
            if (pendingItems.length === 0) {
                // Update progress bar to 100%
                document.querySelector('.progress-fill').style.width = '100%';
                document.querySelector('.progress-text span:last-child').textContent = '100% Complete';
                
                // Update final approval status
                const statusItem = document.querySelector('.status-item:nth-child(3) p:nth-child(2)');
                statusItem.innerHTML = '<strong>Current Status:</strong> <span style="color: var(--success);">Ready for Final Approval</span>';
                
                // Enable request approval button
                requestApproval.disabled = false;
            }
        }

        // For demo purposes, let's assume finance office clearance is completed
        setTimeout(() => {
            const financeStatus = document.querySelector('.department-status:nth-child(3) .status-indicator');
            const financeText = document.querySelector('.department-status:nth-child(3) .status-text');
            
            financeStatus.className = 'status-indicator status-approved';
            financeText.textContent = 'Approved';
            
            simulateAutoApproval();
        }, 3000);
    </script>
</body>
</html>