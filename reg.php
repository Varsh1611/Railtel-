<!DOCTYPE html>
 <html> 
<head> 
<meta charset="utf-8"/> 

<title>Registration</title>
 <?php include("css.php"); ?>
</head>
 <body> 
<?php require('db.php');
 // When form submitted, insert values into the database. 

if (isset($_REQUEST['username']))
 { 
// removes backslashes 
$username = stripslashes($_REQUEST['username']); 

//escapes special characters in a string 
$username = mysqli_real_escape_string($conn, $username); 
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn, $email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn, $password); 

$query = "insert into user (username, password, email) values ('$username', '" . md5($password) . "', '$email')";
 $result = mysqli_query($conn, $query);
 if ($result)
 { echo "<div> 

<h3>You are registered successfully.</h3>
<br/> <p>Click here <a href='login.php'>Login</a></p> 
</div>"; 
}
 else
	 { echo "<div> 
<h3>Required fields are missing.</h3><br/> 
<p>Click here to <a href='reg.php'>registration</a> again.</p> 
</div>";
 }

 } else 
{ ?> <form action="" method="post">

<div class ="box">
			 <h1>Registration</h1>
			Username:
			<input type="text"  name="username" placeholder="Enter Username"  required >
			Email:
			<input type="text"  name="email" placeholder="Email Adress" required > 
			Password:
			<input type="password"  name="password" placeholder="Enter Password"  required >
			
			<input type="submit" name="submit" value="Register" > 
			<p>Already have an account? <a href="login.php">Login here</a></p>
			
			</div>

 </form>
 <?php
 } ?>
 </body> 
</html>
