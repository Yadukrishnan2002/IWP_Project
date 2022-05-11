<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="Style5(Candidate_Home_page2).css" rel="stylesheet" />

</head>
<body>
<div class="v4_16">
<header>
	<img class =  "logo" src="logo.jpg" style="width:65px;height:24px;"alt="">
    <nav>
		<ul class = "nav_links">
			<li><a href = "candidate_Home_page.php">Home</a></li>
            <li><a href = "#">Chats</a></li>
			<li><a href = "#">Notifications</a></li>
			<li><button class="dropbtn" onclick="myFunction()">My Profile<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content" id="myDropdown">
			<a href="candidate_profile.php">My profile</a>
			<a href="#">Saved</a>
			<a href="#">Applied jobs</a>
			<a href="index.php">Logout</a>
			</div></li>
        </ul>
    </nav>
</header>
</div>


    <div class="company-follow-card">
        <div class="company-list">
            <div class="company1">
                <div class="profile-img1">
                    <img src="v9_105.png" width = "25 " height = " 25" alt="">
                </div>
                <div class="company-name1">
                    Google
                </div>
                <div class="follow1">
                    <button>follow</button>
                </div>

            </div>
            

            <br>

            <div class="company1">
                <div class="profile-img1">
                    <img src="v9_105.png" width = "25 " height = " 25" alt="">
                </div>
                <div class="company-name1">
                    Google
                </div>
                <div class="follow1">
                    <button>follow</button>
                </div>

            </div>
            

            <br>

            <div class="company1">
                <div class="profile-img1">
                    <img src="v9_105.png" width = "25 " height = " 25" alt="">
                </div>
                <div class="company-name1">
                    Google
                </div>
                <div class="follow1">
                    <button>follow</button>
                </div>

            </div>
            

            <br>

            <div class="company1">
                <div class="profile-img1">
                    <img src="v9_105.png" width = "25 " height = " 25" alt="">
                </div>
                <div class="company-name1">
                    Google
                </div>
                <div class="follow1">
                    <button>follow</button>
                </div>

            </div>
            

            <br>






        </div>
        
        
    </div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
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