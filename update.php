<?php
include("connect.php");
include("nav_admin.php");
include("adminCss.php");
	
	$q = "SELECT * from train_record where train_no='tno'";
	//$q="UPDATE `train_record` SET `train_no`='$train_no' WHERE train_no=$train_no";
	
	$query=mysqli_query($conn,$q);
	$res=mysqli_fetch_array($query);
	
	
							if(isset($_POST['update']))
		{
					$tno=$_POST['tno'];
					$tarr=$_POST['tarr'];
					$tdep=$_POST['tdep'];
					$dept=$_POST['dept'];
					$arrt=$_POST['arrt'];
					$fare=$_POST['fare'];
					
					$update="UPDATE `train_record` SET `train_no`='".$tno."',
					`train_arrive`='".$tarr."',`train_departure`='".$tdep."',
					`departure_time`='".$dept."',`arrival_time`='".$arrt."',
					`fare`='".$fare."'  WHERE train_no='$tno'";
					 $qu=mysqli_query($conn, $update) ;
				
					if($update)
					{
						header("location:display.php");
					}else
					{
						echo "Data is not updated!!";
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
							<h1>Update Exist Record</h1>
						

							
							Train No:<input type="number" name="tno" placeholder="Enter Train No" ><br>
							Train Arrival:<input type="text" name="tarr" placeholder="Enter Train Arrival"><br>
							Train Departure:<input type="text" name="tdep" placeholder="Enter Train Departure"><br>
							Departure Time:<input type="text" name="dept" placeholder="Enter Departure Time" ><br>
							Arrival Time:<input type="text" name="arrt" placeholder="Enter Arrival Time "><br>
							Fare:<input type="number" name="fare" placeholder="Enter Seat fare"><br>
							
							<input type="submit" name="update" value="Update">
						</div>
						</form>
					</body>
			</html>