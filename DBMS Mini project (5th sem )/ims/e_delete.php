<?php
include("db.php");


$Employee_Id=$_GET['rn'];
$query="delete from employee where Employee_Id='$Employee_Id' ";
$data=mysqli_query($con,$query);

if($data)
{
	header('Location:view_emp_details.php');
 }
	 
	
else{
	echo "failed to delete";
}
?>