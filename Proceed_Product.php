<?php
    session_start();
    $_SESSION['category'] = $_POST['Cont'];
    $_SESSION['brand']=$_POST['brand'];
    Header("Location:Products.php");
?>