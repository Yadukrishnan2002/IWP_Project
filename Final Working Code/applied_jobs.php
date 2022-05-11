<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website name</title>

    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />

    <link rel = "stylesheet" type= "text/css" href = "style4 (Company_Home_page).css">


    <?php

        session_start();
        $eno = $_SESSION['eno'];
        
        $conn = new mysqli("localhost","root","","project_1");

        if($conn->connect_error)
        {

        die("Failed to connect to database");


        }

        else
        {   
            $stmt = $conn->prepare("select * from interview where eno = ?");
            $stmt->bind_param("i",$eno);
            $stmt->execute();
            $stmt_result = $stmt->get_result();

            if($stmt_result->num_rows > 0)
            {
                 

            

        


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
    <center>
    <div >
        
        <?php

            while($data = $stmt_result->fetch_assoc())
            {
                $inoNum = $data['ino'];
                $status = $data['status'];

                if($status == 1)
                {
                    $statusStr = "Selected";
                }
                else if($status == 0)
                {
                    $statusStr = "Waiting List";
                }
                else 
                {
                    $statusStr = "Rejected";
                }
                
                
                $stmt2 = $conn->prepare("select * from job_post where ino = ?");
                $stmt2->bind_param("i",$inoNum);
                $stmt2->execute();
                $stmt_result2 = $stmt2->get_result();

                $data2 = $stmt_result2->fetch_assoc();

        ?>

        <div class="job-card">
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        Job title: 
                    </span>
                    <span class = "job-title">
                        <?php echo $data2['jo_tit']; ?>

                    </span>

                </span>
                

                <span class = "single-column1">
                    <span class = "Date-label">
                        Post created on:

                    </span>
                    <span class = "Date">
                        15-4-22
                        <br>
                        <br>
                        <br>

                    </span>

                </span>
                

            </div>
            
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "location-label">
                        Location: 

                    </span>
                    <span class = "location">
                        <?php echo $data2['job_loc']; ?>

                    </span>
                </span>

                <span class = "single-column1">
                    <span class = "pay-scale-label">
                        Pay scale:
                    </span>
                    <span class = "pay-scale">
                        <?php echo $data2['salary_start']."k"." - ". $data2['salary_end']."k $"; ?>
                        <br>
                        <br>
                        
                    </span>
                </span>
            </div>

            

            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "no-of-applicants-label">
                        No of applicants:

                    </span>
                    <span class = "no-of-applicants">
                        8.1 K
                    </span>
                </span>

                <span class = "single-column1">
                    <span class = "btn">
                        <button><p class = "btn-label"><?php echo $statusStr ?></p></button>
                    </span>
                </span>
            </div>
            
            
        </div>


        <?php } } }?>

       
        
    </div>
</center>
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