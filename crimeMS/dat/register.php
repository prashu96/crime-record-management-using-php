<html>
<head>
<title>Admin</title>
</head>
<style>
a
{
font-size:18px;
color:white;
font-family:calibiry;
text-decoration:none;
}
a:hover
{
	font-size:20px;
}
</style>
<BODY>
<table align="center" width="80%" bgcolor="purple">
<tr height="70px">
<td width="80%"></td>
<td width="10%"><a href="admin.php"><img src="images/h.png" height="70px" width="100%"></a></td>
<td width="10%"><a href="home.php"><img src="images/logout.png" height="70px" width="100%"></a></td>
</tr>
</table>
<br>

<table align="center"  width="80%" bgcolor="purple" border="1">
<tr height="50px">
<td width="25%" align="center"><a href="view.php">View</td>
<td width="25%" align="center"><a href="register.php">Register</td>
<td width="25%" align="center"><a href="update.php">Update</td>
<td width="25%" align="center"><a href="remove.php">Remove</td>
</tr>
</table>
<br><br>



<form name="f" method="post" action="" enctype="multipart/form-data">
<table align="center"  width="40%" bgcolor="" border="0" style="border-color:purple">
<tr >
<td>Name</td>			<td><input type="text" name="name" placeholder="Name"><br><br></td></tr>
<td>E-Mail</td>			<td><input type="text" id="mail" name="mail" placeholder="E-mail"><br><br></td></tr>
<td>Password</td>		<td>	<input type="password" name="pass" placeholder="Password"><br><br></td></tr>
<td>Confirm Password</td><td><input type="password" name="cpass" placeholder="Confirm Password"><br><br></td></tr>
<td>Designation</td>	<td><input type="text" name="desg" placeholder="Designation"><br><br></td></tr>
<td>Gender</td>			<td><input type="text" name="gen" placeholder="Gender"><br><br></td></tr>
<td>Mobile Number</td>	<td><input type="text" name="phone" pattern="[0-9]{10}"><br><br></td></tr>
<td>Date Of Birth</td>	<td><input type="text" name="dob" placeholder="YYYY-MM-DD"><br><br></td>
</tr>
</table><br>
<center>
<input type="submit" name="reg" value="Register" width="100px" ="20px"  style="border-radius:30px; width:100px; height:30px; background-color:blue;color:white">

<?php
if(isset($_REQUEST['reg']))
{
	$name=$_REQUEST['name'];
	$mail=$_REQUEST['mail'];
	$pass=$_REQUEST['pass'];
	$cpass=$_REQUEST['cpass'];
	$desg=$_REQUEST['desg'];
	$gen=$_REQUEST['gen'];
	$phone=$_REQUEST['phone'];
	$dob=$_REQUEST['dob'];
	
	
	
	
	$con=mysqli_connect("localhost","root","","data");
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		if($pass==$cpass)
		{
		$q="insert into employee(user,email,pass,desg,gender,dob) values('$name','$mail','$pass','$desg','$gen','$dob')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Registered successfully!!!!')</script>";
		}
		else{
			echo "<script>alert('Password doesnot Match!!!!')</script>";
		}
	}
}

?>

