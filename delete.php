

<?php
include("connect.php");
include("nav_admin.php");
include("adminCss.php");
	
	$q = "SELECT * from train_record where train_no='tno'";
	//$q="UPDATE `train_record` SET `train_no`='$train_no' WHERE train_no=$train_no";
	
	$query=mysqli_query($conn,$q);
	$res=mysqli_fetch_array($query);
	
	
							if(isset($_POST['delete']))
		{
					$tno=$_POST['tno'];
					$tarr=$_POST['tarr'];
					$tdep=$_POST['tdep'];
					$dept=$_POST['dept'];
					$arrt=$_POST['arrt'];
					$fare=$_POST['fare'];
					
					$delete= "DELETE FROM `train_record` WHERE train_no='$tno'";
					 $qu=mysqli_query($conn, $delete) ;
				
					if($delete)
					{
						header("location:display.php");
					}else
					{?>
						<script>
					alert("Data is  not inserted!!");
					</script>
					<?php }
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
							<h1>Delete Exist Record</h1>
						

							
							Train No:<input type="number" name="tno" placeholder="Enter Train No" ><br>
							<input type="submit" name="delete" value="Delete">
						</div>
						</form>
					</body>
			</html>
