<!doctype html>
<html>
<head>
<title>payment page</title>
<style>
body{
background-color:purple;}

.payment{
background-border:solid 2px black;
background:gray;
padding:20px;

margin: auto;
width:380px;

position:relative;
border-radius:10px;

border:10px solid black;
}
h2{color:white;
font-size:35px;
text-align:center;
}
.pay{
background-color:green;	
width:100%;
border:soild 2px ;
padding:5px;
}
.payment input{
border-radius:5px;
width:100%;
padding:5px;
}
</style>
<body>

<div class="payment">
<h2>Online Payment</h2>
<form action="" method="post">
Full Name:
<input type="text"  name="ful" placeholder="Enter Full Name" required/>
<br>


Card Number:
<input type="number" name="car" placeholder="XXXX XXXX XXXX " required/>
<br>
Expire Month:
<input type="month" name="expm" placeholder="MM " required/><br>

Expire Year:
<input type="Year" name="expy" placeholder="YYYY " required/>
<br>
CVV No:
<input type="number" name="cvv" placeholder="000 " required/><br>

Total Amount:
<input type="number" name="tot" placeholder="Rs " required/>
<br>
<div class="pay">
<input type="submit" name="pay" value="Pay">

</div>
</div>
<?php
include("db.php"); 
if(isset($_POST['pay']))
{
	$ful=$_POST['ful'];
	$car=$_POST['car'];
	$expm=$_POST['expm'];
	$expy=$_POST['expy'];
	$cvv=$_POST['cvv'];
	$tot=$_POST['tot'];
	$q="INSERT INTO `payment`(`full name`, `card number`, `expire month`, `expire year`, `cvv no`, `total amount`) 
	VALUES ('ful','car','expm','expy','cvv','tot')";
	
	$query=mysqli_query($conn,$q);
	if($query)
	{?>
<script>
alert("Payment is sucessfull!!");
</script>
	<?php } else {
		?> <script>
		alert("Payment is not sucessfully!!");
		</script>
		<?php
	}
}
?>
</body>
</html>