<?php
session_start();

?>


<!DOCTYPE html>
<head>
<title>INSURANCE MANAGEMENT SYSTEM </title>
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="registration">
<h1>Registration</h1>

<div class="registration-content">
<ul>
<li>  <a href="emp_registration.php">Employee registration</a>           </li>
<li> <a href="client_registration.php">Client registration</a>           </li>
<li>  <a href="policy_registration.php">Policy registration</a>           </li>
<li>  <a href="payment_registration.php">Payment registration</a>           </li>
<li  class="active">  <a href="#">Claimant registration</a>                        </li>


</ul>


</div>  <!--end of div class-registration-contents-->

<form action="claimant_reg_phpcode.php" method="POST">


<fieldset style="width:400px; height:300px; margin-left:420px"> <!-- to create form border-->
<legend style="align:center; font-size:26px; font-weight:bold; margin-left:18%;">Claimant registration</legend>

<table align="center" cellpadding="10">


 
 <tr>
<td>Claim ID:</td>
 <td><input type="text" placeholder=" Claim ID" name="claim_id" required></td>
 </tr>

<tr>
<td>Claim type:</td>
 <td><input type="text" placeholder=" Claim type" name="type" required></td>
 </tr>

 


 <tr>
<td>Client ID:</td>
 <td><input type="text" placeholder=" Client ID" name="cid" required></td>
 </tr>

 <tr>
<td>Policy ID:</td>
 <td><input type="text" placeholder=" Policy ID" name="pid" required></td>
 </tr>

 <tr>
<td>Employee ID:</td>
 <td><input type="text" placeholder=" Employee ID" name="eid" required></td>
 </tr>
 
  <tr>
 <td align="center" colspan="2"><input type="submit" value="submit" name="submit"> &nbsp;   &nbsp; </td>
 </tr>







</table>
</fieldset>


<br><br>
<div class="goback">
<a href="admin_login.php" border="1px solid black">Go back to admin login</a>
 </div>
</form>

</div>   <!--end of div class-registration--->
</body>
</html>