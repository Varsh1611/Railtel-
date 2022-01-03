<!DOCTYPE html>
 <html> 
<head>
 <meta charset="utf-8"/>
 <title>Admin Home Page</title> 
 <style> 
BODY  { 
margin : 0;
padding: 0;
background-image:url('gg.jpg');
background-size: cover;
background-attachement: fixed;
text-align:center;

}

.box{
width:300px;
padding:40px;
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
background-image:url('ee.jpg');
background-size: cover;
background-attachement: fixed;


}
.box h1{
color:white;
text-transform:uppercase;
font-weight:500;
}
.box button
{
border:0;
background-none;
display: block;
margin:20px auto;
text-align:center;
border:4px solid purple;
padding: 14px 10px;
width:200px;
outline:none;
color: black;
border-radius:24px;

}

.box button:hover{
backgound-color: white;
}
.box button:active{
backgound-color: white;
box-shadow:0 5px white;
transform: translateY(4px);
}
</style>
 </head> 
<body>
<form  method="post" name="login">
 
<div class ="box">
			<h1>Admin Home Page</h1>
			
			
			
			<button type="submit"  name="insert">Insert</button>
			<button type="submit"  name="update">Update</button>
			
			<button type="submit"  name="del">Delete</button>
			
			<button type="submit"  name="list">Show Train List</button>
			
			<button type= "submit"  name="logout">Logout </button>


    
 </div>
</form>
<?php 
if(isset($_POST['insert']))
{ header("location:insert.php");
}
if(isset($_POST['update']))
{ header("location:update.php");
}
if(isset($_POST['del']))
{ header("location:delete.php");
}
if(isset($_POST['list']))
{ header("location:display.php");
}
if(isset($_POST['logout']))
{ header("location:login(user,admin).php");
}
?>
</div>
</form> 
</body> 
</html>