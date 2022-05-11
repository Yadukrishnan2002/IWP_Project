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
                <li><a href = "candidate_SignUp_page.php">For Employees</a></li>
                <li><a href = "Company_SignUp_Page.php">For Employers</a></li>
            </ul>
        </nav>
    

    </header>

    <div class="login-box">
        
        <form action="verify_company_login.php" method = "POST">
            <div class="login-box-input">
                <label for="email"><b>Email</b></label>
                <br>
                <input type="text" name = "cuname">
                <br>
                <label for="password"><b>Password</b></label>
                <br>
                <input type="password" name = "cpwd">
                <br>
                
            </div>
            <input type="submit" value = "Login">
            
        </form>
            
        <div class="post-jobs">
            <a href="index.php"><button>Search Jobs</button></a>

        </div>

    </div>


    
</body>
</html>