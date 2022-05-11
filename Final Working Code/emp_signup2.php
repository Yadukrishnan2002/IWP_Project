<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website name</title>

    <link rel = "stylesheet" type= "text/css" href = "main6.css">

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

<center>

<form action="add_emp_det.php" method = "POST">




<label style="font-size:24px;">Personal Details</label>
<div>
        <div class="job-card" >
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        username
                    </span>
                    <input type="text" name="eunam" id="eunam">

                </span>
                

                <span class = "single-column1">
                    <span class = "job-title-label">
                        password
                    </span>
                    <input type="text" name="epwd" id="epwd">

                </span>
                

            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        name
                    </span>
                    <input type="text" name="enam" id="enam">

                </span>
                

                
                

            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        Address:
                    </span>
                    <input type="text" name="address" id="address">

                </span>
				<span class = "single-column1">
                    <span class = "job-title-label">
                        Age
                    </span>
                    <input type="text" name="age" id="age">

                </span>
            </div>
			<br>
        </div> 
	</div>
	<br>
	<label style="font-size:24px;align=center;">Educational details</label>
	<div  style="top=630px;">
        <div class="job-card">
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        DEGREE NAME:
                    </span>
                    <input type="text" name="degree" id="degree">

                </span>
                

                <span class = "single-column1">
                    <span class = "job-title-label">
                        COLLEGE NAME : 
                    </span>
                    <input type="text" name="collg_nam" id="collg_nam">
                </span>
                

            </div>
            <br>
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        DEGREE DURATION
                    </span>
                    <input type="text" name="deg_dur" id="deg_dur">
                </span>

                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 1:
                    </span>
					<input type="text" name="skill_1" id="skill_1">
                </span>
            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 2: 
                    </span>
                    <input type="text" name="skill_2" id="skill_2">
                </span>

                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 3:
                    </span>
					<input type="text" name="skill_3" id="skill_3">
                </span>
            </div>
			<br>
        </div>
	</div>
	<label style="font-size:24px;align=center;">Achievements</label>
	<div>
        <div class="job-card" >
                <span class = "single-column1">
                    <span class = "job-title-label">
                       ENTER ACHIEVEMENTS
                    </span>
                    <input type="text" name="achv" id="achv">
                </span>
                <span class = "single-column1">
                    <span class = "job-title-label">
                       Upload Resume
                    </span>
                    <input type="file" name="pdfFile" id="pdfFile">
                </span>
			<br>

            
        </div>
        <br><br>
        <span class = "single-column1">
                    
            <input type="submit" name="" id="" value = "Submit">
        </span>

	</div>

   

</div>





</form>

<center>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>