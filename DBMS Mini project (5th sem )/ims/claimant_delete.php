<?php
include("db.php");


$Claim_Id=$_GET['rn'];
$query="delete from claimant where Claim_Id='$Claim_Id' ";
$data=mysqli_query($con,$query);

if($data)
{
	header('Location:view_claimant_details.php');
 }
	 
	
else{
	echo "failed to delete";
}
?>