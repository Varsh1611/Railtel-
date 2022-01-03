<!doctype html>
<html>
	<head>
<title>new</title>
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">		
 <div class ="box">
  <h1>Login</h1>
    <button  type= "submit"  name="sign_in">Already Have An Account</button>
<br><br>

    <button   type= "submit"  name="log_in">New Registration </button>
 </div>
</form>
<?php 
if(isset($_POST['sign_in']))
{ header("location: login.php");
}
if(isset($_POST['log_in']))
{ header("location:reg.php");
}
?>

</body>
<html>