<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website name</title>

    <link rel = "stylesheet" type= "text/css" href = "./css/main6.css">

</head>
<body>
<header>
	<img class =  "logo" src="logo.jpg" style="width:48px;height:24px;"alt="">
    <nav>
		<ul class = "nav_links">
			<li><a href = "desktop2.html">Home</a></li>
            <li><a href = "#">Chats</a></li>
			<li><a href = "#">Notifications</a></li>
			<li><button class="dropbtn" onclick="myFunction()">My Profile<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content" id="myDropdown">
			<a href="desktop6.html">My profile</a>
			<a href="#">Saved</a>
			<a href="#">Applied jobs</a>
			<a href="index.html">Logout</a>
			</div></li>
        </ul>
    </nav>
</header>
<center>
<label style="font-size:24px;">Personal Details</label>
<div>
        <div class="job-card" >
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        username
                    </span>
                    <input type="text" name="" id="eunam">

                </span>
                

                <span class = "single-column1">
                    <span class = "job-title-label">
                        password
                    </span>
                    <input type="text" name="" id="epwd">

                </span>
                

            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        name
                    </span>
                    <input type="text" name="" id="enam">

                </span>
                

                
                

            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        Address:
                    </span>
                    <input type="text" name="" id="address">

                </span>
				<span class = "single-column1">
                    <span class = "job-title-label">
                        Age
                    </span>
                    <input type="text" name="" id="age">

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
                    <input type="text" name="" id="degree">

                </span>
                

                <span class = "single-column1">
                    <span class = "job-title-label">
                        COLLEGE NAME : 
                    </span>
                    <input type="number" name="" id="collg_nam">
                </span>
                

            </div>
            <br>
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        DEGREE DURATION
                    </span>
                    <input type="text" name="" id="deg_dur">
                </span>

                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 1:
                    </span>
					<input type="text" name="" id="skill_1">
                </span>
            </div>
			<div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 2: 
                    </span>
                    <input type="text" name="" id="skill_2">
                </span>

                <span class = "single-column1">
                    <span class = "job-title-label">
                        SKILL 3:
                    </span>
					<input type="text" name="" id="skill_3">
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
                    <input type="text" name="" id="achv">
                </span>
			<br>

	</div>
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