<?php
session_start();
$con = mysqli_connect("localhost","root","","ims");
error_reporting(0);
if(isset($_POST['submit']))
{
    
	$claim_id = $_POST['claim_id'];
	$type = $_POST['type'];
	$cid = $_POST['cid'];
	$pid = $_POST['pid'];
	$eid = $_POST['eid'];
	
	
	
	$query = "insert into claimant values( '$claim_id','$type','$cid','$pid ','$eid')";
	$result =mysqli_query($con,$query);
	if($result)
	{
    
	  header("Location:claimant_success.php");
	}
	else{
		
		header("Location:claimant_failed.php");
	}
}
?>