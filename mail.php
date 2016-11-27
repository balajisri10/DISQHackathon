<html>
   
   <head>
      <title>Sending mail...</title>
   </head>
   
   <body>
      
      <?php
	  $f=$_GET['val'];
	  $g=$_GET['val1'];
         $to = $f;
         $subject = "Event registration";
         
         $message = "<b>Successfully registered!!!</b>";
         $message .= "<h1>You are registered the".$g."</h1>";
         
         $header = "From:balaji.raj37@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
			header('Location: home.php');
         }else {
            echo "Message could not be sent...";
			header('Location: home.php');
         }
      ?>
      
   </body>
</html>