		<?php
			session_start();
			
		?>
		<!doctype html>
<html>
<head>
<style>
.box 
{

position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
border-radius:24px;
border:4px solid purple;
		padding: 20px 100px;
}
body{ text-align:center;}
</style>
</head>
<body>
<div class="box">
<h1>Train Booked</h1>
<hr>
Name of the applicant:<?php echo $_SESSION['name']; ?>
Train no:  <?php echo $_SESSION['no']; ?>Date of journey:<?php echo $_SESSION['date']; ?>
Station From:  <?php echo $_SESSION['from']; ?>          Station to:<?php echo $_SESSION['to']; ?>

<h3>Passanger Details </h3>
<div class="table">
<table align="center">
<tr><th>S.NO</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
</tr>
<tr>
<th>1.</th>
<th><input type="text" name ="n1"  value="<?php echo $_SESSION['n1']; ?>" required/></th>
<th><input type="text" name ="g1" value="<?php echo $_SESSION['g1']; ?>" required/></th>
<th><input type="number" name ="a1" value="<?php echo $_SESSION['a1']; ?>"  required/></th>

<tr/>

<tr>
<th>2.</th>
<th><input type="text" name ="n2" value="<?php echo $_SESSION['n2']; ?>"  ></th>
<th><input type="text" name ="g2" value="<?php echo $_SESSION['g2']; ?>" ></th>
<th><input type="number" name ="a2" value="<?php echo $_SESSION['a2']; ?>" ></th>

<tr/>

<tr>
<th>3.</th>
<th><input type="text" name ="n3" value="<?php echo $_SESSION['n3']; ?>" ></th>
<th><input type="text" name ="g3" value="<?php echo $_SESSION['g3']; ?>" ></th>
<th><input type="text" name ="a3" value="<?php echo $_SESSION['a3']; ?>" ></th>

<tr/>

<tr>
<th>4.</th>
<th><input type="text" name ="n4" value="<?php echo $_SESSION['']; ?>" ></th>
<th><input type="text" name ="g4" value="<?php echo $_SESSION['g4']; ?>" ></th>
<th><input type="text" name ="a4" value="<?php echo $_SESSION['a4']; ?>" ></th>

<tr/>

<tr>
<th>5.</th>
<th><input type="text" name ="n5" value="<?php echo $_SESSION['n5']; ?>" ></th>
<th><input type="text" name ="g5" value="<?php echo $_SESSION['g5']; ?>" ></th>
<th><input type="text" name ="a4" value="<?php echo $_SESSION['a5']; ?>" ></th>

<tr/>

<tr>
<th>6.</th>
<th><input type="text" name ="n6" value="<?php echo $_SESSION['n6']; ?>" ></th>
<th><input type="text" name ="g6" value="<?php echo $_SESSION['g6']; ?>" ></th>
<th><input type="text" name ="a6" value="<?php echo $_SESSION['a6']; ?>" ></th>

<tr/></table>
</div></div>
</body>
</html>