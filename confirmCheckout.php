<?php
session_start();
$username = $_SESSION['MM_Username'];

require_once("connection.php");

$sql="INSERT INTO transact(name,price,qty,images,username,Date) SELECT name,price,qty,image,username,Date FROM cart WHERE username='$username'";
$result = mysqli_query($conn,$sql);
$sql = "DELETE FROM cart WHERE username='$username'";
$result = mysqli_query($conn,$sql);

header("Location:index.php")





?>