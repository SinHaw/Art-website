<?php
session_start();
$search=$_POST['search'];
$_SESSION['SEARCH']=$search;
header("Location:Products.php?search=1");

?>