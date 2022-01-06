<?php
session_start();
$username = $_POST["username"];
$password = $_POST["txtpassword"];
$memberid = $_SESSION['id'];
$file=$_FILES['fileToUpload'];
$picture=$file['name'];

require_once("connection.php");


if ($username != "") {
    $sql = "UPDATE member SET Name = '$username' WHERE Id=$memberid";
    $result = mysqli_query($conn, $sql);
    $_SESSION['MM_Username'] = $username;
}

if ($password != "") {
    $sql = "UPDATE member SET Password = '$password 'WHERE Id=$memberid";
    $result = mysqli_query($conn, $sql);
}
if ($picture != "") {
    $allowedType = array("image/gif", "image/jpeg", "image/jpg", "image/png");

    if (!in_array($file["type"], $allowedType)) {
        echo "File Type is invalid";
        header("location:account.php?type=1");
    }
    $target = "profile_picture/" . $username . "_" . $picture;

    $result = move_uploaded_file($file["tmp_name"], $target);

    
        $sql = "UPDATE member SET Profile_Picture = '$target' WHERE Id=$memberid";
        $result = mysqli_query($conn, $sql);
        $_SESSION['picture']=$target;
    
}
header("Location:index.php");



