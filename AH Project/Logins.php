<?php
      include "Database.php";

$username = $_POST['username'] ;
$password = $_POST['password'] ;


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

//Execute query
$result = $conn->query($sql);

if($result->num_rows>0){

    echo "Login Successful</br>";
    session_start();
    $_SESSION['username'] = $username;

    echo "<h2>Welcome, " . $username . "</h2>";

    if($row = $result->fetch_assoc()){

        if ($row['admin'] == 1){
            echo ("admin user");
            header("Location: Admin Registry.php");
        }else{
            echo ("normal user");
            header("Location: cookieclicks.php");
        }

    }

} else {

    echo "No user found";

}

 //close the connection
mysqli_close($conn) ;

?>