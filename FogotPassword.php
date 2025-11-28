<?php

require "./DbConn.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot-password</title>

    <link rel="stylesheet" href="./Users.css">

    <style>
       form input{
            width: 1%;
        }
    </style>
</head>
<body >
      <div class="container " style="margin-left: 2%;">
            <div class="logo">
        
                <div class="logo-text" ><img src="../Images/logInjibara.jpg" alt="INU"> <br>
                INU  <span> Graduated students Clearance</span></div>
            </div><br>

                <div class="login-form-container" style="margin-left: 6%;">
                    <div class="login-header">
                        <h2>Forgot password page</h2>
                        <p>Enter your credentials to access your account</p>
                    </div>
                    
                    <form id="loginForm" action="forgotPassword.php">
                        <div class="form-group">
                             <label for="username">Student Name</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" class="form-control" placeholder="Enter your student Name" required>
                            </div>
                            <label for="username">Student ID</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" class="form-control" placeholder="Enter your student ID " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">college</label>
                            <div class="input-with-icon">
                                <i class="fas fa-book"></i>
                                <input type="password" id="dept" class="form-control" placeholder="Enter your college" required>
                            </div>
                    <label for="username">departement</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" class="form-control" placeholder="Enter your student Dept " required>
                            </div>
                          <button type="button" style="width: fit-content;color:blueviolet;padding:12px;font-size:55px;"> Submit</button>
                        </div>                             
                            <button>

                        
                        
                      
                
                        </div><br><br>
    


         
</body>
</html><?php

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
        <div class="container header-container">
            <div class="logo">
        
                <div class="logo-text" ><img src="../Images/logInjibara.jpg" alt="INU"><br> INU 
                    
                    <span> Graduated students Clearance</span></div>
            </div>
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
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>INU Clearance Portal</h3>
                    <p>Streamlining the graduation clearance process for Injibara University students.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
               
                </div>
                <div class="footer-col">
                   
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