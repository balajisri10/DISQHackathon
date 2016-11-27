
<html>
<head>
<style>
#head
{
	position:absolute;
	left: 470px;
	top:30px;
}
#welcome
{
	position:absolute;
	left: 650px;
	top:90px;
}
</style>
</head>
<body>


    <h1 id="head" align="center" font="timesnewroman">COLLEGE FEST EVENT PORTAL</h1>
    

<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<br><br><br><br><br><br><br>
<b><div id="welcome"><h3>Welcome </h3></div></b>
<b><div id="clockbox" align="right"></div></b>

</body>
</html>