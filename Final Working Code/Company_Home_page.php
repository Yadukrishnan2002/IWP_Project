<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website name</title>

    <link rel = "stylesheet" type= "text/css" href = "style4 (Company_Home_page).css">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />


    <?php

    $conn = new mysqli("localhost","root","","project_1");   
    

    $cno = 1;
    

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from job_post order by ino desc");
        // $stmt->bind_param("i",$jidno);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        

        $stmt2 = $conn->prepare("select * from company_det where cno = ?");
        $stmt2->bind_param("i",$cno);
        $stmt2->execute();
        $stmt_result2 = $stmt2->get_result();
        $data2 = $stmt_result2->fetch_assoc();


        $noOffoll = $data2['no_foll'];

        
    }
    ?>
</head>
<body>

     <header>
    <img class =  "logo" src="logo.jpg" style="width:65px;height:40px;" alt="">
        <nav>
            <ul class = "nav_links">
                <li><a href = "Company_SignUp_Page.php">For Employers</a></li>
                <li><a href = "#">For Employees</a></li>
            </ul>
        </nav>
    

    </header> 
    

    <div class="profile-box">
        <div class="profile-img">
            <!--Essentials/icons8-google-48.png
            Google
        Mountain View, CA -->
            <img src="VIT_Logo.png" width = "200 " height = " 200"  >
        </div>
        <div class="profile-name">
            VIT
        </div>
        <div class="location-followers">
            Vellore &emsp;&emsp; <?php echo $noOffoll; ?> followers
        </div>
        
        
        
    </div>
    
    <div class="analytics-box">
        <div class="analytics-title">
            <u>Analytics</u>
        </div>
        <div class="analytics-details">
            <span class = "analytics-details-text">
                No of Job openings created: 40
                <br><br>
            </span>
            <span class = "analytics-details-text">
                No of candidates applied: 246k
                <br><br>
            </span>
            <span class = "analytics-details-text">
                No of candidates got selected: 542
                <br><br>
            </span>
            <span class = "analytics-details-text">
                Selection Ratio: 11 : 5000
                <br><br>
            </span>
            
           
            
            
            
        </div>
    </div>

    <center>
    <div class="jobPost-container">
        
        <span class = "Your-job-post-label">
            Your Job posts
        </span>
        <span class = "add-jobPost-button">
          
           <a href = "create_job_post_new.php"> <button><p class = "jobPost-btn">Create Job Post</p></button></a>
        </span>


        <?php
        while($data = $stmt_result->fetch_assoc())
        {
        ?>

        <div class="job-card">
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        Job title: 
                    </span>
                    <span class = "job-title">
                        <?php echo $data['jo_tit']; ?>

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
                        <?php echo $data['job_loc']; ?>

                    </span>
                </span>

                <span class = "single-column1">
                    <span class = "pay-scale-label">
                        Pay scale:
                    </span>
                    <span class = "pay-scale">
                        
                        <?php echo $data['salary_start']."-".$data['salary_end']."$"; ?>
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
                        <a href = "Company_job_details2.php?id=<?php echo $data['ino'] ?>"><button><p class = "btn-label">View details</p></button></a>
                    </span>
                    <span class = "btn2">
                        <a href="Close_job.php?ino=<?php echo $data['ino']?>"><button><p class = "btn-label">Close Job</p></button></a>

                    </span>
                </span>
            </div>
            
            
        </div>

        <?php
            }
        ?>

        
            
            
        

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