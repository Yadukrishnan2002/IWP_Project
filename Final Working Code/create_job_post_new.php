<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_job_detailsPHP.php" method = "POST">
        Enter Job title: <input type="text" name = "job-title">
        Enter Job Description: <input type="text" name = "job-description">
        Enter Location: <input type="text" name = "location">
        <input type="submit" value = "submit">
    </form>
</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel = "stylesheet" type= "text/css" href = "main6.css">
</head>

<body>
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
<center>
    <form action="add_job_detailsPHP.php" method="POST" enctype="multipart/form-data">
	 
     <div class="job-card">
    
        Job Title : <input type="text" name="job_title" id="job_title">
        <br><br>
        Job Location : <input type="text" name="job_loc" id="job_loc">
        <br><br>
        eligbility : <input type="text" name="elig" id="elig">
        <br><br>
        responisbility : <input type="text" name="resp" id="resp">
	</div>
	<div class="job-card">
        People required :<input type="text" name="ppl_req" id="ppl_req">
        <br><br>
        Starting Salary : <input type="text" name="start_sal" id="start_sal">
        <br><br>
        End Salary : <input type="text" name="end_sal" id="end_sal">
        <br><br>
        Enter Job description : <textarea name="job_desc" id="job_desc" rows="4" cols="50"></textarea>
        <input type="submit" name="submit" value="submit">

        Select a file: <input type="file" name="pdfFile" id = "pdfFile">


	</div>
    </form>	
	<script>
</center>
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