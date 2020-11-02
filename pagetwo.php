<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to page Two.</h5>



  <a href="pageone.php">Dashboard</a><br>
 
  <a >Movies :</a><br>
  <a > A</a><br>
  <a >B</a><br>
  <a >C</a><br>
  <a >D</a><br>

<h5>Do you want to go to <a href="pagethree.php">nextpage</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


