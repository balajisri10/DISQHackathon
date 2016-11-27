<html>
<head>
<title>eventdetails</title>  
</head>
<body>
<font color="blue">
        <h2>Event Details Here</h2></font>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hackathon");
$sql="select * from event";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "<br><br>";
	echo "Event name: ".$row[0];
	echo "<br>Event description: ".$row[1];
	echo "<br>Event date: ".$row[2];
	echo "<br>Event Timing- From: ".$row[3]."  To: ".$row[4];
	echo "<br>Event Location: ".$row[5];
	echo "<br><br><br>";
	
}
?>
</body>
</html>