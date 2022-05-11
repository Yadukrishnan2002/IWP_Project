<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
<link href="main2.css" rel="stylesheet" />
<title>Document</title>
<?php
  session_start();
?>
<?php
  $username = $_SESSION['CandUsername'];

  $ino = $_GET['id'];
  $_SESSION['ino'] = $ino;
  $conn = new mysqli("localhost","root","","project_1");   
    
  

   

  if($conn->connect_error) {
      die("Connection failed"); 
  }
  else
  {
     
        $stmt = $conn->prepare("select * from job_post where ino = ?");
        $stmt->bind_param("i",$ino);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();

  }

?>

</head>
<body>
<div class="v17_204">
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
<span class="v17_317">VIT</span>
<div class="v17_318"></div>
<span class="v17_319"><?php echo $data['jo_tit']  ?></span>
<span class="v17_320">Job title:</span>
<span class="v17_321">location:</span>
<span class="v17_322"><?php echo $data['job_loc'] ?></span>
<span class="v17_323">Pay scale: </span>
<span class="v17_324"><?php echo $data['salary_start']."k-".$data['salary_end']."k  $"  ?></span>
<span class="v17_325">/annum</span>
<span class="v17_326">Job Description:</span>
<span class="v17_327"><?php echo $data['job_desc'] ?></span>
<span class="v17_330">Responsibilities:</span>
<span class="v17_331"><?php echo $data['resp'] ?></span>

<a href = "add_candidateData_to_interview.php"><button  class="button button1" >APPLY NOW</button></a>
<!-- onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" -->

<div id="light" class="white_content">You have applied for the job!<br><p style="font-size:20px">We will notify you when the results are declared</p>
<button class="button button1" href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
<div class="v23_16">
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