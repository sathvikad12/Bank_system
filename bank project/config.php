<?php 
 
 $username='sathvika';
 $password='pinkypin';
 $host ='localhost';
 $db='simple_bank';
 $port=3307;
 $conn = new mysqli($host. ':' . $port , $username ,$password, $db );
 if($conn->connect_error){
     die (" connection failed: " .$conn->connect_error);
 }

 
?>