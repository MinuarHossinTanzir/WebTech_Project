<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:Login.php");
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
    <form action="../controller/addgradeAction.php" method="POST" novalidate>

    <fieldset>
        <legend>Add Grade</legend>
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
        <label for="Current Grade">Current Grade</label>
        <input type="text" id="Grade" name="Grade">
        <br><br>
        <label for="modified Grade">Modified Grade</label>
        <input type="text" id="Grade" name="Grade">
        <br><br>
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit">


    </fieldset>

    </form>
    <a href="../view/homePage.php">Go Back</a>
</body>
</html>