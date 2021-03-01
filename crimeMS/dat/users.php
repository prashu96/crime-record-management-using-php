<html>
<head>
<title>Trusty</title>
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
<td width="10%"><a href="trusty.php"><img src="images/h.png" height="70px" width="100%"></a></td>
<td width="10%"><a href="home.php"><img src="images/logout.png" height="70px" width="100%"></a></td>
</tr>
</table>
<br>

<table align="center"  width="80%" bgcolor="purple" border="1">
<tr height="50px">
<td width="33.33%" align="center"><a href="tallfiles.php">All Files</td>
<td width="33.33%" align="center"><a href="trequested.php">Requested</td>
<td width="33.33%" align="center"><a href="users.php">Users</td>
</tr>
</table>
<br><br>

<form name="f" method="post" action="" enctype="multipart/form-data">
<br>
<br>

<table width="60%" border="1" align="center" bgcolor="white" style="border-color:purple">
<tr style="background-color:purple;color:white;text-align:center">
<td>Emp.Id</td><td>NAME</td><td>Gender</td><td>Email</td><td>Date of Birth</td><td>Join Date</td>
</tr>
<?php

	//move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
	$con=mysqli_connect("localhost","root","","data");
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="select * from employee";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   echo "<tr height='30px'>";
			echo "<td>".$re['id']."</td>";
			echo "<td>".$re['user']."</td>";
			echo "<td>".$re['gender']."</td>";
			echo "<td>".$re['email']."</td>";
			echo "<td>".$re['dob']."</td>";
			echo "<td>".$re['date']."</td>";
			echo "</tr>";
		}
		}


?>
</table>
</td>
</table>