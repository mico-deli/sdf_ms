<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SDF MIS</title>
	
    <!-- <link rel="stylesheet" href="sytle.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body  class="container">
<div class="m">
<img scr="img.png"></div>
	<p>Welcome to IPRC Ngoma SDF Program</p>
	<!-- <p> SDF is a program implemented by IPRC Ngoma to upskill the youth in IT related field If you want to register a new cooperative,  -->
		<!-- <a href="#">  click here.</a>  -->
	</p>

	<!-- <div style="width: 50%; margin: auto"> -->
		

		<p> APPLICATION FORM </p>
<div class="container">
		<form name="new_applicant_form" action="registration.php" method="post">
			<p> First name: <input type="text" name="izina" class ="form-control"> </p>
			<p> Last name:  <input type="text" name="last_name" class ="form-control"></p>
			<p> Gender: <br>
			<div  class="form-check">
				<input type="radio" id="female" name="gender" value="Female" class="form-check-input">
				<label for="female">Female</label><br>
				<input type="radio" id="male" name="gender" value="Male"  class="form-check-input"> 
				<label for="male">Male</label><br>
			<p> Date of birth: <input type="date" name="date_of_birth"></p>
			<p>Highest academic level 
				<select name="highest_academic_level" class="form-select">s
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
			</p>
			<p> <label class="form-label">
			Province: <input type="text" name="province" class ="form-control"></p>
			<p><label class="form-label"> District: <input type="text" name="district" class ="form-control"></p>
			<p><label class="form-label"> Sector:   <input type="text" name="sector" class ="form-control"></p>
			<p> <label class="form-label">Cell:     <input type="text" name="cell" class ="form-control"></p>
			<p><label class="form-label"> Email:    <input type="email" name="email" class ="form-control"></p>
			<p> <label class="form-label">Password: <input type="password" name="password" class ="form-control"></p></label>
			<p> Learning Option: <br>
			<!-- <div  class="form-check"> -->
				<input type="radio" id="iot" name="learning_option_id" value="1" class="form-check-input">
				<label for="iot">IOT</label><br>
				<input type="radio" id="sod" name="learning_option_id" value="2" class="form-check-input">
				<label for="sod">Software Development</label><br>
				<input type="radio" id="civil_engineering" name="learning_option_id" value="3" class="form-check-input">
				<label for="civil_engineering">Civil Engineering</label>
			</p>
			<p><input type="submit" name="submit" value="Submit" class="btn-primary"></p>
		</form>
	</div>
</body>
</html>