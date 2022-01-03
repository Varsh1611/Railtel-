	<?php 
session_start();
?>
 <!DOCTYPE html> 
<html>
 <head> 
<meta charset="utf-8">
<meta name ="viewport"
content="width=device-width, initial-scale=1">
 <title>Dashboard - Client area</title> 
<style>
a img {
	border-radius:50%;
	border: 4px double black;
	
}
 a {border-radius:50%;
 }
body
{
 Background-image:url('m.jpg');
 Background-repeat:no-repeat;
 Background-attachment:fixed;
 Background-position:80% 70%;

margin:0px ;
padding:0px;

}

.slider{
overflow:hidden;
height:400px;
}
.slider figure div{
float:left;
width:20%;
}
.slider figure img{
width:100%;
float:left;
}
.slider figure{
position:relative;
width:500%;
margin:0px;
left:0;
animation:20s varsha infinite;
}
@keyframes varsha{
0%{left:0%;}
20%{left:-100%;}
40%{left:-200%;}
60%{left:-300%;}
80%{left:-400%;}
100%{left:0%;}

}
h1{
text-align: center; 
margin:0 ;
padding:10px;
color: white;
background-color: purple;
}
ul { 

list-style-type: none;

margin:0 ;
padding:0%;
overflow: hidden; 
background-color: black;

}
li {
float:left;
}
li a {display:block;
color: white;
text-align: center;
padding: 14px;
text-decoration: none;
}
li a:hover {
background-color: purple;
color: black;
}
.active a{
background-color: grey;}


</style>

</head> 
<body>


<h1>
 Welcome To RailTel(<?php echo $_SESSION['username']; ?>)</h1>

<ul >
<li class="active"><a href="homepage.php ">Home</a>
</li>
<li><a href="about us.html ">About Us</a>
</li>
<li ><a href="nextpage.html">Dashboard</a>
</li>

<li ><a href="logout.php">Logout</a>
</li>


</ul>
<div class="slider">
<figure>
     <div class="slide">
     <img src="cc.jpg"style="width:45%">
     </div>
<div class="slide">
     <img src="ff.jpg"style="width:45%">
     </div>
<div class="slide">
     <img src="llll.jpg"style="width:45%">
     </div>
<div class="slide">
     <img src="ll.jpg"style="width:45%">
     </div>
<div class="slide">
     <img src="pp.jpg"style="width:45%">
     </div>

<figure>
</div>
</body>
</html>
