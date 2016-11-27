<?php
session_start();
$msg="";
if(isset($_POST['submit']))
{
$a=$_POST['name'];
$b=$_POST['desc'];
$c=$_POST['date'];
$d=$_POST['from'];
$e=$_POST['to'];
$f=$_POST['location'];


$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hackathon");
$sql="insert into event values('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($con,$sql))
{
	$_SESSION['eventsession']="$a";
	header('Location: home.php');
	
}

}
?>

<html>
<head>
<title>Create your Event</title>  
</head>
<body>
<div class="container"><center>
<h1><b><u>FESTIVAL EVENT PORTAL</u></b></h1>
    </center>
      <form method="POST" action=" "><center>
      <font color="blue">
        <h2>Create your Event Here</h2></font>
        <br><label><table border="0" width="130%" height="80%" ><tr><td>
        Event Name:</td><td> <input type="text" class="form-control" name="name" placeholder="Name" required autofocus></td>  </tr>
	<tr><td>Event description:</td><td> <textarea rows='5' cols='15' class="form-control" name="desc" placeholder="Address" value=" " required ></textarea></td></tr>
        <tr><td>Event date:</td><td> <input type="date" class="form-control" name="date"  value=" " required ></td></tr>
	<tr><td>Event timing- From:</td><td> <input type="text" class="form-control" name="from" placeholder="From" required></td> </tr>
	<tr><td>To:</td><td> <input type="text" class="form-control" name="to" placeholder="To" required ></td></tr>
	<tr><td>Event Location:</td><td> <input type="text" class="form-control" name="location" placeholder="Location" required></td> </tr>
        
 <tr><td colspan="2"><button name="submit" type="submit">SUBMIT</button></td></tr>
 </table></label>
 
 </center>
 </form> 
 </div></body>
</html>

