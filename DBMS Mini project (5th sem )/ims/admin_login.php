
<?php
include("auth_session.php");




?>



<!DOCTYPE html>
<head>
<title>INSURANCE MANAGEMENT SYSTEM </title>
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="admin">
<div class="nav">

<div>Insurance Management System</div>
<ul>
<li><a href="./home.html">Home</a></li>
<li><a href="./about.html">About us</a></li>
<li><a href="./service.html">Services</a></li>
<li class="active"><a href="#">Admin login</a></li>
<li><a href="./contact.html">Contact</a></li>

</ul>
</div> <!---end of div class-nav--->
<p align="center"><b>Admin:<?php echo $_SESSION['username']; ?></p></b>
<div class="admin-content">
<div>
<div class="admin-content1">
<div>
<ul>
<br><br>
<li>  <a href="./registration.html">Registration</a>   </li> <br><br><br><br>
<li>  <a href="view_emp_details.php">View employee details </a>  </li> <br><br><br><br>
<li>  <a href="view_client_details.php">View client details </a>   </li> <br><br><br><br>

</ul>
</div>
</div>  <!--end of div class -admin content1-->


<div class="admin-content2">
<div>
<ul>
<br><br><br><br><br><br><br>

<li>  <a href="view_policy_details.php">View policy details </a>  </li>   <br><br><br><br>
<li>   <a href="view_payment_details.php">View payment details </a> </li>  <br><br><br><br>
<li> <a href="view_claimant_details.php">View claimant details </a> </li>  <br><br><br><br>


</ul>
</div>
</div> <!--end of div class -admin content2-->



<div class="admin-content3">
<div>
<table align="center" cellpadding="30px">


<tr>
 <td><a href="login.php">Logout </a> </td>
</tr>
  
  </table>

</div>
</div>   <!--end of div class -admin content3-->


</div>
</div> <!---end od div cls admin-content-->
</div><!--end of div class-admin-->
</body>
</html>
<?php
require('db.php');
include("auth_session.php");
?>