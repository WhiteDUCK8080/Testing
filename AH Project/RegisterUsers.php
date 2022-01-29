<?php
	include "Database.php";

$username = $_POST['username'] ;
$password = $_POST['password'] ;
$email = $_POST['email'] ;
$admin = $_POST['admin'] ;
      
$sql = "INSERT INTO Users (username, password, email, admin, clicks) VALUES ('$username','$password','$email','$admin','0');";
  
 if(mysqli_query($conn,$sql))
{
 echo "<h1>Success!</h1>";
 echo "<h2>User Added to the database.</h2>";
}
 else {
 echo "<h1>Failed</h1>";
 echo "<h2>Couldn't add user to the data base as E-Mail was the same.";
}
?>