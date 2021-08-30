<?php
include("db.php");
error_reporting(0);

$rn=$_GET['rn'];
$ct=$_GET['ct'];
$ci = $_GET['ci'];
$pi=$_GET['pi'];
$ei=$_GET['ei'];
?>
<!doctype html>
<html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
   
<link href="stylesheet.css" type="text/css" rel="stylesheet">
    

    <title>Insurance management system</title>
	
	
	</head>
  <body>
 
 
 
 
 
 
 
 
 <div class="registration" display="flex">
<br><br><br><br><br>


<form action="" method="GET">


<fieldset style="width:400px; height:300px; margin-left:420px"> <!-- to create form border-->
<legend style="align:center; font-size:26px; font-weight:bold; margin-left:15%;"> Update Claimant details</legend>

<table align="center" cellpadding="10">


 
 <tr>
<td>Claim ID:</td>
 <td><input type="text"  value="<?php echo "$rn"  ?>"placeholder=" Claim ID" name="claim_id" required></td>
 </tr>

<tr>
<td>Claim type:</td>
 <td><input type="text" value="<?php echo "$ct"  ?>" placeholder=" Claim type" name="type" required></td>
 </tr>

 


 <tr>
<td>Client ID:</td>
 <td><input type="text"  value="<?php echo "$ci"  ?>"placeholder=" Client ID" name="cid" required></td>
 </tr>

 <tr>
<td>Policy ID:</td>
 <td><input type="text" value="<?php echo "$pi"  ?>" placeholder=" Policy ID" name="pid" required></td>
 </tr>

 <tr>
<td>Employee ID:</td>
 <td><input type="text" value="<?php echo "$ei"  ?>" placeholder=" Employee ID" name="eid" required></td>
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
</div>
   <!--end of div class-registration--->
</body>
</html>


<?php

if($_GET[submit])
{
	
	$rn=$_GET['claim_id'];
	$type=$_GET['type'];
	$cid=$_GET['cid'];
	$pid=$_GET['pid'];
	$eid=$_GET['eid'];
	
$query="UPDATE claimant SET Claim_Id='$rn',Claim_type='$type',Client_Id='$cid',Policy_Id='$pid',Employee_Id='$eid' WHERE Claim_Id='$rn'";
$data=mysqli_query($con,$query);
if($data)
{
	echo"<script>alert('Record updated')</script>";
	header("Location:view_claimant_details.php");

	
}
else{
	header("Location:claimant_update_fail.php");
	
	
}

}


?>