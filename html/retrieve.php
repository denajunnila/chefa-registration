<!DOCTYPE html>
<html>
<head>	
    <?php include_once("chefa_header.php"); ?>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
  	<div class="btn-group">
  	<a href='retrieve.php?completeList=true'>Complete List</a>
	<a href='retrieve.php?rosterOnly=true'>Roster Only</a>
	<a href='retrieve.php?surveyList=true'>Survey List</a>
	<form action="retrieve.php">
		<input name="search"/>
		<button type="submit">
	</form>
	</div>
</nav>



	<?php
	$servername = "localhost";
	$username = "homestead";
	$password = "secret";
	$dbname = "chefa";

	//my sql
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//mysqli method
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";
//PDO method
	// try {
	//     $conn = new PDO("mysql:host=$servername;dbname=chefa", $username, $password);
	//     // set the PDO error mode to exception
	//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//     echo "Connected successfully"; 
	//     }
	// catch(PDOException $e)
	//     {
	//     echo "Connection failed: " . $e->getMessage();
 //    }



	$sql = "SELECT * FROM registrations where familyLastName='Junnila'";
	$result = $conn->query($sql);
	function fullListFunction($result) 
	{
	echo '<table border="1" class="table">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>Zip</th>
						<th>Father Last name</th>
						<th>First name</th>
						<th>Mobile phone</th>
						<th>email</th>
						<th>ips</th>
						<th>ldr</th>
				        <th>act</th>
				        <th>alu</th>
				        <th>hms</th>
				        <th>bon</th>
				        <th>lib</th>
				        <th>fal</th>
				        <th>rbt</th>
				        <th>pic</th>
				        <th>aer</th>
					</tr>';
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo '<tr>';
		        echo '<td>'. $row["familyLastName"]. '</td>';
		        echo '<td>'. $row["homePhone"]. '</td>';
		        echo '<td>'. $row["homeEmail"]. '</td>';
		        echo '<td>'. $row["address"]. '</td>';
		        echo '<td>'. $row["city"]. '</td>';		        
		        echo '<td>'. $row["zip"]. '</td>';
		        echo '<td>'. $row["fatherLastName"]. '</td>';
		        echo '<td>'. $row["fatherFirstName"]. '</td>';
		        echo '<td>'. $row["fatherMobilePhone"]. '</td>';
				echo '<td>'. $row["fatherEmail"]. '</td>';	
				if ($row["ips"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
	        
		        // echo '<td>'. $row["ips"]. '</td>';
		        // echo '<td>'. $row["leadership"]. '</td>';
		        // echo '<td>'. $row["cyfact"]. '</td>';
		        // echo '<td>'. $row["alumniact"]. '</td>';
		        // echo '<td>'. $row["considerhomeschool"]. '</td>';
		        // echo '<td>'. $row["bonfire"]. '</td>';
		        // echo '<td>'. $row["locanlibrary"]. '</td>';
		        // echo '<td>'. $row["fallfamilykickoff"]. '</td>';
		        // echo '<td>'. $row["robotics"]. '</td>';
		        // echo '<td>'. $row["schoolpictures"]. '</td>';
		        // echo '<td>'. $row["cyfaerozone"]. '</td>';
		        if ($row["leadership"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["cyfact"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["alumniact"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["considerhomeschool"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["bonfire"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["locanlibrary"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["fallfamilykickoff"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["robotics"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["schoolpictures"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}		        
		        if ($row["cyfaerozone"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}

		        echo '</tr>';
		    }
		} else {
		    echo "0 results";
		}
	echo '</table>';

  }
  function rosterOnlyFunction($result) 
  {
	echo '<table border="1" class="table">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>Zip</th>
						<th>Last name</th>
						<th>First name</th>
						<th>Grade</th>
						<th>Mobile phone</th>
						<th>email</th>

					</tr>';
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo '<tr>';
		        echo '<td>'. $row["familyLastName"]. '</td>';
		        echo '<td>'. $row["homePhone"]. '</td>';
		        echo '<td>'. $row["homeEmail"]. '</td>';
		        echo '<td>'. $row["address"]. '</td>';
		        echo '<td>'. $row["city"]. '</td>';		        
		        echo '<td>'. $row["zip"]. '</td>';
		        echo '<td>'. $row["fatherLastName"]. '</td>';
		        echo '<td>'. $row["fatherFirstName"]. '</td>';
		        echo '<td>'. $row["fatherMobilePhone"]. '</td>';
				echo '<td>'. $row["fatherEmail"]. '</td>';
				echo '</tr>';
			}
		}
	}

function surveyListFunction($result) 
  {
	echo '<table border="1" class="table">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family</th>
						<th>ldr</th>
				        <th>act</th>
				        <th>alu</th>
				        <th>hms</th>
				        <th>bon</th>
				        <th>lib</th>
				        <th>fal</th>
				        <th>rbt</th>
				        <th>pic</th>
				        <th>aer</th>

					</tr>';
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo '<tr>';
		        echo '<td>'. $row["familyLastName"]. '</td>';
		        // echo '<td>'. $row["leadership"]. '</td>';
		        // echo '<td>'. $row["cyfact"]. '</td>';
		        // echo '<td>'. $row["alumniact"]. '</td>';
		        // echo '<td>'. $row["considerhomeschool"]. '</td>';
		        // echo '<td>'. $row["bonfire"]. '</td>';
		        // echo '<td>'. $row["locanlibrary"]. '</td>';
		        // echo '<td>'. $row["fallfamilykickoff"]. '</td>';
		        // echo '<td>'. $row["robotics"]. '</td>';
		        // echo '<td>'. $row["schoolpictures"]. '</td>';
		        if ($row["leadership"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["cyfact"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["alumniact"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["considerhomeschool"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["bonfire"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["locanlibrary"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["fallfamilykickoff"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["robotics"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}
		        if ($row["schoolpictures"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}		        
		        if ($row["cyfaerozone"]==1) {echo '<td>&#10004;</td>';}else{echo '<td> </td>';}

				echo '</tr>';
			}
		}
	}

  if (isset($_GET['completeList'])) 
  {
    fullListFunction($result);
  }
  if (isset($_GET['rosterOnly'])) 
  {
    rosterOnlyFunction($result);
  }
   if (isset($_GET['surveyList'])) 
  {
    surveyListFunction($result);
  }
?>


</body>
</html>
