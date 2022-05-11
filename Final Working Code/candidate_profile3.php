<!DOCTYPE html><html><head><link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="style7(candidate_profile3).css" rel="stylesheet" />
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
			<a href="candidate_profile3.php">My profile</a>
			<a href="#">Saved</a>
			<a href="applied_jobs.php">Applied jobs</a>
			<a href="index.php">Logout</a>
			</div></li>
        </ul>
    </nav>
</header>
</div>


    <div class="v262_34"></div><span class="v262_35">Personal details</span>
    <span class="v262_36">Resume</span><span class="v262_37">Skills</span>
    <span class="v262_38">Education Qualification</span>
    <span class="v262_39">Name: </span><span class="v262_40">Degree: </span>
    <span class="v262_41">College Name:</span><span class="v262_42">Degree Duration: </span>
    <span class="v262_43">Skill 1: </span>
    <span class="v262_44">Email id: </span>
    <span class="v262_45">Phone no: </span>
    <span class="v262_46">Age:</span><span class="v262_47">yrs</span>
    <span class="v262_48"><?php echo $data['enam'] ?></span><span class="v262_49"><?php  echo $data['degree'] ?><br><br></span>
    <span class="v262_50"><?php  echo $data['collg_nam'] ?></span><span class="v262_51"><?php  echo $data['skill_1'] ?></span>
    <span class="v262_52">Skill 2: </span><span class="v262_53"><?php  echo $data['skill_2'] ?></span>
    <span class="v262_54">Skill 3: </span><span class="v262_55"><?php  echo $data['skill_3'] ?></span>
    <span class="v262_56"><?php  echo $data['deg_dur'] ?></span>
    <span class="v262_57"><?php  echo $data['phno'] ?></span>
    <span class="v262_58"><?php echo $data['email_id'] ?></span>
    <span class="v262_59"><?php  echo $data['age'] ?></span><div class="v262_60"></div>
    <span class="v262_61"><a href="Resumes/<?php echo $ResumeName ?>">View Resume</a></span></div></body></html>



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