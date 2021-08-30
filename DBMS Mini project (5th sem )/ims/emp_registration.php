
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
   
<link href="stylesheet.css" type="text/css" rel="stylesheet">
    

    <title>Insurance management system</title>
	
	
	</head>
  <body>
 
 
 
 
 
 
 
 
 <div class="registration">
<h1>Registration</h1>

<div class="registration-content">
<ul>
<li class="active">           <a href="#">Employee registration</a>           </li>
<li>           <a href="client_registration.php">Client registration</a>           </li>
<li>           <a href="policy_registration.php">Policy registration</a>           </li>
<li>           <a href="payment_registration.php">Payment registration</a>           </li>
<li>           <a href="claimant_registration.php">Claimant registration</a>           </li>
</ul>

</div>
<form action="emp_reg_phpcode.php" method="POST">

<fieldset style="width:400px; height:400px; margin-left:420px"> <!-- to create form border-->
<legend style="align:center; font-size:26px; font-weight:bold; margin-left:16%;">Employee registration</legend>
    
<table align="center" cellpadding="10">

 <tr>
 <td>Employee Name:</td>
 <td><input type="text" placeholder=" Employee Name" name="name" required></td>
 </tr>
 
 <tr>
<td>Employee ID:</td>
 <td><input type="text" placeholder=" Employee ID" name="ID" required></td>
 </tr>

<tr>
<td>Employee Age:</td>
 <td><input type="text" placeholder=" Employee Age"   name="Age" required></td>
 </tr>

<tr>
<td>Gender:</td>
 <td> Male<input type="radio" name="maleorfemale"  value="Male">Female<input type="radio" name="maleorfemale" value="Female" required></td>
 </tr>

  
  
<tr>
<td>Address:</td>
 <td><textarea rows="5" cols="20" placeholder=" Address" name="Address" required></textarea></td>
 </tr>

 <tr>
<td>Phone number:</td>
 <td><input type="text" placeholder=" Phone number" name="no" required></td>
 </tr>


  <tr>
 <td align="center" colspan="2">
 <input type="submit" name="submit" value="submit"> 
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
