<html>
<head>
<title>Authority</title>
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

<?php
if(isset($_REQUEST['sub']))
{
	$fname=$_REQUEST['fname'];
	
	$photo=$_FILES['photo']['name'];
	
	$size=$_FILES['photo']['size'];
	move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$photo);
	$con=mysqli_connect("localhost","root","","data");
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into files(fname,file,size) values('$fname','$photo',$size)";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('File Inserted successfully!!!!')</script>";
	}
}

?>


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
<table width="80%" align="center">
<tr>
<td width="50%">
<table width="100%" align="center" bgcolor="white" >
<tr  height="400px" style="background-color:purple;color:white;text-align:center">
<td width="100%"><img src="images/upload.gif" height="400px" width="100%"><></td>
</tr>

</table>
</td>
<td width="50%" align="center">
<br><br>
Enter File Deyails To be Uploaded<br><br>
<input type="text" name="fname" placeholder="   File Name" style="border-radius:30px; width:250px; height:30px;"><br><br>
<input type="file" name="photo"><br><br>
<input type="submit" name="sub" value="Upload" width="100px" ="20px"  style="border-radius:30px; width:100px; height:30px; background-color:blue;color:white">
</td>
</tr>
</table>



