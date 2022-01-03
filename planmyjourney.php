				<?php 
					include("tableCss.php");
					include("connect.php");
				?>
<!doctype html>
<html>
<head>
<style>

h1{
text-align: center;
margin:0 ;
padding:10px;
color: white;
background-color: purple;
}
select {
margin:0 ;
padding:10px;
background:  purple;
color: white;
justify-content: space-between;
font-size:1.6;
border-radius:4px;
cursor:pointer;
}
.previous
{
	background color:grey;
}					

</style>
</head>
<body>
<form action="" method="post">	
<h1><a href="" class="previous"><<</a><strong>All The Train Details Are Here</h1>
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