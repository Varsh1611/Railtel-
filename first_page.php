<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="veiwport"
content="width=device-width, initial-scale=1.0">
<title>irctc</title>
<style> 
BODY  { 
background-image:url('zz.jpg');
background-attachment:fixed;
background-size:100% 100%;;
}
img{height:450px;
width:450px;
}
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">		
<h1 style="text-align:center;">WELCOME</h1>
<p align=center><img src="logo2.jpg" alt="train">
</p>
<p align=center><button autofocus="autofocus"  type= "submit"  name="next">NEXT
</button></p>
</form>
<?php 
if(isset($_POST['next']))
{ header("location: login(user,admin).php");
}
?>
</body>
</html>

