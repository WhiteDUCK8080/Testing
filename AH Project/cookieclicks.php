<html>
<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<body>

<h1>The Element Object</h1>
<h2>The addEventListener() Method</h2>

<p>Execute a function when a user clicks on a button:</p>
<p id="res"> </p>
<button id="myBtn">Try it</button>

<p id="demo">

<script>
const element = document.getElementById("myBtn");
    element.addEventListener("click", function(){
      fetch("http://localhost:8080/aH%20Project/AddCookie.php?username=<?php echo $_SESSION['username']; ?>", {
        method: "GET",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
      })
      .then((response) => response.text())
      .then((res) => (document.getElementById("result").innerHTML = res));
    })
</script>

</body>
</html>