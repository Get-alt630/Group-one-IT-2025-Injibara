<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Injibara University - Department Clearance Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./Users.css">
</head>
<body>
    <!-- Header -->
    <header>
         <div class="logo">
                <div class="logo-text" ><img src="../Images/logInjibara.jpg" alt="INU"> <br>INU 
                    <span> Graduated students Clearance</span></div>
            </div>
        <div class="container header-contents">
            <div class="logo">
                <i class="fas fa-university"></i>
                <div class="logo-text">
                    <h1>Injibara University</h1>
                    <p>Department Clearance Submission Portal</p>
                </div>
            </div>
            <div class="user-info">
                <div class="user-avatar">AS</div>
                <div class="user-details">
                    <div class="user-name">Abebe Sileshi</div>
                    <div class="user-id">IU/CS/1234/14</div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Navigation -->
    <nav>
        <div class="container">
            <ul class="nav-links">
                <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-file-upload"></i> Submit Clearance</a></li>
                <li><a href="#"><i class="fas fa-tasks"></i> Status Tracking</a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> Documents</a></li>
                <li><a href="#faq"><i class="fas fa-question-circle"></i> FAQ</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="container">
        <!-- Dashboard -->
        <section class="dashboard">
            <div class="dashboard-header">
                <h2>Department Clearance Submission</h2>
                <p>Submit your graduation clearance request to your department office</p>
            </div>
            
            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-icon primary">
                        <i class="fas fa-file-upload"></i>
                    </div>
                    <h3>Submit Request</h3>
                    <p>Upload required documents for department clearance</p>
                </div>
                
                <div class="card">
                    <div class="card-icon success">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Check Status</h3>
                    <p>Track your clearance request progress</p>
                </div>
                
                <div class="card">
                    <div class="card-icon warning">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Pending Items</h3>
                    <p>View outstanding requirements</p>
                </div>
                
                <div class="card">
                    <div class="card-icon accent">
                        <i class="fas fa-download"></i>
                    </div>
                    <h3>Download Forms</h3>
                    <p>Access clearance forms and templates</p>
                </div>
            </div>
            
            <!-- Submission Section -->
            <div class="submission-section">
                <h3><i class="fas fa-file-upload"></i> Submit Clearance Request</h3>
                
                <form id="clearanceForm">
                    <div class="form-group">
                        <label for="department">Select Department</label>
                        <select class="form-control" id="department" required>
                            <option value="">-- Select Department --</option>
                            <option value="cs">Computer Science</option>
                            <option value="eng">Engineering</option>
                            <option value="bus">Business</option>
                            <option value="law">Law</option>
                            <option value="med">Medicine</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="clearanceType">Clearance Type</label>
                        <select class="form-control" id="clearanceType" required>
                            <option value="">-- Select Clearance Type --</option>
                            <option value="graduation">Graduation Clearance</option>
                            <option value="transfer">Department Transfer</option>
                            <option value="withdrawal">Withdrawal Clearance</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="comments">Additional Comments</label>
                        <textarea class="form-control" id="comments" rows="4" placeholder="Add any additional information or comments..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Upload Required Documents</label>
                        <div class="file-upload" id="fileUploadArea">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Click to upload or drag and drop</p>
                            <p class="small">PDF, JPG, PNG files (Max. 10MB each)</p>
                            <input type="file" id="fileInput" multiple style="display: none;">
                        </div>
                        <div class="file-list" id="fileList"></div>
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block">
                        <i class="fas fa-paper-plane"></i> Submit Clearance Request
                    </button>
                </form>
            </div>
            
            <!-- Status Section -->
            <div class="status-section">
                <h3><i class="fas fa-tasks"></i> Request Status</h3>
                
                <div class="status-item">
                    <div class="status-info">
                        <div class="status-icon approved">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="status-details">
                            <h4>Library Department</h4>
                            <p>Clearance approved - No outstanding items</p>
                        </div>
                    </div>
                    <div class="status-date">May 15, 2023</div>
                </div>
                
                <div class="status-item">
                    <div class="status-info">
                        <div class="status-icon pending">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="status-details">
                            <h4>Finance Office</h4>
                            <p>Under review - Expected completion in 2 days</p>
                        </div>
                    </div>
                    <div class="status-date">May 18, 2023</div>
                </div>
                
                <div class="status-item">
                    <div class="status-info">
                        <div class="status-icon rejected">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="status-details">
                            <h4>Department of Computer Science</h4>
                            <p>Returned for correction - Missing project documentation</p>
                        </div>
                    </div>
                    <div class="status-date">May 12, 2023</div>
                </div>
                
                <div class="status-item">
                    <div class="status-info">
                        <div class="status-icon pending">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="status-details">
                            <h4>Student Affairs</h4>
                            <p>Awaiting submission</p>
                        </div>
                    </div>
                    <div class="status-date">Not submitted</div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="faq" id="faq">
            <div class="container faq-container">
                <h2>Frequently Asked Questions</h2>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What documents do I need for department clearance?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You will need your student ID card, completed clearance form (available for download in the Documents section), academic transcript, and any department-specific requirements. Some departments may require project documentation, lab equipment returns, or other specialized items.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does the department clearance process take?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The department clearance typically takes 3-5 working days after submission. However, complex cases or missing documentation may extend this timeframe. You can track the status of your request in real-time through this portal.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What should I do if my request is rejected?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>If your request is rejected, you will receive specific feedback on what needs to be corrected or added. Make the necessary adjustments and resubmit your request. For complex issues, you may need to visit the department office in person.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I submit clearance for multiple departments at once?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, you need to submit separate clearance requests for each department. However, you can track all your submissions from the Status Tracking section of this portal.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What if I need to make changes after submission?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>If your request is still pending review, you may be able to withdraw it and resubmit with corrections. Once under review or approved, you'll need to contact the department office directly to request changes.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Injibara University</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Contact Information</a></li>
                        <li><a href="#">Campus Map</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Student Resources</h3>
                    <ul>
                        <li><a href="#">Student Portal</a></li>
                        <li><a href="#">Library Services</a></li>
                        <li><a href="#">Career Services</a></li>
                        <li><a href="#">IT Support</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Help & Support</h3>
                    <ul>
                        <li><a href="#">Clearance Guidelines</a></li>
                        <li><a href="#">Document Requirements</a></li>
                        <li><a href="#">Technical Support</a></li>
                        <li><a href="#">Contact Department</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Injibara, Ethiopia</li>
                        <li><i class="fas fa-phone"></i> +251-XXX-XXXXXX</li>
                        <li><i class="fas fa-envelope"></i> clearance@injibara.edu.et</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Injibara University. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ functionality
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                    
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                });
            });
            
            // File upload functionality
            const fileUploadArea = document.getElementById('fileUploadArea');
            const fileInput = document.getElementById('fileInput');
            const fileList = document.getElementById('fileList');
            
            fileUploadArea.addEventListener('click', () => {
                fileInput.click();
            });
            
            fileUploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                fileUploadArea.style.borderColor = 'var(--primary)';
                fileUploadArea.style.backgroundColor = 'rgba(26, 77, 143, 0.05)';
            });
            
            fileUploadArea.addEventListener('dragleave', () => {
                fileUploadArea.style.borderColor = '#ddd';
                fileUploadArea.style.backgroundColor = 'transparent';
            });
            
            fileUploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                fileUploadArea.style.borderColor = '#ddd';
                fileUploadArea.style.backgroundColor = 'transparent';
                
                if (e.dataTransfer.files.length > 0) {
                    handleFiles(e.dataTransfer.files);
                }
            });
            
            fileInput.addEventListener('change', () => {
                if (fileInput.files.length > 0) {
                    handleFiles(fileInput.files);
                }
            });
            
            function handleFiles(files) {
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const fileItem = document.createElement('div');
                    fileItem.className = 'file-item';
                    
                    fileItem.innerHTML = `
                        <div class="file-name">
                            <i class="fas fa-file-pdf" style="color: #e63946;"></i>
                            <span>${file.name}</span>
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger" style="padding: 5px 10px; font-size: 0.8rem;">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    `;
                    
                    fileList.appendChild(fileItem);
                    
                    // Add remove functionality
                    const removeBtn = fileItem.querySelector('button');
                    removeBtn.addEventListener('click', () => {
                        fileList.removeChild(fileItem);
                    });
                }
            }
            
            // Form submission
            const clearanceForm = document.getElementById('clearanceForm');
            
            clearanceForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Simple validation
                const department = document.getElementById('department').value;
                const clearanceType = document.getElementById('clearanceType').value;
                
                if (!department || !clearanceType) {
                    alert('Please fill in all required fields');
                    return;
                }
                
                // In a real application, you would send the data to a server
                alert('Clearance request submitted successfully! You can track the status in the Status Tracking section.');
                clearanceForm.reset();
                fileList.innerHTML = '';
            });
        });
    </script>
</body>
</html>