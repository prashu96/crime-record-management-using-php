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
<br>
<br>
<table width="80%" align="center">
<tr>
<td width="50%">
<table width="100%" border="1" align="center" bgcolor="white" style="border-color:purple">
<tr style="background-color:purple;color:white;text-align:center">
<td>ID</td><td>NAME</td><td>E-MAIL</td><td>DESIGNATION</td>
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
			echo "<td>".$re['email']."</td>";
			echo "<td>".$re['desg']."</td>";
			echo "</tr>";
		}
		}


?>
</table>
</td>


<?php
if(isset($_REQUEST['remove']))
{
$u=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","data");
if($con)
{
	$q="delete from employee where id=$u";
	$res=mysqli_query($con,$q);
	if($res)
	{
		echo "<script>alert('Deleted Successfully!')</script>";
	}
	else
	{
		echo "<script>alert('Not Deleted!')</script>";
	}
}	
}

	?>



<td width="50%" align="center">
<br><br>
Enter ID of Employee To be Removed<br><br>
<input type="text" name="id" placeholder="ID" width="200px" height="50px"><br><br>
<input type="submit" name="remove" value="Remove" width="100px" ="20px"  style="border-radius:30px; width:100px; height:30px; background-color:blue;font:white">
</td>
</tr>
</table>


