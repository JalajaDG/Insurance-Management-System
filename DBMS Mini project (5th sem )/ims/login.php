<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
  <title>Insurance management system</title>
	
	
	<style>   
	body{
	background-image:url("texture_grey.jpg");
	background-size:cover;
	height:100vh;
}

.container{
	width: 400px;
	height: 400px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 250px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
	
}


.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}      </style>
  
	
</head>
<body>
<?php
    require('db.php');
	
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `login` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:admin_login.php");
        } else {
           header("Location:login_failed.php");
        }
    } else {
?>

<h3> <b> &nbsp; &nbsp; Login for:Registration ,view employee details ,view client details ,view policy details ,view payment details ,view claimant details ,update/delete employee<b></h3>
	<div class="container">
	
	<img src="user1.png">
    <form class="form" method="post" name="login">
        <div>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/ >
		</div>
		
		<div>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
		</div>
		
        <input type="submit" value="Login" name="submit"  class="btn-login"/>
       
  </form>
<?php
    }
?>
</body>
</html>