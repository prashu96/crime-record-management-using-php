<html>
<head>
<title>User</title>
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
// Starting session
session_start();
 
// Storing session data
$_SESSION["email"] = "admin@gmail.com";

?>
<table align="center" width="80%" bgcolor="purple">
<tr height="70px">
<td width="80%"></td>
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


<table align="center"  width="80%" bgcolor="purple">
<tr height="400PX">
<td height="400px" width="100%"><img src="images/database.jpg" height="400px" width="100%"></td>
</tr>
</table>



