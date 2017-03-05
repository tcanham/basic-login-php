<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location: loginPage.php');
}
?>

<h1>Welcome <?php echo $_SESSION['user'];?></h1>
<a href="logout.php">logout</a>