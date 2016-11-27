<?php
session_start();
$msg="";
$eventname=$_GET['val'];
if(isset($_POST['submit']))
{
$b=$_POST['name'];
$c=$_POST['age'];
$d=$_POST['address'];
$e=$_POST['sex'];
$f=$_POST['email'];
$g=$_POST['mobno'];
$h=$_POST['dept'];
$a=$_POST['regno'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hackathon");
$sql="insert into registration values('$eventname','$a','$b','$c','$d','$e','$f','$g','$h')";
if(mysqli_query($con,$sql))
{
	echo "alert('successfully registered!!!')";
	header('Location: mail.php?val=$f&val1=$eventname');
}

}
?>

<html>
<head>
<title>Signup page</title>  
</head>
<body>
<center>
<h1><b><u>COLLEGE FEST REGISTRATION FORM</u></b></h1>
    </center>
      <form method="POST" action=" "><center>
      <font color="blue">
        <h2>Register Here for <?php echo $eventname;?> event</h2></font>
        <br><label><table border="0" width="130%" height="80%" >
		<tr><td>Reg No:</td><td> <input type="text"  name="regno" placeholder="Reg no" required autofocus></td><tr>
		<tr><td>Name:</td><td> <input type="text" class="form-control" name="name" placeholder="Name" required ></td><tr>
	<tr><td>Age:</td><td> <input type="number" class="form-control" name="age" placeholder="Age"value="" required ></td></tr>
	<tr><td>Address:</td><td> <textarea rows='5' cols='25' class="form-control" name="address" placeholder="Address" value="" required ></textarea></td></tr>
        <tr><td>Gender:</td><td> <input type="radio" class="form-control" name="sex" >Male<input type="radio" class="form-control" name="sex">Female</td></tr>
	<tr><td>Email:</td><td> <input type="text" class="form-control" name="email" placeholder="E-mail address" required></td></tr>
	
	<tr><td>Mobile no:</td><td> <input type="text" class="form-control" name="mobno" placeholder="Mobile no" required></td></tr>
        <tr><td>Department: </td><td><input type="text" class="form-control" name="dept" placeholder="department" value="" required ></td></tr>
	
 <tr><td colspan="2"><button name="submit" type="submit">SUBMIT</button></td></tr>
 </table></label>
 
 </center>
 </form> 
 </body>
</html>

