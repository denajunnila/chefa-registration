<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
  	<div class="btn-group">
  	<a href='retrieve.php?completeList=true'>Complete List</a>
	<a href='retrieve.php?rosterOnly=true'>Roster Only</a>
	<a href='retrieve.php?surveyList=true'>Survey List</a>
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



	$sql = "SELECT * FROM registrations where 1";
	$result = $conn->query($sql);
	function fullListFunction($result) 
	{
	echo '<table border="1">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family Name</th>
						<th>Home Phone</th>
						<th>Home email</th>
						<th>Address</th>
						<th>City</th>
						<th>Zip</th>
						<th>Father Last name</th>
						<th>First name</th>
						<th>Mobile phone</th>
						<th>email</th>
						<th>ips</th>
						<th>leadership</th>
				        <th>cyfact</th>
				        <th>alumniact</th>
				        <th>considerhomeschool</th>
				        <th>bonfire</th>
				        <th>locanlibrary</th>
				        <th>fallfamilykickoff</th>
				        <th>robotics</th>
				        <th>schoolpictures</th>
				        <th>cyfaerozone</th>
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
		        echo '<td>'. $row["ips"]. '</td>';
		        echo '<td>'. $row["leadership"]. '</td>';
		        echo '<td>'. $row["cyfact"]. '</td>';
		        echo '<td>'. $row["alumniact"]. '</td>';
		        echo '<td>'. $row["considerhomeschool"]. '</td>';
		        echo '<td>'. $row["bonfire"]. '</td>';
		        echo '<td>'. $row["locanlibrary"]. '</td>';
		        echo '<td>'. $row["fallfamilykickoff"]. '</td>';
		        echo '<td>'. $row["robotics"]. '</td>';
		        echo '<td>'. $row["schoolpictures"]. '</td>';
		        echo '<td>'. $row["cyfaerozone"]. '</td>';
		        echo '</tr>';
		    }
		} else {
		    echo "0 results";
		}
	echo '</table>';

  }
  function rosterOnlyFunction($result) 
  {
	echo '<table border="1">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family Name</th>
						<th>Home Phone</th>
						<th>Home email</th>
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
	echo '<table border="1">';
		//Table header Info
		if ($result->num_rows > 0) 
		{
			echo 	'<tr>
						<th>Family Name</th>
						<th>leadership</th>
				        <th>cyfact</th>
				        <th>alumniact</th>
				        <th>considerhomeschool</th>
				        <th>bonfire</th>
				        <th>locanlibrary</th>
				        <th>fallfamilykickoff</th>
				        <th>robotics</th>
				        <th>schoolpictures</th>
				        <th>cyfaerozone</th>

					</tr>';
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo '<tr>';
		        echo '<td>'. $row["familyLastName"]. '</td>';
		        echo '<td>'. $row["leadership"]. '</td>';
		        echo '<td>'. $row["cyfact"]. '</td>';
		        echo '<td>'. $row["alumniact"]. '</td>';
		        echo '<td>'. $row["considerhomeschool"]. '</td>';
		        echo '<td>'. $row["bonfire"]. '</td>';
		        echo '<td>'. $row["locanlibrary"]. '</td>';
		        echo '<td>'. $row["fallfamilykickoff"]. '</td>';
		        echo '<td>'. $row["robotics"]. '</td>';
		        echo '<td>'. $row["schoolpictures"]. '</td>';
		        echo '<td>'. $row["cyfaerozone"]. '</td>';

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