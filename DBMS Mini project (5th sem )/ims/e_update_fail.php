<?php
session_Start();
$con = mysqli_connect("localhost","root","","ims");
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insurance management system</title>
	<style>
	body {
    background: #3e4144;
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
	
	
	
	
	
	</style>
</head>
<body>
<div class="form">
        <p><?php echo "Failed to update employee details"; ?>!</p>
      
        <p><a href="view_emp_details.php">View Employee details</a></p>
    </div>
</body>
</html>
