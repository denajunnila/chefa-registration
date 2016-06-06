<?php include "base.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chefa Registration</title>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   -->
	<link rel="stylesheet" href="style.css" type="text/css" />


</head>
<body>
	<h1>Chefa</h1>
	<?php
	$servername = "localhost";
	$username = "homestead";
	$password = "secret";
	//my sql
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	//mysqli method
	// Check connection
/*	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";*/
//PDO method
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=chefa", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
    }

	?>

	<!-- User membership with PHP -->
	<div id="main">
		<?php
		if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
		{
		     ?>
		 
		     <h1>Member Area</h1>
		     <p Thanks for logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
		      
		     <?php
		}
		elseif(!empty($_POST['username']) && !empty($_POST['password']))
		{
		    $username = mysql_real_escape_string($_POST['username']);
		    $password = md5(mysql_real_escape_string($_POST['password']));
		     
		    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
		     
		    if(mysql_num_rows($checklogin) == 1)
		    {
		        $row = mysql_fetch_array($checklogin);
		        $email = $row['EmailAddress'];
		         
		        $_SESSION['Username'] = $username;
		        $_SESSION['EmailAddress'] = $email;
		        $_SESSION['LoggedIn'] = 1;
		         
		        echo "<h1>Success</h1>";
		        echo "<p>We are now redirecting you to the member area.</p>";
		        echo "<meta http-equiv='refresh' content='=2;index.php' />";
		    }
		    else
		    {
		        echo "<h1>Error</h1>";
		        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
		    }
		}
		else
		{
		    ?>
		     
		   <h1>Member Login</h1>
		     
		   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
		     
		    <form method="post" action="index.php" name="loginform" id="loginform">
		    <fieldset>
		        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		        <input type="submit" name="login" id="login" value="Login" />
		    </fieldset>
		    </form>
		     
		   <?php
		}
		?>
	</div>
	
</body>
</html>