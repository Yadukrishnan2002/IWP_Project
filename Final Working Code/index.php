<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel = "stylesheet" type= "text/css" href = "style1(index).css">
</head>
<body>

    <header>
    <img class =  "logo" src="logo.jpg" style="width:65px;height:40px;" alt="">

        <nav>
            <ul class = "nav_links">
                <li><a href = "emp_signup2.php">For Employees</a></li>
                <li><a href = "Company_SignUp_Page.php">For Employers</a></li>
            </ul>
        </nav>
    

    </header>

    <div class="login-box">
        
        <form action="verify_emp_login.php" method = "POST">
            <div class="login-box-input">
                <label for="email"><b>Email</b></label>
                <br>
                <input type="text" name = "eunam">
                <br>
                <label for="password"><b>Password</b></label>
                <br>
                <input type="password" name = "epwd">
                <br>
                
            </div>
            <input type="submit" value = "Login">
            
        </form>
        <!-- <div class="join-button-cont">
            <a class = "join-button" href = "candidate_SignUp_page.php"><Button >Join Webname</Button></a>

        </div> -->
        
        
            
        

        <div class="post-jobs">
            <a href="Company_Login_page.php"><button>Post Jobs</button></a>

        </div>

    </div>


    
</body>
</html>