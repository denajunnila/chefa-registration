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
	echo '<table border="1">';
		//Table header Info
		if ($result->num_rows > 0) {
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
						<th>ips</th>
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
		        echo '<td>'. $row["lastName"]. '</td>';
		        echo '<td>'. $row["firstName"]. '</td>';
		        echo '<td>'. $row["grade"]. '</td>';
		        echo '<td>'. $row["mobilePhone"]. '</td>';
				echo '<td>'. $row["email"]. '</td>';		        
		        echo '<td>'. $row["ips"]. '</td>';
		        echo '<td>'. $row["leadership"]. '</td>';


		        echo '</tr>';
		    }
		} else {
		    echo "0 results";
		}
	echo '</table>';
