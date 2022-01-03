<!doctype html>
<html>
	<head>
<title>admin</title>
<meta charset="utf-8"/>
<?php include("login_css.php"); ?>
	</head>
<body>
	<form action="" method="post">		
 <div class ="box">
  <h1>Admin Page</h1>
    <button  type= "submit"  name="add">Add Train</button>
	<button   type= "submit"  name="delete">Delete </button>
	<button   type= "submit"  name="update">Update </button>
	<button   type= "submit"  name="show">Show All The Train Details </button>
	<button   type= "submit"  name="logout">Logout </button>
 </div>
</form>
<?php 
if(isset($_POST['add']))
{ header("location:insert.php");
}
if(isset($_POST['delete']))
{ header("location:delete.php");
}
if(isset($_POST['update']))
{ header("location:update.php");
}
if(isset($_POST['show']))
{ header("location:display.php");
}
if(isset($_POST['logout']))
{ header("location:login(user,admin).php");
}
?>

</body>
<html>