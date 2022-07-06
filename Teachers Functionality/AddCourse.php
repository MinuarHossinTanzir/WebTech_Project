<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>
<body>
<?php include('../view/templete/header.php')  ?> 
    <form action="../controller/addCourseAction.php" method="POST" novalidate>

    <fieldset>
        <legend>Add Course</legend>
        <label for="fname"> First Name </label>
        <input type="text" id="fname" name="fname">
        &nbsp;
        <label for="lname">Last Name</label>
        <input type="lname" id="lname" name="lname">
        <br><br>
        <label for="id">Id</label>
        <input type="number" id="id" name="id" min="10" max="15">
        <br><br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br><br>
        <label for="Mobile No">Mobile no</label>
        <input type="text" id="mobile" name="mobile">
        <br><br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address">
        <br><br>

        
		<label for="coursename">Available Course</label>
			<select name="coursename" id="coursename">
				<option disabled selected value> -- select an option -- </option>
				<option value="WT">WT</option>
				<option value="MP">MP</option>
                <option value="SE">SE</option>
				<option value="SRE">SRE</option>
                <option value="AI">AI-</option>
			</select>
		
       
        <br>
        <hr>
        <input type="submit" name="addcourse" value="Add Course">


    </fieldset>

    </form>
    <a href="../view/homePage.php">Go Back</a>
</body>
</html>