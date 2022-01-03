		<?php 
			session_start();
			?>


 <!doctype html>
<html>
<head>
<style>
table ,th, td{
border:1px solid black;
padding: 5px;

}
h1{
text-align: center; 
margin:0 ;
padding:10px;
color: white;
background-color: purple;
}
h3{
text-align: center; 
margin:0 ;
padding:10px;

}
body{
font-size:20px;
text-align:center;
}
.button
{ text-align:center;
color:green;
}

</style>
</head>
<body>
<h1>Reservation form</h1>
<form action="" method="post">
<br>Name of the applicant:<input type="text" name ="name" required/>
Full Address:<input type="text" name ="add" required/>
Phone no:<input type="text" name ="phone" required/><br>

Train no:<input type="text" name ="no" required/>
Date of journey:<input type="Date" name="date" required/><br>
Station From:<input type="text" name ="from" required/>
Station to:<input type="text" name ="to" required/>
<hr>

<h3>Passanger information</h3>

<table align="center">
<tr><th>S.NO</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
</tr>
<tr>
<th>1.</th>
<th><input type="text" name ="n1" required/></th>
<th><input type="text" name ="g1"required/></th>
<th><input type="number" name ="a1" required/></th>

<tr/>

<tr>
<th>2.</th>
<th><input type="text" name ="n2" ></th>
<th><input type="text" name ="g2"></th>
<th><input type="number" name ="a2"></th>

<tr/>

<tr>
<th>3.</th>
<th><input type="text" name ="n3"></th>
<th><input type="text" name ="g3"></th>
<th><input type="text" name ="a3"></th>

<tr/>

<tr>
<th>4.</th>
<th><input type="text" name ="n4"></th>
<th><input type="text" name ="g4"></th>
<th><input type="text" name ="a4"></th>

<tr/>

<tr>
<th>5.</th>
<th><input type="text" name ="n5"></th>
<th><input type="text" name ="g5"></th>
<th><input type="text" name ="a4"></th>

<tr/>

<tr>
<th>6.</th>
<th><input type="text" name ="n6"></th>
<th><input type="text" name ="g6"></th>
<th><input type="text" name ="a6"></th>

<tr/></table>
<br>
<div class="button">
<input type= button  name ="submit" value="Form Submit">
</div>

</form>
</body>
</html>
