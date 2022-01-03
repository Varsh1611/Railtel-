<!DOCTYPE html>
 <html> 
<head>
 <meta charset="utf-8"/>
 <title>Login</title> 
<?php
 include("css.php"); 
 ?>
 </head> 
<body>
 <?php 
 session_start();

 include("db.php"); 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from user where username='$username' and password='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
	if($row==1 )

{
	$_SESSION['username']=$username;
		header("location:homepage.php");

} else
{
	
		?>
	<script>
	alert("User your username or password invalid!!");
	</script>
	<?php
}
}
?>

 
 <form action="" method="post">	
<div class ="box">
			<h1>Login</h1>
			
			
			Username:
			<input type="text"  name="username" placeholder="Enter Username"   required/>
			Password:
			<input type="password" name="password" placeholder="Enter Password"   required/>
 

			<input type= "submit" value="Login" name="submit" /></a>
			
			
<p>Don't have an account? <a href="reg.php">Registration</a></p> 
</div>
</form> 

</body> 
</html>
