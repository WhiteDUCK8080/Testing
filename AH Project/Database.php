<?php
  	//set up the connection variables for connecting to the Database
  	$server = 'localhost';
    $user = 'root';
    $password = 'usbw';
    $database = 'AH_Project';

    $conn = mysqli_connect($server,$user,$password,$database);

	if (mysqli_connect_errno())
	  {
	    echo "<h1>Connection Error</h1>";
	    echo "Failed to connect to MySQL Database: " . mysqli_connect_error();
	    //and kill the script
	    die();
	  }

?>