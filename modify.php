.<?php
session_start();
$msg="";
$user=$_SESSION['eventsession'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hackathon");
$sql="select * from event where name='".$user."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$a=$row[0];
$b=$row[1];
$c=$row[2];
$d=$row[3];
$e=$row[4];
$f=$row[5];

mysqli_close($con);
if(isset($_POST['submit']))
{
$a=$_POST['name'];
$b=$_POST['desc'];
$c=$_POST['date'];
$d=$_POST['from'];
$e=$_POST['to'];
$f=$_POST['location'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"osp");
$sqll="update event set name='$a',desc='$b',date='$c',from='$d',to='$e',location='$f' where name='".$user."'";
if(mysqli_query($con,$sqll))
{
echo "alert('The details are updated successfully!!!')";
header('Location: home.php');
}
else
{
echo "alert('Updating error has been found!!!')";
header('Location: home.php');
}
	mysqli_close($con);
	
}
?>
<html>
<head>
<title>modify</title>  
</head>
<body>
<form method="POST" action=" "><center>
      <font color="blue">
        <h2>Modify Here</h2></font>
        <br><label><table border="0" width="130%" height="80%" ><tr><td>
        Event Name:</td><td> <input type="text" class="form-control" name="name" value="<?php echo "$a"; ?>" required autofocus></td>  </tr>
	<tr><td>Event description:</td><td> <textarea rows='5' cols='15' class="form-control" name="desc" value="<?php echo "$b"; ?>" required ></textarea></td></tr>
        <tr><td>Event date:</td><td> <input type="text" class="form-control" name="date"  value="<?php echo "$c"; ?>" required ></td></tr>
	<tr><td>Event timing- From:</td><td> <input type="text" class="form-control" name="from" value="<?php echo "$d"; ?>" required></td> </tr>
	<tr><td>To:</td><td> <input type="text" class="form-control" name="to" value="<?php echo "$e"; ?>" required ></td></tr>
	<tr><td>Event Location:</td><td> <input type="text" class="form-control" name="location" value="<?php echo "$f"; ?>" required></td> </tr>
        
 <tr><td colspan="2"><button name="submit" type="submit">UPDATE</button></td></tr>
 </table></label>
 
 </center>
 </form> 
</body>
</html>

