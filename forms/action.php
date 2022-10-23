<?php
 include 'contact.php';

 $Your Name=$_POST['Your Name'];
 $Your Email=$_POST['Your Email'];
 $Mobile Number=$_POST['Mobile Number'];
 $Message=$_POST['Message'];

 $sql="INSERT INTO templates(YourName, Your Email,  Mobile Number, Message)VALUES('$Your Name', '$Your Email', '$Mobile Number','$Message')";
 $result=mysql_query($conn, $sql);

 if($result){
     header('Location:/contact.php')
 }

 ?>
 
 
