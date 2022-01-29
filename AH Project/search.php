<?php
    include "header.php";
?>

<h1> Search Page</h1>

<div class = "Record_container">
<table border="1">
      <tr>
        <td>Username</td>
        <td>Password</td>
        <td>E-mail</td>
        <td>Admin</td>
        <td>Clicks</td>
      </tr>
      <tr>
<?php
    if (isset($_POST["search"])) {

        $stringIn = $_POST["search"];
        
        $search = mysqli_real_escape_string($conn, $_POST["search"]);
        $sql = "SELECT * FROM Users WHERE username LIKE '$stringIn' OR email LIKE '$stringIn'";
        $result = mysqli_query($conn, $sql);

        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        printf("System has found %d users.\n",$rowcount);

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<td>" . $row["username"]. " </td><td> " . $row["password"]. "</td><td> " . $row["email"] . "</td><td>" . $row["admin"]. "</td> <td>" . $row["clicks"]. "</td>";
              echo "</tr>";
            }
          }
    }
    
?>
</table>
</div>  