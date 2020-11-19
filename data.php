<?php 
  
//connect to database
$db=mysqli_connect('hostname','root','password','dbname');
//getting data
$email=$_POST['email'];
//inserting data to database
$sql="INSERT INTO User(Username)VALUES('$email')";
mysqli_query($db,$sql);
  
?> 
