<html>
<head>
<title>user</title>
</head>
<style>
a
{
font-size:18px;
color:red;
font-family:calibiry;
text-decoration:none;
}
a:hover
{
	font-size:20px;
}
</style>
<BODY bgcolor="#d2dae2">
<table align="center" width="80%" bgcolor="purple">
<tr height="70px">
<td width="80%"></td>
<td width="10%"><a href="user.php"><img src="images/h.png" height="70px" width="100%"></a></td>
<td width="10%"><a href="home.php"><img src="images/logout.png" height="70px" width="100%"></a></td>
</tr>
</table>
<br>

<table align="center"  width="80%" bgcolor="purple" border="1">
<tr height="50px">
<td width="25%" align="center"><a href="upload.php">Upload Files</td>
<td width="25%" align="center"><a href="userrequest.php">User Request</td>
<td width="25%" align="center"><a href="aallfiles.php">All Files</td>
<td width="25%" align="center"><a href="adownloaded.php">Downloaded</td>
</tr>
</table>
<br><br>
<form name="f" method="post" action="" enctype="multipart/form-data">
<br>
<br>
<table width="60%" border="1" align="center" bgcolor="white" style="border-color:purple">
<tr style="background-color:purple;color:white;text-align:center">
<td>Emp.Id</td><td>NAME</td><td>E-mail</td><td>File Name</td><td>State</td>
</tr>
<?php
	session_start();
	//move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
	$con=mysqli_connect("localhost","root","","data");
	$mail=$_SESSION["email"];
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="select * from req r,employee e,files f where r.email=e.email and r.fid=f.fid and state=1;";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   echo "<tr height='30px'>";
			echo "<td>".$re['id']."</td>";
			echo "<td>".$re['user']."</td>";
			echo "<td>".$re['email']."</td>";
			echo "<td>".$re['file']."</td>";
			echo "<td> Downloaded</td>";
		   // echo "<td><a href='upload/".$re['file']."'>download</a></td>";
			echo "</tr>";
		}
		}


?>
</table>
</td>
<td width="50%" align="center">
<br><br>
</td>
</tr>
</table>




