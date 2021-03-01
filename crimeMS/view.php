<?php include('includes/database.php');?>
<?php
$query = "SELECT 
			* FROM criminal";
//get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Crime Records Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-top.css" rel="stylesheet">
	    <link href="css/forms.css" rel="stylesheet">
    <link href="css/tables.css" rel="stylesheet">

  </head>

  <body>
 <p align="right"> <img src="images/horn.gif" width="5%"><img src="images/index.jpg" width="30%"></p>

 <nav class="navbar navbar-dark bg-primary">
  
  <div class="collapse navbar-collapse" id="navbarNav">
     <center>  <ul class="navbar-nav">
        <a class="nav-link" href="#" style="color:white;font-size:medium;">Home <span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
    
        <a class="nav-link" href="station.php" style="color:white;font-size:medium;">Station</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
      
        <a class="nav-link" href="police.php" style="color:white;font-size:medium;">Police</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
    
        <a class="nav-link disabled" href="criminal.php" style="color:white;font-size:medium;">Criminal</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="complaint.php" style="color:white;font-size:medium;">Complaint</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="fir.php" style="color:white;font-size:medium;">FIR</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
       <a class="nav-link disabled" href="search.php" style="color:white;font-size:medium;">Search</a>

     </ul></center>
  </div>
</nav>
<a href="criminal.php" class="btn btn-danger btn_sm">Back</a><br>
<img src="images/logo.jpg" width="20%" align="left">
<center><h2>Criminal Info</h2>
<table id="customers">
<tr>
				<th>FIR Num</th>
				<th>Criminal Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Offence</th>
				<th>Offence Date</th>
				<th>Place</th>
				<th>Description</th>
				
			</tr>

<?php
	//Assign get variable
	$id = $_GET['id'];
	
	//Create customer select query
	$query ="SELECT * FROM criminal WHERE id = $id";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$output ='<tr>';
					$output.='<td>'.$row['firno'].'</td>';
					$output.='<td>'.$row['cname'].'</td>';
					$output.='<td>'.$row['age'].'</td>';
					$output.='<td>'.$row['gender'].'</td>';
					$output.='<td>'.$row['offence'].'</td>';
					$output.='<td>'.$row['offence_date'].'</td>';
					$output.='<td>'.$row['place'].'</td>';
					$output.='<td>'.$row['description'].'</td>';
					$output.='</tr>'; //Echo Output
					$img=$row['photo'];
				
					echo $output;
			
		}
		echo "<img src='criminal/$img' width='200' height='180' >";
		//Free Result set
		$result->close();
	}
?>









