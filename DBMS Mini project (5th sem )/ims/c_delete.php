<?php
include("db.php");


$Client_Id=$_GET['rn'];
$query="delete from client where Client_Id='$Client_Id' ";
$data=mysqli_query($con,$query);

if($data)
{
	header('Location:view_client_details.php');
 }
	 
	
else{
	echo "failed to delete";
}
?>