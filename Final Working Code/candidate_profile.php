<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
<link href="main3.css" rel="stylesheet" />
<title>Document</title>

<?php
session_start();
  $username = $_SESSION["CandUsername"];
  $conn = new mysqli("localhost","root","","project_1");


    if($conn->connect_error)
    {

        die("connection failed");

    }

    else
    {


        $stmt = $conn->prepare("select * from employee where eunam = ?");

        $stmt->bind_param("s",$username);


        $stmt->execute();


        $stmt_result = $stmt->get_result();

        $data = $stmt_result->fetch_assoc();


        $ResumeName = $data['resume_name'];







    }

?>

</head>
<body>
<div class="v19_498">
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
			<a href="applied_jobs.php">Applied jobs</a>
			<a href="index.php">Logout</a>
			</div></li>
        </ul>
    </nav>
</header>
</div>
<div class="v19_524"></div>
<span class="v19_527">Personal details</span>
<span class="v23_7">Resume</span>
  <div>
    

     <a href="Resumes/<?php echo $ResumeName ?>">Download Resume</a>

  </div>

  <div>
    <a href = "desktop12.html"><button>Edit details</button></a>
  </div>
<span class="v23_9">Social Media handles</span>
<span class="v23_10">Education Qualification</span>


<span class="v23_8">Video Introduction</span>
<span class="v19_528">Name: </span>
<span class="v23_5">Email id: </span>
<span class="v23_11">Phone no: </span>
<span class="v23_2">Age:</span>
<span class="v23_4">yrs</span>
<span class="v19_529"><?php echo $data['enam'] ?></span>
<span class="v23_12"></span>
<span class="v23_6"><?php echo $data['email_id'] ?></span>
<span class="v23_3"><?php  echo $data['age'] ?></span>
<div class="v55_38"></div>
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