<?php
include("nav_admin.php");
include("adminCss.php");
if(isset($_POST['add']))
{
	$tno=$_POST['tno'];
	$tarr=$_POST['tarr'];
	$tdep=$_POST['tdep'];
	$dept=$_POST['dept'];
	$arrt=$_POST['arrt'];
	$fare=$_POST['fare'];
	$q="INSERT INTO `train_record`(`train_no`, `train_arrive`, `train_departure`, `departure_time`, `arrival_time`, `fare`)
	VALUES ('$tno','$tarr','$tdep','$dept','$arrt','$fare')";
	
	$query=mysqli_query($conn,$q);
	if($query)
	{?>
<script>
alert("Data is inserted sucessfully!!");
</script>
	<?php } else {
		?> <script>
		alert("Data is  not inserted!!");
		</script>
		<?php
	}
}
?>

<!doctype html>
		<html>
			<head>
				<title></title>
			</head>
					<body>
						<form action="" method="post">
							<div class ="box">
							<h1>Insert New Record</h1>
							 
							Train No:<input type="number" name="tno" placeholder="Enter Train No"><br>
							Train Arrival:<input type="text" name="tarr" placeholder="Enter Train Arrival"><br>
							Train Departure:<input type="text" name="tdep" placeholder="Enter Train Departure"><br>
							Departure Time:<input type="text" name="dept" placeholder="Enter Departure Time"><br>
							Arrival Time:<input type="text" name="arrt" placeholder="Enter Arrival Time "><br>
							Fare:<input type="number" name="fare" placeholder="Enter Seat fare"><br>
							
							<input type="submit" name="add" value="ADD">
							</div>
						</form>
					</body>
			</html>
							
							