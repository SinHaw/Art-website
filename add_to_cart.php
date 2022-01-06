<?php
$name = $_POST["name"];
$price = $_POST["price"];
$image = $_POST["img"];

session_start();
if (isset($_SESSION['MM_Username'])) {
    $username = $_SESSION['MM_Username'];

    require_once("connection.php");

    $sql = "SELECT * FROM cart WHERE name = '$name'";

    $repeatcheck = mysqli_query($conn, $sql);
    $qtycheck = mysqli_fetch_assoc($repeatcheck);
    if (mysqli_num_rows($repeatcheck) >= 1) {
        $qtycheck['qty'];
        $qty=$qtycheck['qty']+1;
        $sql="UPDATE cart SET qty = $qty WHERE name = '$name'";
        $result = mysqli_query($conn, $sql);
        echo '<script>window.history.back();</script>';
        
    } else {
        $sql = "INSERT INTO cart(name,price,qty,image,username)VALUE('$name','$price',1,'$image','$username')";
        $result = mysqli_query($conn, $sql);
        echo '<script>window.history.back();</script>';

    }

} else {
    echo '<script>alert("Please Login To Add to Cart"); location.replace(document.referrer);</script>';
}
