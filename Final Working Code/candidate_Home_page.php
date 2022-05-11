<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
<link href="main.css" rel="stylesheet" />
<title>Document</title>
<?php

session_start();
?>
<?php


    $conn = new mysqli("localhost","root","","project_1");   
    
    

    

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from job_post where job_open_status = 1 order by ino desc");
       // $stmt->bind_param("i",);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        
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





<div class="v9_43"></div>
<span class="v9_44">Top Companies to Follow</span>
<div class="v9_70"></div>
<span class="v9_45">Google</span>
<span class="v9_46">Microsoft</span>
<span class="v9_47">Facebook</span>
<span class="v9_49">Netflix</span>
<span class="v9_48">Amazon</span>
<div class="v9_53">
<div class="v9_51">
</div>
<span class="v9_52"><a href = "add_followers.php">Follow</a></span>
</div>
<div class="v9_54">
<div class="v9_55"></div>
<span class="v9_56">Follow</span>
<div class="v9_57">

<span class="v9_59">Follow</span>
</div>
<div class="v9_60">
<div class="v9_61"></div>
<span class="v9_62">Follow</span>
<div class="v9_63">
<div class="v9_64"></div>
<span class="v9_65">Follow</span>
<div class="v9_66">
<div class="v9_67"></div>
<span class="v9_68">Follow</span>
</div>
</div>
</div>
</div>
<div class="v9_73"></div>
<span class="v9_71">See more..</span>
<div class="v9_74"></div>
<span class="v9_75">Top Profiles to Follow</span>
<div class="v9_76"></div>
<span class="v9_77">Tom Radder</span>
<span class="v9_78">Tony Stark</span>
<span class="v9_79">John corman</span>
<span class="v9_80">Steven smith</span>
<span class="v9_81">Bruce Wayne</span>
<div class="v9_82">
<div class="v9_83"></div>
<span class="v9_84">Follow</span>
</div>
<div class="v9_85">
<div class="v9_86"></div>
<span class="v9_87">Follow</span>
<div class="v9_88">
<div class="v9_89">
</div>
<span class="v9_90">Follow</span>
</div>
<div class="v9_91">
<div class="v9_92"></div>
<span class="v9_93">Follow</span>
<div class="v9_94">
<div class="v9_95">
</div>
<span class="v9_96">Follow</span>
<div class="v9_97">
<div class="v9_98"></div>
<span class="v9_99">Follow</span>
</div>
</div>
</div>
</div>
<div class="v9_100"></div>
<span class="v9_101">See more..</span>
<div class="v9_105"></div>
<div class="v9_103"></div>
<div class="v9_102"></div>
<div class="v9_106"></div>
<div class="v9_104"></div>
<div class="v9_108"></div>
<div class="v9_109"></div>
<div class="v9_110"></div>
<div class="v9_111"></div>
<div class="v9_112"></div> 
 

<!-- <div class="v9_164"></div>
<div class="v9_165"></div>

 
      <span class="v9_166"></span>
      <span class="v9_167">Google</span>
      <div class="v9_168"></div>
      <span class="v9_169">Job title:</span>
      <span class="v9_170">location:</span>
      <span class="v9_171">Mountain View, CA</span>
      <span class="v9_172">Pay scale: </span>
      <span class="v9_173">100k - 140k $</span>
      <span class="v9_174">/annum</span>
      <span class="v9_175">Job Description:</span>
      <span class="v9_176">We are looking for a Computer Engineer who is able to maintain and enhance our current operating platforms and work with our application development team to integrate new applications into the network. The successful candidate will be responsible for collaborating with the Network Architect to work out the details involved with developing and implementing new network segments. He or she will also be asked to occasionally offer support to the executive staff for internal network issues and mobile computing challenges as well.</span>

      <div class="v9_177" onclick="location.href='job_details.php';"></div>
      <div class="v9_178" onclick="location.href='job_details.php';"></div>

      <div class="v9_179">
      <div class="v9_180"></div>
      <div class="v9_181"></div>
      </div></div>
      <div class="v9_144">
      <div class="v9_145"></div>
      <div class="v9_146"></div>
 


<span class="v9_147">Data Scientist</span>
<span class="v9_148">Microsoft</span>
<span class="v9_150">Job title:</span>
<span class="v9_151">location:</span>
<span class="v9_152">Redmond, Washington</span>
<span class="v9_153">Pay scale: </span>
<span class="v9_154">100k - 140k $</span>
<span class="v9_155">/annum</span>
<span class="v9_156">Job Description:</span>
<span class="v9_157">We are looking for a Computer Engineer who is able to maintain and enhance our current operating platforms and work with our application development team to integrate new applications into the network. The successful candidate will be responsible for collaborating with the Network Architect to work out the details involved with developing and implementing new network segments. He or she will also be asked to occasionally offer support to the executive staff for internal network issues and mobile computing challenges as well.</span>
<div class="v9_158"></div>
<div class="v9_183"></div>
<div class="v9_159"></div>
<div class="v9_160">
<div class="v9_161"></div>
<div class="v9_162"></div>
</div>
</div>
<div class="v23_15"></div>
</div> -->

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
                        <?php echo $data['salary_start']."-".$data['salary_end']."$";?>
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
                        <a href = "job_details.php?id=<?php echo $data['ino'] ?>"><button><p class = "btn-label">View details</p></button></a>
                    </span>
                </span>
            </div>
            
            
            
            
      </div>

      <?php
      }
      ?>






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
</body></html>