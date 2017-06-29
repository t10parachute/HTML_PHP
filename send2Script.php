<?php
	header('Content-type: text/html; charset=utf-8');

         echo "<h2>Dine indtastede værdier er:</h2>";
         echo "Navn: "; echo $name=$_POST['name']; 
         echo "<br>";
         echo "Køn: "; echo $gender=$_POST['gender'];
		 echo "<br>";
		 echo "Størrelse: "; echo $size=$_POST['size'];
		 
		 $file="Test.txt";
		 file_put_contents($file, $name . PHP_EOL, FILE_APPEND);
		 $to = "tomberthel@gmail.com";
         $subject = "Emne...........";
         $message = "<b>Toms message :)))</b>";
         $message .= "<h1>This is a headline.</h1>";
		 $message .= " Næste linie";
         
         $header = "From:none\r\n";
         $header .= "Cc:\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
		 
?>