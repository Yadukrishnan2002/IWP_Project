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
	<title>20BAI1226</title>

   
</head>
<body>
    <form action="add_job_detailsPHP.php" method="POST">
        Company name : <input type="text" name="cname" id="cname">
        <br><br>
        Company no : <input type="number" name="cno" id="cno">
        <br><br>
        People applied : <input type="number" name="ppl_app" id="ppl_app">
        <br><br>
        eligbility : <input type="text" name="elig" id="elig">
        <br><br>
        responisbility : <input type="text" name="resp" id="resp">
        <br><br>
        
        


        
        
        Job Title : <input type="text" name="job_title" id="job_title">
        <br><br>
        Job Location : <input type="text" name="job_loc" id="job_loc">
        <br><br>
        People required :<input type="text" name="ppl_req" id="ppl_req">
        <br><br>
        Starting Salary : <input type="text" name="start_sal" id="start_sal">
        <br><br>
        End Salary : <input type="text" name="end_sal" id="end_sal">
        <br><br>
        Enter Job description : <textarea name="job_desc" id="job_desc" rows="4" cols="50"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>	
</body>
</html>