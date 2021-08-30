<?php
include("db.php");
error_reporting(0);
$cn=$_GET['cn'];
$rn=$_GET['rn'];
$ag=$_GET['ag'];
$gn = $_GET['gn'];
$ad=$_GET['ad'];
$pn=$_GET['pn'];
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

<fieldset style="width:400px; height:400px; margin-left:420px"> <!-- to create form border-->
<legend style="align:center; font-size:26px; font-weight:bold; margin-left:18%;"> Update Client details</legend>
    
<table align="center" cellpadding="10">

 <tr>
 <td>Client Name:</td>
 <td><input type="text"  value="<?php echo "$cn"  ?>" placeholder="Client Name" name="name" required></td>
 </tr>
 
 <tr>
<td>Client ID:</td>
 <td><input type="text"  value="<?php echo "$rn"  ?>" placeholder="Client ID" name="ID" required></td>
 </tr>

<tr>
<td>Client Age:</td>
 <td><input type="text"  value="<?php echo "$ag"  ?>" placeholder="Client Age"   name="Age" required></td>
 </tr>

<tr>
<td>Gender:</td>
 
<td><input type="text" value="<?php echo "$gn"  ?>" placeholder="Gender"   name="maleorfemale" required>	</td>
 </tr>

  
  
<tr>
<td>Address:</td>
 <td><textarea rows="5" cols="20"   placeholder=" Address" name="Address" required ><?php  echo "$ad"?></textarea></td>
 </tr>

 <tr>
<td>Phone number:</td>
 <td><input type="text"  value="<?php echo "$pn"  ?>" placeholder=" Phone number" name="no" required></td>
 </tr>


  <tr>
 <td align="center" colspan="2">
 <input type="submit" name="submit" value="Update details"> 
 </td>
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
	
	$name=$_GET['name'];
	$id=$_GET['ID'];
	$Age=$_GET['Age'];
	$gender=$_GET['maleorfemale'];
	$ad=$_GET['Address'];
	$phone=$_GET['no'];
$query="UPDATE Client SET Client_name='$name',Client_Id='$id',Age='$Age',Gender='$gender',Address='$ad',Phone_number='$phone' WHERE Client_Id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	
	header("Location:view_client_details.php");

	
}
else{
	header("Location:c_update_fail.php");
	
	
}

}


?>