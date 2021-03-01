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
<table width="80%" align="center">
<tr>
<td width="50%">
<table width="100%" border="1" align="center" bgcolor="white" style="border-color:purple">
<tr style="background-color:purple;color:white;text-align:center">
<td>File.Id</td><td>File NAME</td><td>Size</td><td>Requested By</td>
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
		$q="select * from req r,files f where r.fid=f.fid and tr!=1";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   echo "<tr height='30px'>";
			echo "<td>".$re['fid']."</td>";
			echo "<td>".$re['fname']."</td>";
			echo "<td>".$re['size']."</td>";
			echo "<td>".$re['email']."</td>";

			echo "</tr>";
		}
		}


?>
</table>
</td>
<td width="50%" align="center">
<br><br>
<br>
<select name="s1">
<?php

	//move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
	$con=mysqli_connect("localhost","root","","data");
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="select * from req r,files f where r.fid=f.fid and tr!=1";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   
			echo "<option>".$re['fid']."</option>";
		}
		}


?>
</select>
<select name="s2">
<?php

	//move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
	$con=mysqli_connect("localhost","root","","data");
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="select * from req r,files f where r.fid=f.fid  and tr!=1";
		$result=mysqli_query($con,$q);
		while($re=mysqli_fetch_assoc($result))
		{   
			echo "<option>".$re['email']."</option>";

			
		}
		}


?>
</select><br><br>
<input type="submit" name="grant" value="Grant" width="100px" ="20px"  style="border-radius:30px; width:100px; height:30px; background-color:blue;color:white">


<?php
if(isset($_REQUEST['grant']))
{
	$id=$_REQUEST['s1'];
	$email=$_REQUEST['s2'];
	$con=mysqli_connect("localhost","root","","data");
	$rn=rand(1000,9999);
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="update req set totp=$rn,tr=1 where fid=$id and email='$email'";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('OTP created successfully!!!!')</script>";
	}
}

?>
