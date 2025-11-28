<?php

require "./DbConn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Injibara University - Clearance Portal Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="./Users.css">
</head>
<body>
 

    <!-- Header -->
    <header>
          <div class="logo">
                   <div class="logo-text" >
                    <img src="../Images/logInjibara.jpg" alt="INU"><br> INU                   
                    <span> Graduated students Clearance</span></div>
            </div>
        <div class="container header-container">
          
            <nav>
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">☰</div>
        </div>
    </header>
    <br><br><br>

    <!-- Login Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <div class="login-info">
                    <h2>Welcome to IU Clearance Portal</h2>
                    <p>Access your clearance dashboard to track your graduation process and complete all necessary requirements.</p>
                    
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> Track your clearance status in real-time</li>
                        <li><i class="fas fa-check"></i> Submit required documents online</li>
                        <li><i class="fas fa-check"></i> Receive notifications for pending items</li>
                        <li><i class="fas fa-check"></i> Access your clearance certificate upon completion</li>
                    </ul>
                    
                    <div style="margin-top: 30px;">
                        <p><strong>Need help with login?</strong></p>
                        <p>Contact the ICT Help Desk: <br>+251 92830854 or ITGOne@injibarauniversity.edu.et</p>
                    </div>
                </div>
                
                <div class="login-form-container">
                    <div class="login-header">
                        <h2>Student Login</h2>
                        <p>Enter your credentials to access your account</p>
                    </div> 
                    <form id="loginForm" action="./FogotPassword.php" method="post">
                        <div class="form-group">
                            <label for="username">Student ID</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" class="form-control" placeholder="Enter your student ID " required>
                            </div>
                             <label for="username">Student Name</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" class="form-control" placeholder="Enter your Name " required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" name="login">login</button>
                             <div class="form-options">
                            </div>
                            <a href="./FogotPassword.php" class="forgot-password" name="forgot">Forgot Password?</a>                       </div>                                                      
                        
                    </div>
                 </form>
                        </div>
                        
                                    
                    <div class="register-link">
                        <p><a href="./index.html" style="color: red;background-color: blueviolet;">Back to Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
           
                   
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>Injibara University</li>
                        <li>P.O. Box 40, Injibara</li>
                        <li>Ethiopia</li>
                        <li>Email: clearance@injibarauniversity.edu.et</li>
                        <li>Phone: +251934647</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 IT G1 3rd Year Injibara university . All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="./Users.js">
       
    </script>
</body>
</html>