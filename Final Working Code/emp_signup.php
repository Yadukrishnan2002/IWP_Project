<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel = "stylesheet" type= "text/css" href = "Style2 ( candidate_SignUp_Page).css">
</head>
<body>

    <header>
        <img class =  "logo" src="logo.jpg" style="width:40px;height:24px;"alt="">
        <nav>
            <ul class = "nav_links">
                <li><a href = "candidate_SignUp_page.html">For Employees</a></li>
                <li><a href = "Company_SignUp_page.html">For Employers</a></li>
            </ul>
        </nav>
    

    </header>

    <div class="login-box"style="width: 1200px;
    height: 800px;">
        
        <form action="add_emp_det.php" method="POST">	
            <div class="login-box-input">

                <div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">Employee Username :</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">Employee password :</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name = "">
                        <br>

                    </span>
                    
<div class="password-input">
                    <div class = "password-input-label">
                        <span class = "password-input-label-first">
                            <label for="password"><b>Password</b></label>
                            <br>
                        </span>
                    </div>

                </div>

                    
                </div>
				
				<div class="email-input">
                    <label for="email"><b>Employee Name :</b></label>
                    <br>
                    <input type="text" name = "email">
                    <br>
                </div>
				
				<div class="name-input-field">
                <span class = "name-input-field-firstname">
                        <input  type="text" name = "lastname">
                        <br>
                    </span>
				</div>
				
				<div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">Age :</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">Email ID :</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name="age" id="age">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <input type="text" name="email_id" id="email_id">
                        <br>

                    </span>
                    

                </div>
				
				<div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">address :</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">College Name : </label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name="address" id="address">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <input type="text" name="collg_nam" id="collg_nam">
                        <br>

                    </span>
                    

                </div>

                </div>
				
				
                   
				<div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">DEGREE</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">DEGREE DURATION</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name="degree" id="degree">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <input type="text" name="deg_dur" id="deg_dur">
                        <br>

                    </span>
                    

                </div>
				<div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">SKILL1</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">SKILL2</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                        <input type="text" name="skill_1" id="skill_1">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <input type="text" name="skill_2" id="skill_2">
                        <br>

                    </span>
                    

                </div>
				<div class="name-input-label">
                    <span class = "name-input-label-firstname">
                        <label for="firstname">SKILL 3</label>
                        <br>
                    </span>
                    
                    <span class = "name-input-label-firstname">
                        <label for="lastname">ACHIEVEMENTS</label>
                        <br>
                    </span>
                    
                </div>

                <div class="name-input-field">
                    <span class = "name-input-field-firstname">
                         <input type="text" name="skill_3" id="skill_3">
                        <br>

                    </span>
                    


                    <span class = "name-input-field-firstname">
                        <textarea name="achv" id="achv" rows="4" cols="50"></textarea>
                        <br>

                    </span>
                    

                </div>

                
                
                
                
                
            </div>

            <input class = "submit-button" type="submit" value = "Sign Up">
            
        </form>
            
        

    </div>


    
</body>
</html>