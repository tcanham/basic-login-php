<?php

session_start();
if($_POST['user']){
$_SESSION['user'] = $_POST['user'];
header('location: index.php');
}
?>
login