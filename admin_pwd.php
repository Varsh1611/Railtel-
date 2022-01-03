
<!doctype html>
<html>
	<head>
	<meta charset="utf-8"/>
<title>admin</title>
<?php include("css.php"); ?>
	</head>
<body>
	<form action="" method="post">		
 <div class ="box">
 <h1>Admin</h1>
			
			
			Username:
			<input type="text"  name="username" placeholder="Enter Username"   required/>
			Password:
			<input type="password" name="password" placeholder="Enter Password"   required/>
 

			<input type= "submit" value="Submit" name="submit" />
			
			</div>
</form> 
<?php
session_start();
include("connect.php");
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from login where username='$username' and password='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
if($row==1)
{
	header("location:adminPage.php");
} else
{
	?><script>
	alert("Admin your username or password invalid!!");
	</script>
	<?php
}
}
?>
</body> 
</html>