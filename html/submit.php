<html>
<body>

<!--<form action="submit.php" method="post">
 Family Last Name: <input type="text" name="familyLastName"><br>
First Name: <input type="text" name="firstName"><br>
Last Name: <input type="text" name="lastName"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
Zip: <input type="text" name="zip"><br>
 Password: <input type="text" name="pword"><br> -->

 	<!-- 	<label>
		    <input type="radio" name="optionsRadios" id="ips" value="1" checked>
		    IPS-Individual Private School (One family filing own Private School Affidavit)
		  </label>

		  <label>
		    <input type="radio" name="optionsRadios" id="pssp" value="2">
		    PSSP-Private School Satellite Program (One private school affidavit is filed on behalf 
		    of multiple member families)
		  </label>

		  <label>
		    <input type="radio" name="optionsRadios" id="supportgroup" value="3">
		    SG-Support Group (Each family is responsible for filing its own affidavit, but support 
		    is offered to member families)
		  </label> 


<input type="submit">
</form> -->

</body>
</html>

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

	$familyLastName = $_POST['familyLastName'];
	$homePhone = $_POST['homePhone'];
	$homeEmail = $_POST['homeEmail'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$grade = $_POST['grade'];
	$mobilePhone = $_POST['mobilePhone'];
	$email = $_POST['email'];
	$ips = $_POST['optionsRadios'];
	$pssp = $_POST['optionsRadios'];
	$supportgroup = $_POST['optionsRadios'];

	$leadership = $_POST['leadership'];
	$cyfact = $_POST['cyfact'];
	$alumniact = $_POST['alumniact'];
	$considerhomeschool = $_POST['considerhomeschool'];
	$bonfire = $_POST['bonfire'];
	$locanlibrary = $_POST['locanlibrary'];
	$fallfamilykickoff = $_POST['fallfamilykickoff'];
	$christmasparty = $_POST['christmasparty'];
	$robotics = $_POST['robotics'];
	$schoolpictures = $_POST['schoolpictures'];
	$cyfaerozone = $_POST['cyfaerozone'];
	$sportsaturdays = $_POST['sportsaturdays'];
	// $yearbook = $_POST['yearbook'];
	// $springsquaredance = $_POST['springsquaredance'];
	// $flagfootball = $_POST['flagfootball'];
	// $usedbooksale = $_POST['usedbooksale'];
	// $banquet = $_POST['banquet'];
	// $soccer = $_POST['soccer'];
	// $momtea = $_POST['momtea'];
	// $seniorsponsor = $_POST['seniorsponsor'];
	// $basketball = $_POST['basketball'];
	// $chessclub = $_POST['chessclub'];
	// $senioractivities = $_POST['senioractivities'];
	// $kickballfrisbee = $_POST['kickballfrisbee'];
	// $debateclub = $_POST['debateclub'];
	// $hsgraduation = $_POST['hsgraduation'];
	// $tennis = $_POST['tennis'];
	// $journalismclub = $_POST['journalismclub'];
	// $nineelevinactivites = $_POST['nineelevinactivites'];
	// $fundraising = $_POST['fundraising'];
	// $fineartsfaire = $_POST['fineartsfaire'];
	// $juniorhighactivities = $_POST['juniorhighactivities'];
	// $mentor = $_POST['mentor'];
	// $dramaclub = $_POST['dramaclub'];
	// $elementaryactivities = $_POST['elementaryactivities'];
	// $eighthgraduation = $_POST['eighthgraduation'];
	// $sciencefaire = $_POST['sciencefaire'];
	// $helpissueshs = $_POST['helpissueshs'];
	// $newIdea = $_POST['newIdea'];








	// $sql = "INSERT INTO registrations (id, firstName, lastName, ips) VALUES (NULL, '$firstName', '$lastName', '$ips')";
	$sql = "INSERT INTO registrations (id, familyLastName, homePhone, homeEmail, address, city, zip,
		 	lastName, firstName, grade, mobilePhone, email, ips, pssp, supportgroup, 
		 	leadership, cyfact, alumniact, considerhomeschool, bonfire, locanlibrary,
		 	fallfamilykickoff, robotics, schoolpictures, cyfaerozone, sportsaturdays ) 
		VALUES (NULL, '$familyLastName', '$homePhone', '$homeEmail', '$address', '$city', '$zip', 
			'$lastName', '$firstName', '$grade', '$mobilePhone', '$email', '$ips', '$ips', '$ips', 
			'$leadership', '$cyfact', '$alumniact', '$considerhomeschool', '$bonfire', '$locanlibrary',
			'$fallfamilykickoff', '$robotics', '$schoolpictures', '$cyfaerozone', '$sportsaturdays')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}



	// $yearbook = $_POST['yearbook'];
	// $springsquaredance = $_POST['springsquaredance'];
	// $flagfootball = $_POST['flagfootball'];
	// $usedbooksale = $_POST['usedbooksale'];
	// $banquet = $_POST['banquet'];
	// $soccer = $_POST['soccer'];
	// $momtea = $_POST['momtea'];
	// $seniorsponsor = $_POST['seniorsponsor'];
	// $basketball = $_POST['basketball'];
	// $chessclub = $_POST['chessclub'];
	// $senioractivities = $_POST['senioractivities'];
	// $kickballfrisbee = $_POST['kickballfrisbee'];
	// $debateclub = $_POST['debateclub'];
	// $hsgraduation = $_POST['hsgraduation'];
	// $tennis = $_POST['tennis'];
	// $journalismclub = $_POST['journalismclub'];
	// $nineelevinactivites = $_POST['nineelevinactivites'];
	// $fundraising = $_POST['fundraising'];
	// $fineartsfaire = $_POST['fineartsfaire'];
	// $juniorhighactivities = $_POST['juniorhighactivities'];
	// $mentor = $_POST['mentor'];
	// $dramaclub = $_POST['dramaclub'];
	// $elementaryactivities = $_POST['elementaryactivities'];
	// $eighthgraduation = $_POST['eighthgraduation'];
	// $sciencefaire = $_POST['sciencefaire'];
	// $helpissueshs = $_POST['helpissueshs'];
	// $newIdea = $_POST['newIdea'];
