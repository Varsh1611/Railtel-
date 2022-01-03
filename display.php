<?php
include("nav_admin.php");
include("adminCss.php");
?>
<!doctype html>
		<html>
			<head>
				<title></title>
				<style>
				<?php 
					include("tableCss.php");
				?>
</style>
			</head>
					<body>
					<h1>Display Table List</h1>
						<table class="table">
							<tr>
								<th>Train No</th>
								<th>Train Arrive</th>
								<th>Train Departure</th>
								<th>Departure Time</th>
								<th>Arrival Time</th>
								<th>Fare</th>
								
							</tr>
					<?php
							
							
							$q="SELECT * FROM train_record";
							
							$query=mysqli_query($conn,$q);
							
							while($res=mysqli_fetch_array($query))
							{
								
							
					?>
							<tr>
								<td><?php  echo $res['train_no'];?></td>
								<td><?php  echo $res['train_arrive'];?></td>
								<td><?php  echo $res['train_departure'];?></td>
								<td><?php  echo $res['departure_time'];?></td>
								<td><?php  echo $res['arrival_time'];?></td>
								<td><?php  echo $res['fare'];?></td>
								
							</tr>
							<?php
							}
							?>
						</table>
				</body>
				</html>