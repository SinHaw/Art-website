<?php 
$qty=$_POST["qty"];
$cartid = $_POST["cartid"];

require_once("connection.php");

$sql="UPDATE cart SET qty = $qty WHERE id=$cartid";

$result = mysqli_query($conn,$sql);

header("location: show_cart.php");
?>