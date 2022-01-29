<?php
      include "header.php"
?>

<form action = "search.php" method = "POST">
  <input type = "text" name = "search" placeholder = "Search">
  <button type = "submit" name = "Submit Search"></button>
</form>

<h1>Front Page</h1>
<h2>All Records</h2>

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
    $sql = "SELECT * FROM Users";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    
    if($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<td>" . $row["username"]. " </td><td> " . $row["password"]. "</td><td> " . $row["email"] . "</td><td>" . $row["admin"]. "</td> <td>" . $row["clicks"]. "</td>";
        echo "</tr>";
      }
    }

  ?>
  </table>
</div>

</body>
</html>