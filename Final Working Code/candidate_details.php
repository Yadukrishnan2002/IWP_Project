<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Signup</title>
</head>
<body>

<form action="add_emp_det.php" method="POST" enctype="multipart/form-data">	

Employee Username :<input type="text" name="eunam" id="eunam">

<br><br>

Employee password :<input type="password" name="epwd" id="epwd">

<br><br>


Employee Name :<input type="text" name="enam" id="enam">

<br><br>

Age :<input type="text" name="age" id="age">

<br><br>

Email ID :<input type="text" name="email_id" id="email_id">

<br><br>

address :<input type="text" name="address" id="address">

<br><br>




College Name : <input type="text" name="collg_nam" id="collg_nam">

<br><br>

Degree :<input type="text" name="degree" id="degree">

<br><br>


Degree Duration :<input type="text" name="deg_dur" id="deg_dur">

<br><br>

Skill 1 :<input type="text" name="skill_1" id="skill_1">

<br><br>

Skill 2 :<input type="text" name="skill_2" id="skill_2">

<br><br>

Skill 3 :<input type="text" name="skill_3" id="skill_3">

<br><br>

Achievements : <textarea name="achv" id="achv" rows="4" cols="50"></textarea>

Select a file: <input type="file" name="pdfFile" id = "pdfFile">


<input type="submit" name="submit" value="submit">

</form>


</body>
</html>