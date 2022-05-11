<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel = "stylesheet" type= "text/css" href = "Style2 ( candidate_SignUp_Page).css">
</head>
<body>

    <header>
    <img class =  "logo" src="logo.jpg" style="width:65px;height:40px;" alt="">
        <nav>
            <ul class = "nav_links">
                <li><a href = "#">For Employees</a></li>
                <li><a href = "Company_SignUp_Page.php">For Employers</a></li>
            </ul>
        </nav>
    

    </header>

    <div class="login-box">
        
        <form action="candidate_SignUp_details_intoDB.php" method = "POST">
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
                   

                
                <div class="email-input">
                    <label for="email">Email </label>
                    <br>
                    <input type="text" name = "email">
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
                            <input type="password" name = "password">
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