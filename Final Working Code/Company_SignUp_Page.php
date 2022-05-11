<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel = "stylesheet" type= "text/css" href = "style3 ( Company_SignUp_Page).css">
</head>
<body>

    <header>
    <img class =  "logo" src="logo.jpg" style="width:65px;height:40px;" alt="">
        <nav>
            <ul class = "nav_links">
                <li><a href = "candidate_SignUp_page.php">For Employees</a></li>
                <li><a href = "Company_SignUp_Page.php">For Employers</a></li>
            </ul>
        </nav>
    

    </header>

    <div class="login-box">
        
        <form action="add_company_signUp.php" method = "POST">
            <div class="login-box-input">

                <div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">First Name</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">Last Name</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name = "firstname">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <input  type="text" name = "lastname">
                        <br>

                    </span>
                    

                </div>

                <div class="single-row1">
                    <span class = "single-column1">
                        <label for="Company Name">Company Name</label>
                        <br>

                    </span>
                    <span class = "single-column1">
                        <label for="Head Office Location">Head office location</label>
                        <br>
                    </span>
                </div>

                <div class="single-row2">
                    <span class = "single-column2">
                        <input type="text" name = "cnam">
                        <br>
                    </span>
                    <span class = "single-column2">
                        <input  type="text" name = "head_office">
                        <br>

                    </span>

                </div>
                
                
                   

                
                <div class="email-input">
                    <label for="email">Email</label>
                    <br>
                    <input type="text" name = "cunam">
                    <br>

                </div>

                <div class="password-input">
                    <div class = "password-input-label">
                        <span class = "password-input-label-first">
                            <label for="password">Password</label>
                            <br>
                        </span>

                        <span class = " password-input-label-first">
                            <label for="confirm-password">Confirm Password</label>
                            <br>
                        </span>
                        
                        

                    </div>

                    <div class = "password-input-field">
                        <span class = "password-input-field-first">
                            <input type="password" name = "cpwd">
                            <br>

                        </span>
                        
                        <span class = "password-input-field-first">
                            <input type="password" name = "confirm-password">
                            <br>

                        </span>
                        
                    </div>
                   
                    

                </div>
                
                
                
            </div>

            <input class = "submit-button" type="submit" value = "Sign Up">
            
        </form>
            
        

    </div>


    
</body>
</html>