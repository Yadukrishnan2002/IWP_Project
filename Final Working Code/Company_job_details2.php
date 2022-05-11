<?php


        session_start();


        $ino = $_GET['id'];
        echo $ino;
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

             


              $_SESSION['ppl_req'] = $data['ppl_req'];
              
          }
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
<link href="main5.css" rel="stylesheet" />
<title>Document</title>
</head>
<body>
<div class="v66_68">
<div class="v66_69">
<header>
	<img class =  "logo" src="logo.jpg" style="width:65px;height:24px;"alt="">
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
</div>

<span class="v66_77"><?php echo $data['cnam'] ?></span>
<div class="v66_96"></div>
<span class="v66_79"><?php echo $data['jo_tit'] ?></span>
<span class="v66_80">Job title:</span>
<span class="v66_81">location:</span>
<span class="v66_82"><?php echo $data['job_loc'] ?></span>
<span class="v66_83">Pay scale: </span>
<span class="v66_84"><?php echo $data['salary_start']."k - ".$data['salary_end']."k  $" ?></span>
<span class="v66_85">/annum</span>
<span class="v66_86">Job Description:</span>
<span class="v66_87"><?php echo $data['job_desc'] ?></span>
<span class="v66_88">Eligibility:</span>
<span class="v66_89"><?php echo $data['elig'] ?></span>
<span class="v66_90">Responsibilities:</span>
<span class="v66_91"><?php echo $data['resp'] ?></span>
<span class="v66_98">Post created on:  15-4-22</span>
<span class="v66_99">Total number of Applicants</span>
<span class="v66_101">Total number of profiles reached</span>
<span class="v66_100">8.1 k</span>
<span class="v66_103">146 k</span>
<div class="v66_104"></div>
<span class="v66_105"><a href="Loading_Selected_candidates.php?id=<?php echo $ino ?>">View Selected Candidates</a></span>
</div>
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
</body></html>
