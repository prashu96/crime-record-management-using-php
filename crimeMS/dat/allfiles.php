<html>
<head>
<title>user</title>
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
<td width="33.33%" align="center"><a href="allfiles.php">All Files</td>
<td width="33.33%" align="center"><a href="requested.php">Requested</td>
<td width="33.33%" align="center"><a href="downloaded.php">Downloaded</td>
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
<td>File.Id</td><td>File NAME</td><td>Size</td><td>Time</td>
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
		$q="select * from files";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   echo "<tr height='30px'>";
			echo "<td>".$re['fid']."</td>";
			echo "<td>".$re['file']."</td>";
			echo "<td>".$re['size']."</td>";
			echo "<td>".$re['time']."</td>";

			echo "</tr>";
		}
		}


?>
</table>
</td>
<td width="50%" align="center">
<br><br>
Enter File id to be requested<br><br>

<?php
if(isset($_REQUEST['req']))
{
$con=mysqli_connect("localhost","root","","data");
if($con)
{
	session_start();
	$u=$_SESSION["email"];
	$p=$_REQUEST['fid'];
	$q1="select email from employee where email='$u'";
	$res1=mysqli_query($con,$q1);
	if($res1)
	{
		$q="insert into req(fid,email) values($p,'$u')";
		$res=mysqli_query($con,$q);
		if($res)
		{
			echo "<script>alert('Request Sent!!!')</script>";
		}
		else
		
		echo "<script>alert('Request not sent!!!')</script>";
	}
	else
		
	echo "<script>alert('E-mail not found!!!')</script>";
} 
}
?>




<input type="text" name="fid" placeholder="  File id" width="200px" height="50px"style="border-radius:30px; width:250px; height:30px; "><br><br>
<input type="submit" name="req" value="Request" width="100px" ="20px"  style="border-radius:30px; width:100px; height:30px; background-color:blue;color:white">
</td>
</tr>
</table>




